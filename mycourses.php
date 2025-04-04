<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 min-h-screen ">
<?php
  include "./landing/header.php";
  ?>
    <div class="max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">My Courses</h1>

        <!-- Courses Container -->
        <div id="courses-container" class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Courses will be injected here dynamically -->
        </div>
    </div>

    <script defer>
        // Sample courses data (Replace with API data if needed)
        const courses = [
            { 
                id: 1, 
                name: "Data Structures & Algorithms", 
                instructor: "Prof. John Doe", 
                progress: 75,
                image: "./image/structure.png" 
            },
            { 
                id: 2, 
                name: "Database Management Systems", 
                instructor: "Dr. Jane Smith", 
                progress: 50,
                image: "./image/database.jpg"
            },
            { 
                id: 3, 
                name: "Web Development with JavaScript", 
                instructor: "Mr. Alex Johnson", 
                progress: 85,
                image: "./image/portal1.jpg"
            },
            { 
                id: 3, 
                name: "Web Development with JavaScript", 
                instructor: "Mr. Alex Johnson", 
                progress: 85,
                image: "./image/portal1.jpg"
            },
            { 
                id: 3, 
                name: "Web Development with JavaScript", 
                instructor: "Mr. Alex Johnson", 
                progress: 85,
                image: "./image/portal1.jpg"
            }
        ];

        // Function to load courses dynamically
        function loadCourses() {
            const container = document.getElementById("courses-container");

            if (courses.length === 0) {
                container.innerHTML = "<p class='text-gray-600'>You have not enrolled in any courses yet.</p>";
                return;
            }

            courses.forEach(course => {
                const courseCard = document.createElement("div");
                courseCard.className = "bg-white shadow-md rounded-lg overflow-hidden transition-transform transform hover:scale-105";

                courseCard.innerHTML = `
                    <img src="${course.image}" alt="${course.name}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-gray-700">${course.name}</h2>
                        <p class="text-gray-600">Instructor: ${course.instructor}</p>
                        <div class="w-full bg-gray-200 h-2 rounded mt-2">
                            <div class="bg-blue-500 h-2 rounded transition-all" style="width: ${course.progress}%;"></div>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">Progress: ${course.progress}%</p>
                        <a href="course.html?id=${course.id}" 
                            class="block mt-4 bg-blue-500 text-white text-center py-2 rounded hover:bg-blue-600 transition">
                            View Course
                        </a>
                    </div>
                `;

                container.appendChild(courseCard);
            });
        }

        // Load courses when page loads
        document.addEventListener("DOMContentLoaded", loadCourses);
    </script>
    <?php
  include "./landing/footer.php";
  ?>
</body>
</html>
