<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming Quizzes</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="max-w-4xl w-full bg-white p-8 rounded-lg shadow-lg">
        
        <h2 class="text-3xl font-bold text-blue-600 text-center">Upcoming Quizzes</h2>

        <!-- Quizzes Table -->
        <div class="mt-6 overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-left">Quiz</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Subject</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Date</th>
                        <th class="border border-gray-300 px-4 py-2 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">HTML Basics</td>
                        <td class="border border-gray-300 px-4 py-2">Web Development</td>
                        <td class="border border-gray-300 px-4 py-2">April 12, 2025</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <button class="bg-blue-500 text-white px-4 py-1 rounded-md hover:bg-blue-700" onclick="window.location.href='./faculty/quiz.html?id=2'">Start Quiz</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">JavaScript Fundamentals</td>
                        <td class="border border-gray-300 px-4 py-2">JavaScript</td>
                        <td class="border border-gray-300 px-4 py-2">April 17, 2025</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <button class="bg-blue-500 text-white px-4 py-1 rounded-md hover:bg-blue-700" onclick="window.location.href='./faculty/quiz.html?id=1'">Start Quiz</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">Database Queries</td>
                        <td class="border border-gray-300 px-4 py-2">DBMS</td>
                        <td class="border border-gray-300 px-4 py-2">April 22, 2025</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <button class="bg-blue-500 text-white px-4 py-1 rounded-md hover:bg-blue-700" onclick="window.location.href='./faculty/quiz.html?id=2'">Start Quiz</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Back Button -->
        <button onclick="history.back()" class="mt-6 bg-gray-500 text-white px-6 py-2 rounded-md hover:bg-gray-700">
            ⬅ Back to Course Details
        </button>
        <?php
  include "./landing/footer.php";
  ?>
    </div>
</body>
</html>
