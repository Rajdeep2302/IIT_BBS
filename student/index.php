<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 p-5">

    <!-- Dashboard Container -->
    <div class="max-w-5xl mx-auto bg-white shadow-lg rounded-lg p-6">
        
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-blue-900">Dashboard</h2>
            <input type="text" placeholder="Search" class="p-2 border rounded-lg w-52">
        </div>

        <!-- My Courses Section -->
        <h3 class="text-xl font-semibold text-blue-800 mb-3">My Courses</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="bg-white shadow-md p-4 rounded-lg border-l-4 border-blue-500">
                <h4 class="font-semibold text-blue-700">Physics</h4>
                <div class="w-full bg-gray-300 rounded-full h-2 mt-2">
                    <div class="bg-blue-600 h-2 rounded-full" style="width: 40%;"></div>
                </div>
                <p class="text-sm text-gray-600 mt-1">40% Complete</p>
            </div>
            <div class="bg-white shadow-md p-4 rounded-lg border-l-4 border-blue-500">
                <h4 class="font-semibold text-blue-700">English</h4>
                <div class="w-full bg-gray-300 rounded-full h-2 mt-2">
                    <div class="bg-blue-600 h-2 rounded-full" style="width: 76%;"></div>
                </div>
                <p class="text-sm text-gray-600 mt-1">76% Complete</p>
            </div>
            <div class="bg-white shadow-md p-4 rounded-lg border-l-4 border-blue-500">
                <h4 class="font-semibold text-blue-700">Mathematics</h4>
                <div class="w-full bg-gray-300 rounded-full h-2 mt-2">
                    <div class="bg-blue-600 h-2 rounded-full" style="width: 92%;"></div>
                </div>
                <p class="text-sm text-gray-600 mt-1">92% Complete</p>
            </div>
            <div class="bg-white shadow-md p-4 rounded-lg border-l-4 border-blue-500">
                <h4 class="font-semibold text-blue-700">Aptitude Test</h4>
                <div class="w-full bg-gray-300 rounded-full h-2 mt-2">
                    <div class="bg-blue-600 h-2 rounded-full" style="width: 34%;"></div>
                </div>
                <p class="text-sm text-gray-600 mt-1">34% Complete</p>
            </div>
        </div>

        <!-- Statistics Section -->
        <!-- My Statistics Section -->
<h3 class="text-xl font-semibold text-blue-800 mt-6 mb-3">My Statistics</h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    
    <!-- Time Spent -->
    <div class="bg-white shadow-md p-4 rounded-lg">
        <h4 class="font-semibold text-blue-700 mb-3">Time Spent (Last Week)</h4>
        <p class="text-3xl font-bold text-blue-600">56h <span class="text-green-500 text-sm">↑ 9%</span></p>
        
        <!-- Bar Chart -->
        <div class="flex items-end space-x-3 mt-4 h-32">
            <div class="w-6 bg-blue-500 h-16 rounded"></div>
            <div class="w-6 bg-blue-500 h-24 rounded"></div>
            <div class="w-6 bg-blue-500 h-20 rounded"></div>
            <div class="w-6 bg-blue-500 h-28 rounded"></div>
            <div class="w-6 bg-blue-500 h-22 rounded"></div>
            <div class="w-6 bg-blue-500 h-14 rounded"></div>
            <div class="w-6 bg-blue-500 h-8 rounded"></div>
        </div>

        <!-- Labels -->
        <div class="flex justify-between text-sm text-gray-600 mt-2">
            <span>M</span><span>T</span><span>W</span><span>T</span><span>F</span><span>S</span><span>S</span>
        </div>
        
    </div>

    <!-- Progress -->
    <div class="bg-white shadow-md p-4 rounded-lg flex flex-col items-center">
        <h4 class="font-semibold text-blue-700">Progress</h4>
        <svg class="w-24 h-24 mt-4" viewBox="0 0 36 36">
            <circle class="text-gray-300 stroke-current" stroke-width="4" cx="18" cy="18" r="16" fill="none"></circle>
            <circle class="text-blue-500 stroke-current" stroke-width="4" stroke-dasharray="10,100" cx="18" cy="18" r="16" fill="none"></circle>
        </svg>
        <p class="text-xl font-bold text-blue-600 mt-2">10% Completed</p>
        <p class="text-sm text-gray-600">Completed / In Progress / To Start</p>
    </div>

</div>


            <!-- Progress -->
            <div class="bg-white shadow-md p-4 rounded-lg flex flex-col items-center">
                <h4 class="font-semibold text-blue-700">Progress</h4>
                <svg class="w-24 h-24 mt-4" viewBox="0 0 36 36">
                    <circle class="text-gray-300 stroke-current" stroke-width="4" cx="18" cy="18" r="16" fill="none"></circle>
                    <circle class="text-blue-500 stroke-current" stroke-width="4" stroke-dasharray="10,100" cx="18" cy="18" r="16" fill="none"></circle>
                </svg>
                <p class="text-xl font-bold text-blue-600 mt-2">10% Completed</p>
                <p class="text-sm text-gray-600">Completed / In Progress / To Start</p>
            </div>
        </div>

        <!-- Feedback Section -->
        <h3 class="text-xl font-semibold text-blue-800 mt-6 mb-3">Feedback</h3>
        <div class="bg-white shadow-md p-4 rounded-lg">
            <textarea class="w-full p-2 border rounded-lg mt-2" rows="3" placeholder="Enter feedback..."></textarea>
            <button class="mt-2 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                Submit Feedback
            </button>
        </div>

   
</body>
</html>
