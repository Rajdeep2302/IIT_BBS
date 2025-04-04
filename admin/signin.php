<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Quiz Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-96">
        <h2 class="text-2xl font-bold text-center text-blue-900">Login</h2>
        
        <form id="loginForm" action="./server/signin.php" method="post" class="mt-4">
            <label class="block mb-2 text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email" class="w-full p-2 border rounded" placeholder="Enter your email" required>
            
            <label class="block mt-4 mb-2 text-sm font-medium text-gray-700">Password</label>
            <input type="password" id="password" name="password" class="w-full p-2 border rounded" placeholder="Enter your password" required>

            <button type="submit" class="mt-4 w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                Login
            </button>
        </form>

        <div class="mt-4 text-center">
            <a href="forgot-password.html" class="text-blue-600 hover:underline">Forgot Password?</a>
        </div>

        <div class="mt-4 text-center">
            <span class="text-gray-700">Don't have an account?</span>
            <a href="signup.html" class="text-blue-600 hover:underline">Sign up</a>
        </div>
    </div>
</body>
</html>
