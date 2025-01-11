<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screenmax-w-md m-auto my-10 ">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm "> 
      <div class= "text-center " ><span class=" text-4xl text-purple-700 font-bold ">SSKRU <span class="text-4xl text-yellow-500 font-bold">RUN</span></span></div>
        <h2 class="text-2xl font-bold mb-6 text-center">Create Account</h2>

        <form action="#" method="POST">
            <!-- Username -->
            <div class="mb-4"> 
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm  sm:text-sm " placeholder="Your Name">
              </div>
        
              <!-- Username -->
              <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm  sm:text-sm " placeholder="Your Username">
              </div>
        
              <!-- Password -->
              <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm  sm:text-sm " placeholder="Your Password">
              </div>
        
              <!-- Confirm Password -->
              <div class="mb-4">
                <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" class=" mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm  sm:text-sm " placeholder="Confirm Password ">
              </div>
        
              <!-- Date of Birth -->
              <div class="mb-4">
                <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                <input type="date" id="dob" name="dob" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm  sm:text-sm ">
              </div>
        
              <!-- Phone Number -->
              <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm  sm:text-sm " placeholder="Your Phone Number">
              </div>
        
              <!-- Email -->
              <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm  sm:text-sm " placeholder="Your Email">
              </div>
        
              <!-- Upload Image -->
              <div class="mb-4">
                <label for="profile_picture" class="block text-sm font-medium text-gray-700">Profile Picture</label>
                <input type="file" id="profile_picture" name="profile_picture" class="mt-1 block w-full text-gray-500 sm:text-sm">
              </div>

            
            <!-- Login Button -->
            <div>
                <button        
                    type="submit" 
                    class="w-full bg-purple-700 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    <a href='{{asset("loginsskrurun")}}'>
                    Submit
                    </a>
                </button>
            </div>
        </form>

        
    </div>
</body>
</html>


