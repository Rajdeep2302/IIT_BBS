<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom Scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
    }

    ::-webkit-scrollbar-thumb {
      background-color: #3b82f6;
      border-radius: 4px;
    }

    ::-webkit-scrollbar-track {
      background-color: #e5e7eb;
    }
  </style>
</head>

<body class="bg-gradient-to-br from-blue-100 to-blue-300 min-h-screen flex flex-col">

  <!-- Header -->
  <header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <div class="flex">
          <a href="#" class="flex-shrink-0 flex items-center text-blue-600 text-2xl font-bold">
            Student Portal
          </a>
          <nav class="hidden md:ml-6 md:flex md:space-x-8">
            <a href="#" class="text-gray-900 inline-flex items-center px-1 pt-1 border-b-2 border-blue-500 text-sm font-medium">Dashboard</a>
            <a href="#" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium">My Courses</a>
            <a href="#" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium">Assignments</a>
            <a href="#" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium">Grades</a>
            <a href="#" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium">Profile</a>
            <a href="#" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium">Downloads</a>
            <a href="#contact" class="text-gray-500 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium">Contact Us</a>
          </nav>
        </div>
        <div class="flex items-center">
          <a href="#" class="text-gray-500 hover:text-gray-700 text-sm font-medium">Logout</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->

  <main class="flex-1 overflow-y-auto p-10 ">
    <div class="bg-white p-6 rounded-lg shadow-lg">
      <h1 class="text-3xl font-semibold text-blue-600">Welcome, [Student Name]</h1>
      <p class="mt-2 text-gray-600">Here's an overview of your recent activity.</p>

      <!-- My Courses Section -->
      <div class="mt-6">
        <h2 class="text-2xl font-semibold text-blue-600">My Courses</h2>
        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Course Card -->
          <div class="bg-white p-4 rounded-lg shadow-md">
            <img src="./image/portal1.jpg" alt="Course Image" class="w-full h-32 object-cover rounded-md">
            <h3 class="text-xl font-semibold mt-4 text-blue-600">Course Title</h3>
            <p class="mt-2 text-gray-600">Next Assignment Due: <span class="font-bold">April 10, 2025</span></p>
            <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">View Course</button>
          </div>
          <!-- Repeat for other courses -->
        </div>
      </div>

      <!-- View Other Courses Section -->
      <div class="mt-10">
        <h2 class="text-2xl font-semibold text-blue-600">View Other Courses</h2>
        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Other Course Card -->
          <div class="bg-white p-4 rounded-lg shadow-md">
            <img src="./image/portal2.jpg" alt="Other Course Image" class="w-full h-32 object-cover rounded-md">
            <h3 class="text-xl font-semibold mt-4 text-blue-600">Other Course Title</h3>
            <p class="mt-2 text-gray-600">Brief description of the course.</p>
            <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 explore-btn">Explore Course</button>
          </div>
        </div>
      </div>

      <!-- Popup Modal -->
      <div id="courseModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg p-6 w-11/12 md:w-2/3 lg:w-1/3 shadow-lg relative">
          <!-- Close Button -->
          <button id="closeModal" class="absolute top-2 right-2 text-gray-600 hover:text-gray-900 text-2xl">&times;</button>

          <!-- Course Details -->
          <h3 class="text-2xl font-semibold text-blue-600 mb-4">Course Details</h3>

          <div class="space-y-4">
            <!-- Image -->
            <div class="flex justify-center">
              <img src="./image/portal2.jpg" alt="Course" class="w-40 h-40 object-cover rounded-lg shadow">
            </div>

            <!-- Course Name -->
            <p class="text-lg font-semibold text-gray-700">Course Name:
              <span class="font-normal">Other Course Title</span>
            </p>

            <!-- Description -->
            <p class="text-gray-600">Description: Brief description of the course.</p>

            <!-- Instructor with Image -->
            <div class="flex items-center gap-4">
              <img src="./image/instructor.jpg" alt="Instructor" class="w-12 h-12 object-cover rounded-full shadow">
              <p class="text-gray-700">Instructor: <span class="font-semibold">John Doe</span></p>
            </div>

            <!-- Price -->
            <p class="text-gray-700">Price: <span class="font-semibold">$99</span></p>

            <!-- Start Date -->
            <p class="text-gray-700">Start Date: <span class="font-semibold">April 10, 2025</span></p>

            <!-- Actions -->
            <div class="mt-4 flex justify-center">
              <button class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">Enroll Now</button>
            </div>
          </div>
        </div>
      </div>


      <!-- JavaScript for Modal -->
      <script>
        document.querySelectorAll('.explore-btn').forEach(button => {
          button.addEventListener('click', function() {
            document.getElementById('courseModal').classList.remove('hidden');
          });
        });

        document.getElementById('closeModal').addEventListener('click', function() {
          document.getElementById('courseModal').classList.add('hidden');
        });

        // Close modal when clicking outside the content
        document.getElementById('courseModal').addEventListener('click', function(event) {
          if (event.target === this) {
            this.classList.add('hidden');
          }
        });
      </script>



      <!-- Meet Our Teachers Section -->
      <div class="mt-10">
        <h2 class="text-2xl font-semibold text-blue-600">Meet Our Teachers</h2>
        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Teacher Card -->
          <div class="bg-white p-4 rounded-lg shadow-md flex items-center">
            <img src="./image/portal3.jpg" alt="Teacher Image" class="w-16 h-16 object-cover rounded-full">
            <div class="ml-4">
              <h3 class="text-xl font-semibold text-blue-600">Teacher Name</h3>
              <p class="text-gray-600">Subject Expertise</p>
            </div>
          </div>
          <!-- Repeat for other teachers -->
        </div>
      </div>
    </div>
    <!-- Fun Facts Section -->
    <section class="py-15 bg-white">
      <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- Left Content -->
        <div>
          <h2 class="text-3xl font-bold mb-4">"Education is the most powerful weapon which you can use to change the world."</h2>
          <div class="grid grid-cols-2 gap-4 mt-6">
            <div class="flex items-center space-x-3">
              <img src="https://img.icons8.com/ios-filled/50/000000/group.png" class="w-8 h-8" alt="Global Students Icon">
              <div>
                <h4 class="font-semibold">15,000+</h4>
                <p class="text-gray-600 text-sm">Global Students</p>
              </div>
            </div>
            <div class="flex items-center space-x-3">
              <img src="https://img.icons8.com/ios-filled/50/000000/online.png" class="w-8 h-8" alt="Online Courses Icon">
              <div>
                <h4 class="font-semibold">500+</h4>
                <p class="text-gray-600 text-sm">Online Courses</p>
              </div>
            </div>
            <div class="flex items-center space-x-3">
              <img src="https://img.icons8.com/ios-filled/50/000000/checklist.png" class="w-8 h-8" alt="Classes Completed Icon">
              <div>
                <h4 class="font-semibold">10,000+</h4>
                <p class="text-gray-600 text-sm">Classes Completed</p>
              </div>
            </div>
            <div class="flex items-center space-x-3">
              <img src="https://img.icons8.com/ios-filled/50/000000/globe.png" class="w-8 h-8" alt="Countries Icon">
              <div>
                <h4 class="font-semibold">50+</h4>
                <p class="text-gray-600 text-sm">Countries</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Image -->
        <div>
          <img src="https://via.placeholder.com/500x400" alt="Fun Facts Image" class="rounded-lg shadow-lg w-full object-cover">
        </div>
      </div>
    </section>


    <!-- Ask for Help Section -->
    <div class="mt-10">
      <h2 class="text-2xl font-semibold text-blue-600">Ask for Help</h2>
      <div class="mt-4">
        <label for="question" class="block text-lg text-gray-700 font-semibold">Have a question? Ask here:</label>
        <textarea id="question" rows="3" class="w-full p-3 border border-gray-300 rounded mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Type your question here..."></textarea>
        <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Submit</button>
      </div>
    </div>

    <!-- FAQ Section -->
    <div class="mt-10">
      <h2 class="text-2xl font-semibold text-blue-600">Frequently Asked Questions</h2>
      <div class="mt-4 space-y-4">
        <details class="bg-white p-4 rounded-lg shadow-md cursor-pointer">
          <summary class="text-lg font-semibold text-blue-600">How do I access my course materials?</summary>
          <p class="mt-2 text-gray-600">You can access your course materials by clicking on "My Courses" in the navigation bar.</p>
        </details>
        <details class="bg-white p-4 rounded-lg shadow-md cursor-pointer">
          <summary class="text-lg font-semibold text-blue-600">Where can I see my grades?</summary>
          <p class="mt-2 text-gray-600">Go to the "Grades" section in the dashboard to check your grades for completed assignments.</p>
        </details>
        <details class="bg-white p-4 rounded-lg shadow-md cursor-pointer">
          <summary class="text-lg font-semibold text-blue-600">How do I contact my instructor?</summary>
          <p class="mt-2 text-gray-600">You can contact your instructor through the "Profile" section or by visiting the "Contact Us" page.</p>
        </details>
      </div>
    </div>

    </div> <!-- End of Main Content -->
  </main>

  <!-- Footer -->
  <!-- Review Section -->
  <div class="mt-10">
    <h2 class="text-2xl font-semibold text-blue-600 text-center">Student Reviews</h2>
    <div class="mt-6 space-y-6">
      <!-- Review 1 -->
      <div class="bg-white p-4 rounded-lg shadow-md">
        <p class="text-gray-800 font-semibold">"This platform has completely changed the way I learn! The courses are interactive and easy to follow."</p>
        <p class="text-gray-600 mt-2">- Sarah Johnson</p>
      </div>
      <!-- Review 2 -->
      <div class="bg-white p-4 rounded-lg shadow-md">
        <p class="text-gray-800 font-semibold">"The teachers are amazing, and the support team is always helpful. Highly recommended!"</p>
        <p class="text-gray-600 mt-2">- Alex Brown</p>
      </div>
      <!-- Review 3 -->
      <div class="bg-white p-4 rounded-lg shadow-md">
        <p class="text-gray-800 font-semibold">"I love how organized the dashboard is! It helps me keep track of my courses and progress easily."</p>
        <p class="text-gray-600 mt-2">- Emma Wilson</p>
      </div>
    </div>

    <!-- Submit Review Section -->
    <div class="mt-8">
      <h3 class="text-xl font-semibold text-blue-600">Leave a Review</h3>
      <textarea rows="3" class="w-full p-3 border border-gray-300 rounded mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Share your experience..."></textarea>
      <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Submit Review</button>
    </div>
  </div>

  </div> <!-- End of Main Content -->
  </main>

  <!-- Footer -->
  <footer id="contact" class="bg-blue-600 text-white text-center py-6 mt-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <p class="text-lg font-semibold">Need more help? Contact us</p>
      <p>Email: support@studentportal.com | Phone: +123 456 7890</p>
      <p>&copy; 2025 Student Portal. All rights reserved.</p>
    </div>
  </footer>

</body>

</html>