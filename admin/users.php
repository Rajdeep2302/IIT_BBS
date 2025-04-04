<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Management</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-blue-900 text-white p-5">
            <h2 class="text-2xl font-bold mb-6">Admin Panel</h2>
            <ul>
                <li class="mb-4"><a href="index.php" class="block py-2 px-3 rounded hover:bg-blue-700">Dashboard</a></li>
                <li class="mb-4"><a href="users.php" class="block py-2 px-3 rounded hover:bg-blue-700">Users</a></li>
                <li class="mb-4"><a href="courses.php" class="block py-2 px-3 rounded hover:bg-blue-700">Courses</a></li>
                <li class="mb-4"><a href="reports.php" class="block py-2 px-3 rounded hover:bg-blue-700">Reports</a></li>
                <li class="mb-4"><a href="announcements.php" class="block py-2 px-3 rounded hover:bg-blue-700">Announcements</a></li>
                <li class="mb-4"><a href="profile.php" class="block py-2 px-3 rounded hover:bg-blue-700">Profile</a></li>

            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <h1 class="text-3xl font-semibold text-blue-900">Users Management</h1>
            <div class="mt-6 bg-white p-4 rounded-lg shadow">
                <table class="w-full">
                    <thead>
                        <tr class="bg-blue-700 text-white">
                            <th class="py-2 px-4">Name</th>
                            <th class="py-2 px-4">Email</th>
                            <th class="py-2 px-4">Role</th>
                            <th class="py-2 px-4">Actions</th>
                        </tr>
                    </thead>
                    <?php
                    include '../server/database.php'; // database connection

                    $sql = "SELECT * FROM student";
                    $result = $conn->query($sql);
                    ?>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr class="border-b">
                                <td class="py-2 px-4 border"><?= htmlspecialchars($row['name']) ?></td>
                                <td class="py-2 px-4 border"><?= htmlspecialchars($row['email']) ?></td>
                                <td class="py-2 px-4 border">Student</td>
                                <td class="py-2 px-4 border">
                                    <form action="./server/remove_student.php" method="POST" onsubmit="return confirm('Are you sure you want to remove this student?');">
                                        <input type="hidden" name="regid" value="<?= htmlspecialchars($row['regid']) ?>">
                                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>

</html>