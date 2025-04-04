<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Courses Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 fixed h-screen bg-blue-900 text-white p-5">
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
            <h1 class="text-3xl font-semibold text-blue-900">Courses Management</h1>

            <!-- Add Course Form -->
            <!-- Add Course Form -->
            <form action="./server/add_course.php" method="post" enctype="multipart/form-data" class="mt-4 bg-white p-4 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-2">Add New Course</h2>

                <input type="text" name="courseName" placeholder="Course Name" class="p-2 border rounded w-full mb-2" required>

                <textarea name="courseDesc" placeholder="Description" class="p-2 border rounded w-full mb-2" required></textarea>

                <label class="block text-sm font-medium text-gray-700">Select Instructors</label>
                <select name="courseInstructors[]" multiple class="p-2 border rounded w-full mb-2" required>
                    <option value="Jane Smith">Jane Smith</option>
                    <option value="John Doe">John Doe</option>
                    <option value="Emily Davis">Emily Davis</option>
                    <option value="Michael Brown">Michael Brown</option>
                </select>

                <input type="number" name="coursePrice" placeholder="Price" class="p-2 border rounded w-full mb-2" required>

                <input type="date" name="courseDate" class="p-2 border rounded w-full mb-2" required>

                <input type="file" name="courseImage" accept="image/*" class="p-2 border rounded w-full mb-2" required>

                <input type="text" name="courseSyllabus" class="p-2 border rounded w-full mb-2" placeholder="Syllabus">

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Add Course</button>
            </form>


            <!-- Courses Table -->
            <div class="mt-6 bg-white p-4 rounded-lg shadow">
                <table class="w-full">
                    <thead>
                        <tr class="bg-blue-700 text-white">
                            <th class="py-2 px-4">Image</th>
                            <th class="py-2 px-4">Course Name</th>
                            <th class="py-2 px-4">Description</th>
                            <th class="py-2 px-4">Instructors</th>
                            <th class="py-2 px-4">Price</th>
                            <th class="py-2 px-4">Start Date</th>
                            <th class="py-2 px-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../server/database.php';

                        $query = "SELECT * FROM courses ORDER BY id DESC";
                        $result = mysqli_query($conn, $query);

                        if (mysqli_num_rows($result) > 0) {
                            while ($course = mysqli_fetch_assoc($result)) {
                                echo "<tr class='border-b'>";
                                echo "<td class='py-2 px-4'><img src='../uploads/{$course['image']}' class='w-16 h-16 rounded object-cover'></td>";
                                echo "<td class='py-2 px-4'>{$course['course_name']}</td>";
                                echo "<td class='py-2 px-4'>{$course['description']}</td>";
                                echo "<td class='py-2 px-4'>{$course['instructor']}</td>";
                                echo "<td class='py-2 px-4'>₹{$course['price']}</td>";
                                echo "<td class='py-2 px-4'>{$course['date']}</td>";
                                echo "<td class='py-2 px-4'>
                <form method='post' action='./server/delete_course.php' onsubmit='return confirm(\"Are you sure?\")'>
                    <input type='hidden' name='course_id' value='{$course['id']}'>
                    <button type='submit' class='bg-red-500 text-white px-3 py-1 rounded'>Delete</button>
                </form>
              </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7' class='text-center py-4'>No courses found.</td></tr>";
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </main>
    </div>

    <script>
        let courses = [];

        function previewImage() {
            const file = document.getElementById("courseImage").files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("imagePreview").src = e.target.result;
                    document.getElementById("imagePreview").classList.remove("hidden");
                };
                reader.readAsDataURL(file);
            }
        }

        function addCourse() {
            const name = document.getElementById("courseName").value.trim();
            const desc = document.getElementById("courseDesc").value.trim();
            const instructorSelect = document.getElementById("courseInstructors");
            const selectedInstructors = Array.from(instructorSelect.selectedOptions).map(option => option.value);
            const price = document.getElementById("coursePrice").value.trim();
            const date = document.getElementById("courseDate").value;
            const imageInput = document.getElementById("courseImage").files[0];

            if (!name || !desc || selectedInstructors.length === 0 || !price || !date || !imageInput) {
                alert("Please fill all fields!");
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                const newCourse = {
                    id: Date.now(),
                    name,
                    desc,
                    instructors: selectedInstructors,
                    price,
                    date,
                    image: e.target.result
                };

                courses.push(newCourse);
                updateTable();

                // Reset form
                document.querySelector("form").reset();
                document.getElementById("imagePreview").classList.add("hidden");
            };
            reader.readAsDataURL(imageInput);
        }

        function updateTable() {
            const table = document.getElementById("coursesTable");
            table.innerHTML = "";

            courses.forEach(course => {
                const row = document.createElement("tr");
                row.classList.add("border-b");

                row.innerHTML = `
          <td class="py-2 px-4"><img src="${course.image}" class="w-16 h-16 rounded" /></td>
          <td class="py-2 px-4">${course.name}</td>
          <td class="py-2 px-4">${course.desc}</td>
          <td class="py-2 px-4">${course.instructors.join(", ")}</td>
          <td class="py-2 px-4">$${course.price}</td>
          <td class="py-2 px-4">${course.date}</td>
          <td class="py-2 px-4">
            <button onclick="deleteCourse(${course.id})" class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
          </td>
        `;

                table.appendChild(row);
            });
        }

        function deleteCourse(courseId) {
            courses = courses.filter(c => c.id !== courseId);
            updateTable();
        }
    </script>
</body>

</html>