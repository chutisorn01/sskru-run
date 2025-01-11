@extends('template.master')
   
@section('body')


 <!-- content -->
 <section class="py-16 px-0 my-8 pt-20 max-w-md m-auto " >
<body class=" flex items-center justify-center h-screen">
    <div class=" grid grid-cols-1  gap-1" >
<!-- Dropdown -->
      <div class="flex justify-center mb-1 my-2">
        <select class="bg-gray-300 px-4 py-2 rounded-lg shadow focus:outline-none">
          <option selected>Name Event</option>
          <option>Event 1</option>
          <option>Event 2</option>
        </select>
      </div>
    
    <div class="  bg-white rounded-lg shadow-lg overflow-hidden">
        
        <img src="img/run1.jpg" alt="Image 1" class="w-full h-48 object-cover">
     
        <div class="p-3">
          <h3 class=" font-bold text-gray-800 mb-2 ">วิ่งจับเธอ</h3>
          <p class="text-gray-600 text-sm">รายละเอียดเกี่ยวกับรูปภาพนี้ จะมีข้อมูลเพิ่มเติม เช่น บรรยายเกี่ยวกับสถานที่หรือเหตุการณ์ที่เกี่ยวข้องกับรูปนี้</p>
        </div>
      </div>
      <div class="bg-white rounded-lg shadow-lg overflow-hidden ">
      <div class="">
        <h2 class="p-3 font-semibold text-gray-800  text-center">แผนที่</h2>
        <iframe class="w-full h-64 border-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.27991706106!2d-74.2598675!3d40.6976701!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDPCsDAzJzA0LjAiTiA3NMKwMTgnMzAuOCJX!5e0!3m2!1sth!2sth!4v1605627712694!5m2!1sth!2sth" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>


<div class=" p-4">
  <!-- Progress Tracker -->
  <div class="w-full max-w-4xl ">
    <!-- Progress Bar -->
    <div class="flex items-center ">
      <!-- Active Circle -->
      <div class="w-12 h-12 bg-purple-500 rounded-full"></div>
      <!-- Line -->
      <div class="flex-1 h-2 bg-purple-300"></div>
      <!-- Inactive Circle -->
      <div class="w-8 h-8 bg-purple-300 rounded-full"></div>
      <div class="flex-1 h-2 bg-purple-300"></div>
      <!-- Inactive Circle -->
      <div class="w-8 h-8 bg-purple-300 rounded-full"></div>
      <div class="flex-1 h-2 bg-purple-300"></div>
      <!-- Inactive Circle -->
      <div class="w-8 h-8 bg-purple-300 rounded-full"></div>
      <div class="flex-1 h-2 bg-purple-300"></div>
      <!-- Inactive Circle -->
      <div class="w-8 h-8 bg-purple-300 rounded-full"></div>
    </div>

    <!-- Information Box -->
    <div class="relative mt-4">
      <!-- Arrow -->
      <div class="absolute -top-2 left-4 w-4 h-4 bg-gray-300 rotate-45"></div>
      <!-- Box -->
      <div class="bg-gray-300 p-4 rounded-lg shadow">
        <h2 class="text-black font-bold">วิ่งไปไหน</h2>
        <p class="text-gray-600 text-sm mt-2">
          วิ่งไปหาม่อน เพราะว่าม่อนชอบฟันดาบ คุคิ..............
        </p>
      </div>
    </div>
  </div>
</div>
         <!-- Login Button -->
         <div>
            <button 
                type="submit" 
                class=" w-full bg-purple-700 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                 <a href='{{asset("addinformation")}}'>
                 Addinformation
                  </a>
            </button>
        </div>
    </form>

  </section>  

  @endsection

