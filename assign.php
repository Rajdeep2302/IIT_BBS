<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignments</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen flex-wrap flex-col gap-40 mt-[71px]">
    <?php
        include "./landing/header.php"
    ?>
    <div class="max-w-4xl w-full bg-white p-8 rounded-lg shadow-lg">

        <h2 class="text-3xl font-bold text-blue-600 text-center"> Assignments</h2>

        <!-- Assignments Table -->
        <div class="mt-6 overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-left">Course Name</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Assignment</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Last Submission Date</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Action</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Results</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">Web Development</td>
                        <td class="border border-gray-300 px-4 py-2">HTML & CSS Basics</td>
                        <td class="border border-gray-300 px-4 py-2">April 10, 2025</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <button class="bg-green-500 text-white px-4 py-1 rounded-md hover:bg-green-700">View</button>
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center text-black font-semibold">Updated</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">JavaScript</td>
                        <td class="border border-gray-300 px-4 py-2">JavaScript Functions</td>
                        <td class="border border-gray-300 px-4 py-2">April 15, 2025</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <button class="bg-green-500 text-white px-4 py-1 rounded-md hover:bg-green-700">View</button>
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center text-black font-semibold">Updated</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">Database Management</td>
                        <td class="border border-gray-300 px-4 py-2">Database Schema Design</td>
                        <td class="border border-gray-300 px-4 py-2">April 20, 2025</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <button class="bg-green-500 text-white px-4 py-1 rounded-md hover:bg-green-700">View</button>
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center text-black font-semibold">Updated</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Back Button -->
        <button onclick="history.back()" class="mt-6 bg-gray-500 text-white px-6 py-2 rounded-md hover:bg-gray-700">
            ⬅ Back to Course Details
        </button>

    </div>
    <?php
    include "./landing/footer.php";
    ?>
</body>

</html>