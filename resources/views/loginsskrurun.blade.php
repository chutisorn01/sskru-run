<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen m-4">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm">
      <div class= "text-center " ><span class=" text-4xl text-purple-700 font-bold ">SSKRU <span class="text-4xl text-yellow-500 font-bold">RUN</span></span></div>
        <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>

        <form action="#" method="POST">
            <!-- Username -->
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input 
                    type="text" 
                    id="username" 
                    name="username" 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" 
                    placeholder="Enter your username"
                >
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" 
                    placeholder="Enter your password"
                >
            </div>

            <!-- Forgot Password -->
            <div class="mb-4 text-right">
                <a href='{{asset("forgot_password")}}' class="text-sm text-purple-700 hover:underline">Forgot password?</a>
            </div>

            <!-- Login Button -->
            <div>
                <button 
                    type="submit" 
                    class="w-full bg-purple-700 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                   <a href='{{asset("index")}}'>
                    Login
                    </a>
                </button>
            </div>
        </form>

        <!-- Create Account -->
        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">
                Don’t have an account? 
                <a href='{{asset("create_account")}}' class="text-purple-700 hover:underline">Create one</a>
            </p>
        </div>
    </div>
</body>
</html>

