<div style='font-family: "Vast Shadow", serif;' class="fixed top-0  bg-[#ffff] min-w-screen h-[70px] flex justify-between items-center p-[10px] right-0 z-20 ">
    <div>
        <img src="./image/incognito_learner.png" alt="Logo" class="w-[50px] h-[50px] m-4 rounded-full">
    </div>
    <div class="gap-[20px] justify-center items-center hidden lg:flex">

        <a href="./index.php" class="text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 border-blue-500 text-sm font-medium">Dashboard</a>
        <?php
        if (empty($_COOKIE['regid'])) {
            echo '<a href="./mycourses.php" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium">Our Courses</a>';
        } else {
            echo '<a href="./mycourses.php" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium">MY Courses</a>
            <a href="./assign.php" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium">Assignments</a>
        <a href="./profile.php" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium">Profile</a>';
        }

        ?>
        
        <a href="./index.php#contact" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium">Contact Us</a>
        <?php
        if (empty($_COOKIE['regid'])) {
            echo '<a href="./signin.php" class="text-gray-100 hover:text-gray-300 inline-flex items-center border-b-2 border-transparent text-sm font-medium bg-[#33f] text-center px-5 py-2 rounded-full">Login</a>';
        } else {
            echo '<a href="./server/studentlogout.php" class="text-gray-100 hover:text-gray-300 inline-flex items-center border-b-2 border-transparent text-sm font-medium bg-[#f33] text-center px-5 py-2 rounded-full">logout</a>';
        }
        ?>
        
    </div>
    <div onclick="show_menu()" class="lg:hidden flex justify-center items-center w-[50px] h-[50px] bg-[#02C39A]">
        <i id="icon" class="fa-solid fa-bars"></i>
    </div>
    <div class="hidden absolute top-0 left-0 mt-[70px] w-screen" id="menu">
        <div class="w-screen bg-[#02c39a] flex flex-wrap flex-col items-end">
            <a href="./index.php" class="text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 border-blue-500 text-sm font-medium">Dashboard</a>
            <a href="./mycourses.php" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium">My Courses</a>
            <a href="./mycourses.php" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium">Our Courses</a>
            <a href="./assign.php" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium">Assignments</a>
            <a href="./profile.php" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium">Profile</a>
            <a href="./index.php#contact" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium">Contact Us</a>
            <a href="./signin.html" class="text-gray-100 hover:text-gray-300 inline-flex items-center border-b-2 border-transparent text-sm font-medium bg-[#33f] text-center px-5 py-2 rounded-full">Login</a>
            <a href="#contact" class="text-gray-100 hover:text-gray-300 inline-flex items-center border-b-2 border-transparent text-sm font-medium bg-[#f33] text-center px-5 py-2 rounded-full">logout</a>
        </div>
    </div>
    <script>
        function show_menu() {
            const menu = document.getElementById("menu")
            menu.classList.toggle("hidden")
        }
    </script>
</div>