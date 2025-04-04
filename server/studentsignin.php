<?php
include("./database.php"); // Include database connection

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    // Basic validation
    if (empty($email) || empty($password)) {
        die("Please enter both email and password.");
    }

    // Prepare a secure SQL query
    $stmt = $conn->prepare("SELECT * FROM student WHERE email = ?");
    $stmt->bind_param("s", $email); // Bind email as string
    $stmt->execute();
    
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify password (MD5 - insecure, better to use password_hash)
        if ($user['password'] === md5($password)) {
            // Store user data in session
            //set coockie
            setcookie("regid", $user['regid'], time() + (86400 * 30), "/"); // 86400 = 1 day

            // Redirect to dashboard
            header("Location: ../profile.php");
            exit();
        } else {
            echo "<script>alert('Invalid email or password.'); window.location.href='../index.php';</script>";
        }
    } else {
        echo "<script>alert('Invalid email or password.'); window.location.href='../index.php';</script>";
    }

    $stmt->close(); // Close statement
}

// Close database connection
$conn->close();
?>
