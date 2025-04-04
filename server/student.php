<?php
include("./database.php");
require __DIR__ . "/config.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values
    $fullName = trim($_POST["fullName"]);
    $email = trim($_POST["signupEmail"]);
    $phone = trim($_POST["signupPhone"]);
    $password = $_POST["signupPassword"];
    $confirmPassword = $_POST["confirmPassword"];

    // Basic validation
    if (empty($fullName) || empty($email) || empty($phone) || empty($password) || empty($confirmPassword)) {
        die("All fields are required.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        die("Phone number must be exactly 10 digits.");
    }

    if (strlen($password) < 6) {
        die("Password must be at least 6 characters long.");
    }

    if ($password !== $confirmPassword) {
        die("Passwords do not match.");
    }

    // Generate a Unique Registration ID (Format: QPYYYYMMDDXXXX)
    $datePart = date("Ymd"); // Current Date (YYYYMMDD)
    $randomPart = sprintf("%04d", rand(0, 9999)); // 4-digit random number
    $registrationID = "QP" . $datePart . $randomPart;

    // Ensure unique Registration ID (retry if exists)
    $stmt = $conn->prepare("SELECT regid FROM student WHERE regid = ?");
    $stmt->bind_param("s", $registrationID);
    $stmt->execute();
    $stmt->store_result();

    while ($stmt->num_rows > 0) { // If registration ID exists, generate a new one
        $randomPart = sprintf("%04d", rand(0, 9999));
        $registrationID = "QP" . $datePart . $randomPart;
        $stmt->bind_param("s", $registrationID);
        $stmt->execute();
        $stmt->store_result();
    }
    $stmt->close();

    // Hash password using MD5
    $hashedPassword = md5($password);

    // Check if email or phone already exists
    $stmt = $conn->prepare("SELECT regid FROM student WHERE `email` = ? OR `number` = ?");
    $stmt->bind_param("ss", $email, $phone);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        die("Email or Phone number already exists. Try another.");
    }
    $stmt->close();

    // Insert user into database
    $stmt = $conn->prepare("INSERT INTO student (`regid`, `name`, `email`, `number`, `password`) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $registrationID, $fullName, $email, $phone, $hashedPassword);

    if ($stmt->execute()) {
        //set cookie
        setcookie("regid", $registrationID, time() + (86400 * 30), "/"); // 86400 = 1 day
        // Redirect to profile page 
        header("Location: ../profile.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Close connection
$conn->close();
