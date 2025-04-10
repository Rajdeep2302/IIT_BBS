<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center w-screen h-screen">
<?php
  include "./landing/header.php";
  ?>
    <div class="max-w-5xl w-full bg-white p-8 rounded-lg shadow-lg flex flex-col md:flex-row gap-8">

        <!-- Left Side: Course Information -->
        <div class="flex-1">
            <h2 id="course-title" class="text-3xl font-bold text-blue-600">Course Title</h2>
            <p class="mt-4 text-lg text-gray-700">Instructor: <span id="course-instructor" class="font-semibold">Dr. John Doe</span></p>
            <p class="mt-4 text-gray-600">
                This course provides an in-depth understanding of the subject, covering practical examples and hands-on projects.
            </p>

            <h3 class="mt-6 text-xl font-semibold text-gray-800">Course Syllabus</h3>
            <ul class="mt-2 list-disc pl-6 text-gray-700">
                <li>Introduction to Web Development</li>
                <li>HTML, CSS, and JavaScript Basics</li>
                <li>Advanced JavaScript & Frameworks</li>
                <li>Backend Development with Node.js</li>
                <li>Building a Full-Stack Web App</li>
            </ul>

            <!-- Buttons Below Course Syllabus -->
            <div class="mt-6 flex gap-4">
                <button class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-700">Class</button>
                <button class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-700" onclick="window.location.href='quiz.php'">Quiz</button>
                <button class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-700" onclick="window.location.href='assignment.php'">Assignment</button>
            </div>

            <!-- Table Section -->
            <h3 class="mt-6 text-xl font-semibold text-gray-800">Class Schedule</h3>
            <div class="mt-4 overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-300 px-4 w-[1/3] py-2 text-left">Class</th>
                            <th class="border border-gray-300 px-4 w-[1/3] py-2 text-left">Time</th>
                            <th class="border border-gray-300 px-4 w-[1/3] py-2 text-center">View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-gray-300 w-[1/3] px-4 py-2">Web Development</td>
                            <td class="border border-gray-300 w-[1/3] px-4 py-2">10:00 AM - 12:00 PM</td>
                            <td class="border border-gray-300 w-[1/3] px-4 py-2 text-center">
                                <button onclick="window.location.href='lecture.php'" class="bg-green-500 text-white px-4 py-1 rounded-md hover:bg-green-700">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 w-[1/3] px-4 py-2">JavaScript Fundamentals</td>
                            <td class="border border-gray-300 w-[1/3] px-4 py-2">1:00 PM - 3:00 PM</td>
                            <td class="border border-gray-300 w-[1/3] px-4 py-2 text-center">
                                <button onclick="window.location.href='lecture.php'" class="bg-green-500 text-white px-4 py-1 rounded-md hover:bg-green-700">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="border border-gray-300 w-[1/3] px-4 py-2">Backend with Node.js</td>
                            <td class="border border-gray-300 w-[1/3] px-4 py-2">4:00 PM - 6:00 PM</td>
                            <td class="border border-gray-300 w-[1/3] px-4 py-2 text-center">
                                <button onclick="window.location.href='lecture.php'" class="bg-green-500 text-white px-4 py-1 rounded-md hover:bg-green-700">View</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h3 class="mt-6 text-xl font-semibold text-gray-800">Upcoming Assignments</h3>
            <p class="mt-2 text-gray-700">Next Assignment Due: <span class="font-bold">April 10, 2025</span></p>

            <button onclick="history.back()" class="mt-6 bg-gray-500 text-white px-6 py-2 rounded-md hover:bg-gray-700">
                ⬅ Back to Courses
            </button>
        </div>

        <!-- Right Side: Course Image -->
        <div class="flex-1">
            <img id="course-image" src="./image/portal1.jpg" alt="Course Image" class="w-full h-80 object-cover rounded-lg shadow-md">
        </div>
    </div>
    <?php
    include "./landing/footer.php";
    ?>
</body>

</html>