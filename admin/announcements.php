<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-blue-900 text-white p-5 hidden md:block">
            <h2 class="text-2xl font-bold mb-6">Admin Panel</h2>
            <ul>
                <li class="mb-4"><a href="index.php " class="block py-2 px-3 rounded hover:bg-blue-700">Dashboard</a></li>
                <li class="mb-4"><a href="users.php" class="block py-2 px-3 rounded hover:bg-blue-700">Users</a></li>
                <li class="mb-4"><a href="courses.php" class="block py-2 px-3 rounded hover:bg-blue-700">Courses</a></li>
                <li class="mb-4"><a href="reports.php" class="block py-2 px-3 rounded hover:bg-blue-700">Reports</a></li>
                <li class="mb-4"><a href="announcements.php" class="block py-2 px-3 rounded hover:bg-blue-700">Announcements</a></li>
                <li class="mb-4"><a href="profile.php" class="block py-2 px-3 rounded hover:bg-blue-700">Profile</a></li>
            </ul>
        </aside>
        
        <!-- Main Content -->
        <main class="flex-1 p-6">
            <!-- Navbar -->
            <div class="flex justify-between items-center mb-4">
                <button id="toggleSidebar" class="md:hidden bg-blue-600 text-white p-2 rounded">
                    &#9776;
                </button>
                <h1 class="text-3xl font-semibold text-blue-900">Announcements</h1>
            </div>
            
            <div class="mt-6 bg-white p-4 rounded-lg shadow">
                <h2 class="text-xl font-semibold">Create Announcement</h2>
                <textarea id="announcementInput" class="w-full resize-none p-2 border rounded mt-2" placeholder="Type your announcement here..."></textarea>
                <button onclick="addAnnouncement()" class="bg-blue-600 text-white px-4 py-2 rounded mt-2">Post</button>
            </div>
            
            <div class="mt-6 bg-white p-4 rounded-lg shadow">
                <h2 class="text-xl font-semibold">Recent Announcements</h2>
                <ul id="announcementsList" class="mt-2"></ul>
            </div>
        </main>
    </div>

    <script>
        document.getElementById("toggleSidebar").addEventListener("click", function() {
            let sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("hidden");
        });
        
        async function fetchCurrentDate() {
            try {
                let response = await fetch('https://worldtimeapi.org/api/timezone/Etc/UTC');
                let data = await response.json();
                return new Date(data.utc_datetime).toLocaleString();
            } catch (error) {
                return new Date().toLocaleString(); // Fallback if API fails
            }
        }

        async function addAnnouncement() {
            let inputField = document.getElementById('announcementInput');
            let input = inputField.value.trim();
            if (input === "") return;
            
            let date = await fetchCurrentDate();
            let announcement = { text: input, date: date };
            
            let announcements = getAnnouncements();
            announcements.unshift(announcement);
            localStorage.setItem('announcements', JSON.stringify(announcements));
            
            loadAnnouncements();
            inputField.value = "";
        }
        
        function getAnnouncements() {
            return JSON.parse(localStorage.getItem('announcements')) || [];
        }
        
        function removeAnnouncement(index) {
            let announcements = getAnnouncements();
            announcements.splice(index, 1);
            localStorage.setItem('announcements', JSON.stringify(announcements));
            loadAnnouncements();
        }
        
        function loadAnnouncements() {
            let list = document.getElementById('announcementsList');
            list.innerHTML = "";
            let announcements = getAnnouncements();
            
            announcements.forEach((announcement, index) => {
                let li = document.createElement('li');
                li.className = "border-b py-2 flex justify-between items-center p-2";
                li.innerHTML = `
                    <div>
                        <span class="font-semibold">${announcement.text}</span>
                        <br>
                        <small class='text-gray-500'>${announcement.date}</small>
                    </div>
                    <button onclick="removeAnnouncement(${index})" class="bg-red-500 text-white px-2 py-1 rounded">Remove</button>
                `;
                list.appendChild(li);
            });
        }
        
        document.addEventListener("DOMContentLoaded", loadAnnouncements);
    </script>
</body>
</html>