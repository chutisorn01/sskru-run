@extends('template.master')
   
@section('body')

  <!-- Content -->
  <section class="py-16 px-0 my-8 pt-20 max-w-md m-auto" >
    <div class="grid grid-cols-1 gap-1">
        <div class="bg-white shadow-lg rounded-lg  p-10  ">
        <!-- รูปโปรไฟล์ -->
         <div class="flex justify-center">
          <img 
        src="img/jan_au.jpg"
        alt="Profile Picture" 
        class="w-40 h-40 rounded-full border-2 border-purple-700 shadow-lg"
        >
         </div>
          <!-- ชื่อ -->
        <div class="text-center mt-4">
         <h1 class="text-2xl font-bold text-gray-800">John Doe</h1>
         <!-- ไอดี -->
        <p class="text-sm text-gray-500">@user:001</p>
        </div>
         <!-- คำอธิบาย -->
        <div class="mt-4 text-gray-600 text-center">
         <p> วิ่งระยะทางรวม 1000 กิโลเมตร</p>
    </div>
</div>

    <div class="bg-white shadow-lg rounded-lg  p-4  ">
    <h2 class="text-xl font-bold text-center mb-4">ค่าพลัง</h2>
        
    <div class="relative w-64 h-64 mx-auto">
       
            <!-- SVG for the radar chart -->
            <svg viewBox="0 0 200 200" class="w-full h-full">
              <!-- Base pentagon -->
              <polygon points="100,20 160,70 130,150 70,150 40,70" 
                       class="fill-gray-200 stroke-gray-400 stroke-1" />
              <!-- Inner pentagon (values) -->
              <polygon points="100,40 140,80 120,130 80,130 60,80" 
                       class="fill-purple-300 fill-opacity-50 stroke-purple-600 stroke-1" />
              <!-- Lines -->
              <line x1="100" y1="20" x2="100" y2="150" class="stroke-gray-400 stroke-1" />
              <line x1="100" y1="20" x2="160" y2="70" class="stroke-gray-400 stroke-1" />
              <line x1="160" y1="70" x2="130" y2="150" class="stroke-gray-400 stroke-1" />
              <line x1="130" y1="150" x2="70" y2="150" class="stroke-gray-400 stroke-1" />
              <line x1="70" y1="150" x2="40" y2="70" class="stroke-gray-400 stroke-1" />
              <line x1="40" y1="70" x2="100" y2="20" class="stroke-gray-400 stroke-1" />
            </svg>
            <!-- Labels -->
            <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
              <span class="text-sm text-gray-800">Power</span>
            </div>
            <div class="absolute top-[25%] left-[85%] transform -translate-x-1/2 -translate-y-1/2">
              <span class="text-sm text-gray-800">Speed</span>
            </div>
            <div class="absolute bottom-[15%] left-[75%] transform -translate-x-1/2 -translate-y-1/2">
              <span class="text-sm text-gray-800">Durability</span>
            </div>
            <div class="absolute bottom-[15%] left-[25%] transform -translate-x-1/2 -translate-y-1/2">
              <span class="text-sm text-gray-800">Agility</span>
            </div>
            <div class="absolute top-[25%] left-[15%] transform -translate-x-1/2 -translate-y-1/2">
              <span class="text-sm text-gray-800">Control</span>
            </div>
          </div>          
    </div>

    <div class="bg-white shadow-lg rounded-lg  p-4  ">
        <div class="max-w-md mx-auto p-4">
            <!-- Title -->
            <h2 class="text-xl font-bold text-center mb-4">Bar Chart</h2>
            <!-- Dropdown -->
      <div class="flex justify-center mb-1 my-2">
        <select class="bg-gray-300 px-4 py-2 rounded-lg shadow focus:outline-none">
          <option selected>Name Event</option>
          <option>Event 1</option>
          <option>Event 2</option>
        </select>
      </div>
             <!-- Dropdown -->
             <div class=" mb-1 my-2">
        <select class="bg-gray-300 px-2 py-2 rounded-lg shadow focus:outline-none">
          <option selected>วัน</option>
          <option>เดือน</option>
          <option>ปี</option>
        </select>
      </div>
            <!-- Chart Container -->
            <div class="grid grid-cols-5 gap-4 items-end h-64 border-l border-b border-gray-300">
              <!-- Bar 1 -->
              <div class="flex flex-col items-center">
                <div class="w-8 bg-blue-500 h-32"></div>
                <span class="text-sm mt-2">Power</span>
              </div>
              <!-- Bar 2 -->
              <div class="flex flex-col items-center">
                <div class="w-8 bg-green-500 h-48"></div>
                <span class="text-sm mt-2">Speed</span>
              </div>
              <!-- Bar 3 -->
              <div class="flex flex-col items-center">
                <div class="w-8 bg-red-500 h-24"></div>
                <span class="text-sm mt-2">Defense</span>
              </div>
              <!-- Bar 4 -->
              <div class="flex flex-col items-center">
                <div class="w-8 bg-yellow-500 h-40"></div>
                <span class="text-sm mt-2">Agility</span>
              </div>
              <!-- Bar 5 -->
              <div class="flex flex-col items-center">
                <div class="w-8 bg-purple-500 h-20"></div>
                <span class="text-sm mt-2">Stamina</span>
              </div>
            </div>
          </div>
          

    </div>
  
</section>

@endsection


