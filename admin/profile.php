<?php
include '../server/database.php'; // DB connection

// Check if adminID cookie is set
if (!isset($_COOKIE['adminID'])) {
    header("Location: signin.php");
    exit();
}

$admin_id = $_COOKIE['adminID'];

// Fetch admin data using RegId
$sql = "SELECT * FROM admin WHERE RegId = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $admin_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $admin = $result->fetch_assoc();
} else {
    echo "Admin not found!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Quiz Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96 text-center">
        <img class="w-24 h-24 mx-auto rounded-full border" src="https://via.placeholder.com/100" alt="Profile Picture">

        <h2 class="text-2xl font-bold text-blue-900 mt-4"><?= htmlspecialchars($admin['name']) ?></h2>
        <p class="text-gray-700 mt-1">User ID: <span><?= htmlspecialchars($admin['RegId']) ?></span></p>

        <div class="mt-4 text-left">
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" class="w-full p-2 border rounded bg-gray-100" value="<?= htmlspecialchars($admin['email']) ?>" readonly>

            <label class="block mt-4 text-sm font-medium text-gray-700">Mobile Number</label>
            <input type="text" class="w-full p-2 border rounded bg-gray-100" value="<?= htmlspecialchars($admin['phone']) ?>" readonly>
        </div>

        <form method="POST" action="./server/logout.php">
            <button class="mt-6 w-full bg-red-600 text-white py-2 rounded hover:bg-red-700" type="submit">
                Logout
            </button>
        </form>
    </div>
</body>
</html>
