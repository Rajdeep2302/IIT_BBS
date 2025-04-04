<?php
include '../server/database.php';

$name = $email = $regId = $phone = $error = $success = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $regId = $_POST['regId'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';

    if ($password !== $confirmPassword) {
        $error = "Passwords do not match.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO faculty (RegId, name, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $regId, $name, $email, $hashedPassword);

        if ($stmt->execute()) {
            $success = "Faculty added successfully!";
            $name = $email = $regId = '';
        } else {
            $error = "Error: " . $stmt->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up - Quiz Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-center text-blue-900">Sign Up</h2>
        <p class="text-gray-600 text-center mt-2">Create your account</p>

        <?php if (!empty($error)): ?>
            <div class="bg-red-100 text-red-700 px-4 py-2 mt-4 rounded"><?php echo $error; ?></div>
        <?php elseif (!empty($success)): ?>
            <div class="bg-green-100 text-green-700 px-4 py-2 mt-4 rounded"><?php echo $success; ?></div>
        <?php endif; ?>

        <form method="POST" class="mt-4">
            <label class="block mb-2 text-sm font-medium text-gray-700">Full Name</label>
            <input type="text" name="name" class="w-full p-2 border rounded" value="<?php echo htmlspecialchars($name); ?>" required>

            <label class="block mt-4 mb-2 text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" class="w-full p-2 border rounded" value="<?php echo htmlspecialchars($email); ?>" required>

            <label class="block mt-4 mb-2 text-sm font-medium text-gray-700">Phone Number (Registration ID)</label>
            <input type="tel" name="regId" class="w-full p-2 border rounded" value="<?php echo htmlspecialchars($regId); ?>" pattern="[0-9]{10}" title="Enter a 10-digit registration ID" required>

            <label class="block mt-4 mb-2 text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" class="w-full p-2 border rounded" required>

            <label class="block mt-4 mb-2 text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" name="confirmPassword" class="w-full p-2 border rounded" required>

            <button type="submit" class="mt-4 w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                Sign Up
            </button>
        </form>

        <div class="mt-4 text-center">
            <span class="text-gray-700">Already have an account?</span>
            <a href="signin.php" class="text-blue-600 hover:underline">Login</a>
        </div>
    </div>
</body>
</html>
