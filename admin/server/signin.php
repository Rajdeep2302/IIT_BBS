<?php
// Connect to the database
include('../../server/database.php');

// Start output buffering
ob_start();

// Check if email and password are sent
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'], $_POST['password'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Prepare query to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM admin WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    
    $result = $stmt->get_result();

    if ($result && $result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Check password (you can use password_hash/verify for better security)
        if ($user['password'] === md5($password)) {
            // Set cookie for session tracking (valid for 1 hour)
            setcookie("adminID", $user['RegId'], time() + 3600, "/");

            // Redirect to dashboard or profile
            header("Location: ../index.php");
            exit();
        } else {
            echo "<script>alert('Incorrect password!'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('User not found!'); window.history.back();</script>";
    }

    $stmt->close();
} else {
    echo "<script>alert('Invalid request'); window.history.back();</script>";
}
?>
