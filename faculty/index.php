<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Portal</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<?php
if(!isset($_COOKIE['faculty_id'])) {
    echo "<script> window.location.href='signin.php';</script>";
}
?>
<body class="bg-gray-100">

    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-blue-900 text-white p-5">
            <h2 class="text-2xl font-bold mb-6">Faculty Portal</h2>
            <ul>
                <li class="mb-4"><a href="#" class="block py-2 px-3 rounded hover:bg-blue-700">Dashboard</a></li>
                <li class="mb-4"><a href="courses.html" class="block py-2 px-3 rounded hover:bg-blue-700">Courses</a></li>
                <li class="mb-4"><a href="assignments.html" class="block py-2 px-3 rounded hover:bg-blue-700">Assignments & Quizzes</a></li>
                <li class="mb-4"><a href="students.html" class="block py-2 px-3 rounded hover:bg-blue-700">Student Tracking</a></li>
                <li class="mb-4"><a href="#" class="block py-2 px-3 rounded hover:bg-blue-700">Notifications</a></li>
                <li class="mb-4"><a href="./logout.php" class="block py-2 px-3 rounded hover:bg-red-700">logout</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6">
            <h1 class="text-3xl font-semibold text-blue-900">Faculty Dashboard</h1>

            <!-- Course Management -->
            <div class="mt-6 bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold">Course Management</h2>
                <p>Create and update courses with PDFs, videos, and lectures.</p>
                <button class="mt-3 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-800" onclick="addCourse()">+ Add Course</button>
                <ul id="courseList" class="mt-3">
                    <!-- <li class="mt-2">Web Development <button class="ml-3 text-red-600" onclick="removeCourse(this)">Remove</button></li> -->
                </ul>
            </div>

            <!-- Assignment & Quiz Management -->
            <div class="mt-6 bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold">Assignments & Quizzes</h2>
                <p>Upload assignments, set deadlines, and create auto-graded quizzes.</p>
                <button class="mt-3 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-800">Upload Assignment</button>
                <button class="mt-3 ml-3 bg-yellow-600 text-white px-4 py-2 rounded hover:bg-yellow-800">Create Quiz</button>
            </div>

            <!-- Student Performance Tracking -->
            <div class="mt-6 bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold">Student Performance Tracking</h2>
                <p>View student progress, grade assignments, and provide feedback.</p>
                <ul class="mt-3">
                    <li class="mb-2">John Doe - Web Development: <span class="text-blue-600 font-bold">85%</span></li>
                    <li class="mb-2">Jane Smith - Data Science: <span class="text-blue-600 font-bold">90%</span></li>
                </ul>
            </div>

            <!-- Notifications & Reminders -->
            <div class="mt-6 bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold">Send Notifications</h2>
                <textarea id="notificationMessage" class="w-full p-2 mt-2 border rounded" placeholder="Type your message..."></textarea>
                <button class="mt-3 bg-red-600 text-white px-4 py-2 rounded hover:bg-red-800" onclick="sendNotification()">Send</button>
            </div>
        </main>
    </div>

    <script>
        function addCourse() {
            let courseName = prompt("Enter course name:");
            if (courseName) {
                let courseList = document.getElementById("courseList");
                let li = document.createElement("li");
                li.className = "mt-2";
                li.innerHTML = `${courseName} <button class="ml-3 text-red-600" onclick="removeCourse(this)">Remove</button>`;
                courseList.appendChild(li);
            }
        }

        function removeCourse(button) {
            button.parentElement.remove();
        }

        function sendNotification() {
            let message = document.getElementById("notificationMessage").value;
            if (message) {
                alert("Notification Sent: " + message);
                document.getElementById("notificationMessage").value = "";
            } else {
                alert("Please enter a message!");
            }
        }
    </script>

</body>
</html>
