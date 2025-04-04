<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Dashboard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Underdog&family=Vast+Shadow&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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

<body class="bg-gradient-to-br from-blue-100 to-blue-300 min-h-screen flex flex-col max-w-screen ">
  <?php
  include "./landing/header.php";
  ?>
  <!-- Main Content -->

  <main class="flex-1 overflow-y-auto p-10 mt-[71px]">
    <div class="bg-white p-6 rounded-lg shadow-lg">
    <?php 
      if(!isset($_COOKIE['regid'])){
        echo'
        <h1 class="text-3xl font-semibold text-blue-600">Welcome to you</h1>
        <p class="mt-2 text-gray-600">Here`s an overview of our recent activity.</p>
        ';
      } else {
        echo'
        <h1 class="text-3xl font-semibold text-blue-600">Welcome back, '.$_COOKIE['regid'].'</h1>
        <p class="mt-2 text-gray-600">Here`s an overview of your recent activity.</p>
        ';
      }
      ?>

      <!-- My Courses Section -->
      <?php 
      if(isset($_COOKIE['regid'])){
        echo '
        <div class="mt-6">
          <h2 class="text-2xl font-semibold text-blue-600">My Courses</h2>
          <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Course Card -->
            <div class="bg-white p-4 rounded-lg shadow-md">
              <img src="./image/portal1.jpg" alt="Course Image" class="w-full h-32 object-cover rounded-md">
              <h3 class="text-xl font-semibold mt-4 text-blue-600">Web Development</h3>
              <p class="mt-2 text-gray-600">Next Assignment Due: <span class="font-bold">April 10, 2025</span></p>
              <button onclick="window.location.href=`course.php`"
                class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                View Course
              </button>
            </div>
            <!-- Course Card -->
            <div class="bg-white p-4 rounded-lg shadow-md">
              <img src="./image/portal1.jpg" alt="Course Image" class="w-full h-32 object-cover rounded-md">
              <h3 class="text-xl font-semibold mt-4 text-blue-600">Web Development</h3>
              <p class="mt-2 text-gray-600">Next Assignment Due: <span class="font-bold">April 10, 2025</span></p>
              <button onclick="window.location.href=`course.php`"
                class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                View Course
              </button>
            </div>
            <!-- Course Card -->
            <div class="bg-white p-4 rounded-lg shadow-md">
              <img src="./image/portal1.jpg" alt="Course Image" class="w-full h-32 object-cover rounded-md">
              <h3 class="text-xl font-semibold mt-4 text-blue-600">Web Development</h3>
              <p class="mt-2 text-gray-600">Next Assignment Due: <span class="font-bold">April 10, 2025</span></p>
              <button onclick="window.location.href=`course.php`"
                class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">
                View Course
              </button>
            </div>
  
            <!-- You can duplicate this div for more courses -->
          </div>
        </div>
        ';

      } ?>


      <?php 
      if(!isset($_COOKIE['regid'])){
        echo '
        <div class="mt-6">
          <img src="./image/body_image.jpg" class="rounded-lg min-w-full h-[300px] md:h-[500px] xl:h-[700px] object-cover" alt="">
          <!-- <div class="bg-[#25f] absolute top-0 mt-[500px] py-[10px] text-[20px] w-[150px] text-center text-white font-mono font-extrabold rounded-full">Login Now</div> -->
        </div>
        ';
      }
      ?>
      <!-- Recent Activity Section -->



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
          <!-- Other Course Card -->
          <div class="bg-white p-4 rounded-lg shadow-md">
            <img src="./image/portal2.jpg" alt="Other Course Image" class="w-full h-32 object-cover rounded-md">
            <h3 class="text-xl font-semibold mt-4 text-blue-600">Other Course Title</h3>
            <p class="mt-2 text-gray-600">Brief description of the course.</p>
            <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 explore-btn">Explore Course</button>
          </div>
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
           <!-- Teacher Card -->
           <div class="bg-white p-4 rounded-lg shadow-md flex items-center">
            <img src="./image/portal3.jpg" alt="Teacher Image" class="w-16 h-16 object-cover rounded-full">
            <div class="ml-4">
              <h3 class="text-xl font-semibold text-blue-600">Teacher Name</h3>
              <p class="text-gray-600">Subject Expertise</p>
            </div>
          </div>
           <!-- Teacher Card -->
           <div class="bg-white p-4 rounded-lg shadow-md flex items-center">
            <img src="./image/portal3.jpg" alt="Teacher Image" class="w-16 h-16 object-cover rounded-full">
            <div class="ml-4">
              <h3 class="text-xl font-semibold text-blue-600">Teacher Name</h3>
              <p class="text-gray-600">Subject Expertise</p>
            </div>
          </div>
           <!-- Teacher Card -->
           <div class="bg-white p-4 rounded-lg shadow-md flex items-center">
            <img src="./image/portal3.jpg" alt="Teacher Image" class="w-16 h-16 object-cover rounded-full">
            <div class="ml-4">
              <h3 class="text-xl font-semibold text-blue-600">Teacher Name</h3>
              <p class="text-gray-600">Subject Expertise</p>
            </div>
          </div>
           <!-- Teacher Card -->
           <div class="bg-white p-4 rounded-lg shadow-md flex items-center">
            <img src="./image/portal3.jpg" alt="Teacher Image" class="w-16 h-16 object-cover rounded-full">
            <div class="ml-4">
              <h3 class="text-xl font-semibold text-blue-600">Teacher Name</h3>
              <p class="text-gray-600">Subject Expertise</p>
            </div>
          </div>
           <!-- Teacher Card -->
           <div class="bg-white p-4 rounded-lg shadow-md flex items-center">
            <img src="./image/portal3.jpg" alt="Teacher Image" class="w-16 h-16 object-cover rounded-full">
            <div class="ml-4">
              <h3 class="text-xl font-semibold text-blue-600">Teacher Name</h3>
              <p class="text-gray-600">Subject Expertise</p>
            </div>
          </div>
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
    <section class="py-15 bg-white mt-10 rounded-xl">
      <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- Left Content -->
        <div>
          <h2 class="text-3xl font-bold mb-4">"Education is the most powerful weapon which you can use to change the world."</h2>
          <div class="grid grid-cols-2 gap-4 mt-6">
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
          </div>
        </div>

        <!-- Right Image -->
        <div>
          <img src="./image/body_image.jpg" alt="Fun Facts Image" class="rounded-lg p-3 m-5 shadow-lg w-full object-cover">
        </div>
      </div>
    </section>


    <!-- Ask for Help Section -->
    <div class="mt-10">
      <h2 class="text-2xl  text-blue-600 font-bold">Ask for Help</h2>
      <div class="mt-4">
        <label for="question" class="block text-lg text-gray-700 font-semibold">Have a question? Ask here:</label>
        <textarea id="question" rows="3" class="w-full p-3 border bg-slate-300 border-gray-300 rounded mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Type your question here..."></textarea>
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
  <div class="m-10">
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
      <textarea rows="3" class="w-full p-3 border bg-slate-300 border-gray-300 rounded mt-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Share your experience..."></textarea>
      <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Submit Review</button>
    </div>
  </div>

  <div class="mt-10 w-screen flex justify-center items-center ">
    <div id="contact" class="max-w-2xl w-full bg-white p-8 rounded-lg shadow-lg ">

      <h2 class="text-3xl font-bold text-blue-600 text-center mb-4">Contact Us</h2>

      <!-- Contact Information -->
      <div class="bg-gray-200 p-4 rounded-md">
        <p class="text-lg"><strong>📞 Mobile:</strong> <span id="mobileNumber">+91 98765 43210</span>
          <button onclick="copyToClipboard('mobileNumber')" class="ml-2 bg-blue-500 text-white px-2 py-1 text-sm rounded hover:bg-blue-700">Copy</button>
        </p>
        <p class="text-lg"><strong>📧 Email:</strong> <span id="email">contact@example.com</span>
          <button onclick="copyToClipboard('email')" class="ml-2 bg-blue-500 text-white px-2 py-1 text-sm rounded hover:bg-blue-700">Copy</button>
        </p>
        <p class="text-lg"><strong>📍 Address:</strong> 123, MG Road, Kolkata, India</p>
        <p class="text-lg"><strong>⏰ Working Hours:</strong> Mon-Fri, 9 AM - 6 PM</p>
      </div>

      <!-- Contact Form -->
      <h3 class="text-2xl font-semibold text-gray-700 mt-6">Send a Message</h3>
      <div class="mt-4">
        <input id="name" type="text" placeholder="Your Name" class="border p-2 rounded w-full mb-2">
        <input id="emailInput" type="email" placeholder="Your Email" class="border p-2 rounded w-full mb-2">
        <textarea id="message" placeholder="Your Message" class="border p-2 rounded w-full mb-2"></textarea>
        <button onclick="sendMessage()" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-700 w-full">Send Message</button>
      </div>
    </div>
  </div>
  <script>
    function copyToClipboard(id) {
      const text = document.getElementById(id).innerText;
      navigator.clipboard.writeText(text);
      alert(id.replace("Number", " Number").replace("email", "Email") + " copied to clipboard!");
    }

    function sendMessage() {
      const name = document.getElementById("name").value;
      const email = document.getElementById("emailInput").value;
      const message = document.getElementById("message").value;

      if (name === "" || email === "" || message === "") {
        alert("Please fill all fields before sending your message.");
        return;
      }

      alert("Message sent successfully! We will get back to you soon.");
      document.getElementById("name").value = "";
      document.getElementById("emailInput").value = "";
      document.getElementById("message").value = "";
    }
  </script>

  </div> <!-- End of Main Content -->
  </main>

  <?php
  include "./landing/footer.php";
  ?>

</body>

</html>