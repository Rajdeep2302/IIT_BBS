<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Quiz Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-center text-blue-900">Sign Up</h2>
        <p class="text-gray-600 text-center mt-2">Create your account</p>

        <form id="signupForm" action="./server/student.php" method="POST" novalidate class="mt-4">
            <label class="block mb-2 text-sm font-medium text-gray-700">Full Name</label>
            <input type="text" name="fullName" class="w-full p-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500" placeholder="Enter your full name" required>

            <label class="block mt-4 mb-2 text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="signupEmail" class="w-full p-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500" placeholder="Enter your email" required>

            <label class="block mt-4 mb-2 text-sm font-medium text-gray-700">Phone Number</label>
            <input type="tel" name="signupPhone" class="w-full p-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500"
                   placeholder="Enter your phone number" required pattern="[0-9]{10}" title="Enter a 10-digit phone number">

            <label class="block mt-4 mb-2 text-sm font-medium text-gray-700">Password</label>
            <input type="password" id="signupPassword" name="signupPassword" class="w-full p-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500" 
                   placeholder="Enter your password" required minlength="6" title="Password must be at least 6 characters long">

            <label class="block mt-4 mb-2 text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" name="confirmPassword" class="w-full p-2 border border-gray-300 rounded focus:ring-2 focus:ring-blue-500" 
                   placeholder="Confirm your password" required oninput="this.setCustomValidity(this.value != signupPassword.value ? 'Passwords do not match!' : '')">

            <input type="submit" value="Sign Up" class="mt-4 w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition"/>
        </form>

        <div class="mt-4 text-center">
            <span class="text-gray-700">Already have an account?</span>
            <a href="signin.php" class="text-blue-600 hover:underline">Login</a>
        </div>
    </div>
</body>
</html>
