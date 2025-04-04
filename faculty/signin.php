<?php
session_start();
include '../server/database.php';

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        $error = "Please fill in all fields.";
    } else {
        // Prepare the query to fetch user by email
        $stmt = $conn->prepare("SELECT id, name, email, password FROM faculty WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $faculty = $result->fetch_assoc();

            // Verify hashed password
            if (password_verify($password, $faculty['password'])) {
                // set cookies
                setcookie("faculty_id", $faculty['id'], time() + (86400 * 30), "/"); // 30 days

                header("Location: index.php");
                exit();
            } else {
                $error = "Invalid email or password.";
            }
        } else {
            $error = "No account found with that email.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Quiz Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-center text-blue-900">Faculty Login</h2>

        <?php if (!empty($error)): ?>
            <div class="bg-red-100 text-red-700 px-4 py-2 mt-4 rounded"><?php echo $error; ?></div>
        <?php endif; ?>

        <form method="POST" class="mt-4">
            <label class="block mb-2 text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" class="w-full p-2 border rounded" placeholder="Enter your email" required>

            <label class="block mt-4 mb-2 text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" class="w-full p-2 border rounded" placeholder="Enter your password" required>

            <button type="submit" class="mt-4 w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                Login
            </button>
        </form>

        <div class="mt-4 text-center">
            <a href="forgot-password.php" class="text-blue-600 hover:underline">Forgot Password?</a>
        </div>

        <div class="mt-4 text-center">
            <span class="text-gray-700">Don't have an account?</span>
            <a href="signup.php" class="text-blue-600 hover:underline">Sign up</a>
        </div>
    </div>
</body>
</html>
