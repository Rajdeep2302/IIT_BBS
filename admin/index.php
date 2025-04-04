<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100">
    <?php
    if(!isset($_COOKIE['adminID'])){ 
        echo '<script>window.location.href="signin.php";</script>';
    }
    ?>

    <!-- Sidebar -->
    <div class="flex h-screen">
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
            <h1 class="text-3xl font-semibold text-blue-900">Dashboard</h1>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-6">
                <div class="bg-white p-6 shadow-lg rounded-lg text-center">
                    <h3 class="text-lg font-semibold">Total Users</h3>
                    <p class="text-3xl font-bold text-blue-700">1,200</p>
                </div>
                <div class="bg-white p-6 shadow-lg rounded-lg text-center">
                    <h3 class="text-lg font-semibold">Active Courses</h3>
                    <p class="text-3xl font-bold text-green-600">45</p>
                </div>
                <div class="bg-white p-6 shadow-lg rounded-lg text-center">
                    <h3 class="text-lg font-semibold">Total Instructors</h3>
                    <p class="text-3xl font-bold text-purple-600">15</p>
                </div>
                <div class="bg-white p-6 shadow-lg rounded-lg text-center">
                    <h3 class="text-lg font-semibold">Pending Support Requests</h3>
                    <p class="text-3xl font-bold text-red-500">10</p>
                </div>
            </div>

            <!-- Instructor Details -->
            <div class="mt-8 bg-white p-6 shadow-lg rounded-lg">
                <h2 class="text-xl font-semibold text-gray-800">Instructors & Their Courses</h2>
                <table class="w-full mt-4 border-collapse">
                    <thead>
                        <tr class="bg-blue-700 text-white">
                            <th class="py-3 px-4 text-left">Instructor Name</th>
                            <th class="py-3 px-4 text-left">Course Name</th>
                            <th class="py-3 px-4 text-left">Course Details</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr class="border-b">
                            <td class="py-3 px-4">Dr. Jane Smith</td>
                            <td class="py-3 px-4">Advanced AI</td>
                            <td class="py-3 px-4">Covers Deep Learning, Neural Networks & NLP</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 px-4">John Doe</td>
                            <td class="py-3 px-4">Web Development</td>
                            <td class="py-3 px-4">HTML, CSS, JavaScript, and React.js</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 px-4">Emily Davis</td>
                            <td class="py-3 px-4">Data Science</td>
                            <td class="py-3 px-4">Python, Pandas, Machine Learning</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 px-4">Michael Brown</td>
                            <td class="py-3 px-4">Cybersecurity</td>
                            <td class="py-3 px-4">Network Security, Ethical Hacking</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

</body>
</html>
