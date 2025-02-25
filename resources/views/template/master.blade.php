<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="tailwindcss.css"></script>
  <title>SSKRU RUN</title>
</head>

  <body class="bg-gray-100 font-sans">
    <!-- Header -->
    <div class="bg-white text-black p-4 pt-8 flex justify-between items-center fixed top-0 left-0 w-full z-10 shadow-md ">
      <div>
        <p class="text-xs">User: 001</p>
        <h1 class="text-lg font-bold">สวัสดี <span class=" text-sm text-black">{{ Session::get('name')}}</span></h1>
        <p class="text-sm text-purple-700">วิ่งระยะทางรวม <span class="text-yellow-500">1,000</span><span class="text-purple-700"> กิโลเมตร!</span></p>
      </div>
      <div class= "" ><span class=" text-xl text-purple-700 font-bold ">SSKRU <span class="text-xl text-yellow-500 font-bold">RUN</span></span></div>
    </div>

    <!-- content -->

    @yield('body')

     <!-- Footer -->
  <div class="fixed bottom-0 left-0 w-full bg-white border-t flex justify-around items-center p-4 pb-7">
  
  
  <a href="{{ asset('index') }}">
    <button class="flex flex-col items-center hover:text-blue-500 hover:scale-105 transition-transform duration-300 space-y-1">
      <img 
        src="{{ asset('images/' . ((Route::current()->getName() == 'button.index') ? 'homeN' : 'Nohome') . '.png') }}" 
        class="w-5 h-5" 
        alt="Home Icon"
      >
      <span class="text-xs {{ Route::current()->getName() == 'button.index' ? 'text-purple-700' : '' }}"> 
        Home
      </span>
    </button>
  </a>

  <a href="{{ asset('rank') }}">
    <button class="flex flex-col items-center hover:text-blue-500 hover:scale-105 transition-transform duration-300 space-y-1">
      <img 
        src="{{ asset('images/' . ((Route::current()->getName() == 'button.rank') ? 'rankN' : 'Norank') . '.png') }}" 
        class="w-5 h-5" 
        alt="Rank Icon"
      >
      <span class="text-xs {{ Route::current()->getName() == 'button.rank' ? 'text-purple-700' : '' }}">
        Rank
      </span>
    </button>
  </a>

  <a href="{{ asset('profile') }}">
    <button class="flex flex-col items-center hover:text-blue-500 hover:scale-105 transition-transform duration-300 space-y-1">
      <img 
        src="{{ asset('images/' . ((Route::current()->getName() == 'button.profile') ? 'profileN' : 'Noprofile') . '.png') }}" 
        class="w-5 h-5" 
        alt="Profile Icon"
      >
      <span class="text-xs {{ Route::current()->getName() == 'button.profile' ? 'text-purple-700' : '' }}">
        Profile
      </span>
    </button>
  </a>

  <a href="{{ asset('logout') }}">
    <button class="flex flex-col items-center hover:text-blue-500 hover:scale-105 transition-transform duration-300 space-y-1">
      <img 
        src="{{ asset('images/' . ((Route::current()->getName() == 'button.logout') ? 'logoutN' : 'Nologout') . '.png') }}" 
        class="w-5 h-5" 
        alt="Logout Icon"
      >
      <span class="text-xs {{ Route::current()->getName() == 'button.logout' ? 'text-purple-700' : '' }}">
        Logout
      </span>
    </button>
  </a>

</body>
</html>

