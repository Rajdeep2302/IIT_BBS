    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reports</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body class="bg-gray-100">
        <div class="flex h-screen">
            <!-- Sidebar -->
            <aside class="w-64 bg-blue-900 text-white p-5 fixed h-screen">
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
            <main class="flex-1 p-6 ml-64">
                <h1 class="text-3xl font-semibold text-blue-900">Student Reports</h1>
                
                <!-- Student List -->
                <div class="mt-4 bg-white p-4 rounded-lg shadow">
                    <h2 class="text-xl font-semibold">Select a Student</h2>
                    <ul id="studentList" class="mt-2 space-y-2"></ul>
                </div>

                <!-- Student Report -->
                <div id="studentReport" class="mt-6 bg-white p-4 rounded-lg shadow hidden">
                    <h2 class="text-xl font-semibold" id="studentName"></h2>

                    <!-- Student Performance -->
                    <div class="mt-4">
                        <h3 class="text-lg font-semibold">Overall Performance</h3>
                        <p id="performanceText"></p>
                        <div class="w-full bg-gray-200 h-4 rounded mt-2">
                            <div id="performanceBar" class="bg-blue-600 h-4 rounded"></div>
                        </div>
                    </div>
                    
                    <!-- Course Progress -->
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold">Course Progress</h3>
                        <ul id="courseProgress" class="mt-2"></ul>
                    </div>

                    <!-- Quiz & Exam Results -->
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold">Quiz & Exam Results</h3>
                        <table class="w-full mt-2 border-collapse border border-gray-300">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="border border-gray-300 px-4 py-2">Subject</th>
                                    <th class="border border-gray-300 px-4 py-2">Type</th>
                                    <th class="border border-gray-300 px-4 py-2">Score</th>
                                    <th class="border border-gray-300 px-4 py-2">Date</th>
                                </tr>
                            </thead>
                            <tbody id="quizExamResults"></tbody>
                        </table>
                    </div>

                    <!-- Activity Log -->
                    <div class="mt-6">
                        <h3 class="text-lg font-semibold">Recent Activity</h3>
                        <ul id="activityLog" class="mt-2"></ul>
                    </div>
                </div>
            </main>
        </div>

        <script>
            const students = [
                {
                    id: 1,
                    name: "Alice Johnson",
                    performance: 85,
                    courses: [
                        { name: "Web Development", progress: 90 },
                        { name: "Machine Learning", progress: 80 }
                    ],
                    quizzesExams: [
                        { subject: "Web Development", type: "Quiz", score: 92, date: "2025-03-20" },
                        { subject: "Machine Learning", type: "Exam", score: 88, date: "2025-03-18" }
                    ],
                    activity: [
                        "Completed a Web Dev assignment",
                        "Scored 92% in Machine Learning quiz"
                    ]
                },
                {
                    id: 2,
                    name: "Bob Williams",
                    performance: 72,
                    courses: [
                        { name: "Cybersecurity", progress: 60 },
                        { name: "Python Programming", progress: 75 }
                    ],
                    quizzesExams: [
                        { subject: "Cybersecurity", type: "Exam", score: 70, date: "2025-03-15" },
                        { subject: "Python Programming", type: "Quiz", score: 85, date: "2025-03-22" }
                    ],
                    activity: [
                        "Submitted a project on cybersecurity",
                        "Completed a Python programming test"
                    ]
                }
            ];

            function loadStudents() {
                const studentList = document.getElementById("studentList");
                studentList.innerHTML = "";

                students.forEach(student => {
                    const li = document.createElement("li");
                    li.className = "cursor-pointer text-blue-600 hover:underline";
                    li.textContent = student.name;
                    li.onclick = () => showReport(student);
                    studentList.appendChild(li);
                });
            }

            function showReport(student) {
                document.getElementById("studentName").textContent = student.name;
                document.getElementById("performanceText").textContent = `Performance Score: ${student.performance}%`;
                document.getElementById("performanceBar").style.width = `${student.performance}%`;

                // Course Progress
                const courseProgress = document.getElementById("courseProgress");
                courseProgress.innerHTML = "";
                student.courses.forEach(course => {
                    const li = document.createElement("li");
                    li.className = "mb-2";
                    li.innerHTML = `${course.name}: <span class="text-blue-600 font-bold">${course.progress}%</span>`;
                    courseProgress.appendChild(li);
                });

                // Quiz & Exam Results
                const quizExamResults = document.getElementById("quizExamResults");
                quizExamResults.innerHTML = "";
                student.quizzesExams.forEach(result => {
                    const tr = document.createElement("tr");
                    tr.innerHTML = `
                        <td class="border border-gray-300 px-4 py-2">${result.subject}</td>
                        <td class="border border-gray-300 px-4 py-2">${result.type}</td>
                        <td class="border border-gray-300 px-4 py-2 text-blue-600 font-bold">${result.score}%</td>
                        <td class="border border-gray-300 px-4 py-2">${result.date}</td>
                    `;
                    quizExamResults.appendChild(tr);
                });

                // Activity Log
                const activityLog = document.getElementById("activityLog");
                activityLog.innerHTML = "";
                student.activity.forEach(activity => {
                    const li = document.createElement("li");
                    li.className = "mb-2";
                    li.textContent = activity;
                    activityLog.appendChild(li);
                });

                document.getElementById("studentReport").classList.remove("hidden");
            }

            loadStudents();
        </script>
    </body>
    </html>
