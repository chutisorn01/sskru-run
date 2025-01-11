<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen m-4">
  <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-sm">
    <div class= "text-center" ><span class=" text-4xl text-purple-700 font-bold ">SSKRU <span class="text-4xl text-yellow-500 font-bold">RUN</span></span></div>
    <h2 class="text-xl font-bold mb-4 text-gray-800 text-center">Logout Confirmation</h2>
    <p class="text-gray-600 text-center mb-6">Are you sure you want to logout?</p>
    <div class="flex justify-between">
      <!-- Cancel Button -->
      
      <button class="w-1/2 bg-purple-700 text-white py-2 px-4 rounded-md hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
        <a href='{{asset("index")}}'>
        Cancel
        </a>
      </button>
      
      <!-- Confirm Button -->
      <button class="w-1/2 ml-4 bg-purple-700 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
      <a href='{{asset("loginsskrurun")}}'>
      Logout
      </a>
      </button>
    </div>
  </div>
</body>
</html>
