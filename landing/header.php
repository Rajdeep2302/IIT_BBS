<div style='font-family: "Vast Shadow", serif;' class="bg-[#028090] w-screen h-[70px] flex justify-between items-center p-[10px] ">
    <div>
        <p text->Logo</p>
    </div>
    <div class="gap-[20px] justify-center items-center hidden lg:flex">
        <a href="./" class="text-white hover:underline duration-300 transition-all hover:scale-105 focus:scale-90 text-[22px]">Home</a>
        <a href="./" class="text-white hover:underline duration-300 transition-all hover:scale-105 focus:scale-90 text-[22px]">Course</a>
        <a href="./" class="text-white hover:underline duration-300 transition-all hover:scale-105 focus:scale-90 text-[22px]">Blog</a>
        <a href="./" class="text-white hover:underline duration-300 transition-all hover:scale-105 focus:scale-90 text-[22px]">Contact us</a>
        <button class="bg-[#02C39A] w-[250px] h-[45px] text-white rounded-xl text-[22px] ">Login here</button>
    </div>
    <div onclick="show_menu()" class="lg:hidden flex justify-center items-center w-[50px] h-[50px] bg-[#02C39A]">
        <i id="icon" class="fa-solid fa-bars"></i>
    </div>
    <div class="hidden absolute top-0 left-0 mt-[70px] w-screen" id="menu">
        <div class="w-screen bg-[#02c39a] flex flex-wrap flex-col items-end">
            <a href="" class=" w-fit px-5 py-2 hover:underline" style='font-family: "Vast Shadow", serif;'>Home</a>
            <a href="" class=" w-fit px-5 py-2 hover:underline" style='font-family: "Vast Shadow", serif;'>Course</a>
            <a href="" class=" w-fit px-5 py-2 hover:underline" style='font-family: "Vast Shadow", serif;'>Blog</a>
            <a href="" class=" w-fit px-5 py-2 hover:underline" style='font-family: "Vast Shadow", serif;'>Contact Us</a>
        </div>
    </div>
    <script>
        function show_menu() {
            const menu = document.getElementById("menu")
            menu.classList.toggle("hidden")
        }
    </script>
</div>