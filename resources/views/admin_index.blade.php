@extends('template.admin_master')
   
@section('body')


  <!-- Content -->
  <section class="py-16 px-0 my-8 pt-20" >
  
        <div>
            <button 
                type="submit" 
                class="mb-1 w-full bg-purple-700 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                 <a href='{{asset("admin_add_event")}}'>
                 Add Event
                  </a>
            </button>
        </div>

    <div class="max-w-7xl mx-auto">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-1">
        
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <a href='{{asset("admin_edit")}}'>
          <img src="img/run1.jpg" alt="Image 1" class="w-full h-48 object-cover">
        </a>
          <div class="p-3">
            <h3 class=" font-bold text-gray-800 mb-2">วิ่งจับเธอ</h3>
            <p class="text-gray-600 text-sm">รายละเอียดเกี่ยวกับรูปภาพนี้ จะมีข้อมูลเพิ่มเติม เช่น บรรยายเกี่ยวกับสถานที่หรือเหตุการณ์ที่เกี่ยวข้องกับรูปนี้</p>
          </div>
        </div>

        
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <a href="#">
            <img src="img/run2.jpg" alt="Image 1" class="w-full h-48 object-cover">
          </a>
          <div class="p-3">
            <h3 class=" font-bold text-gray-800 mb-2">วิ่งจับเเมว</h3>
            <p class="text-gray-600 text-sm">รายละเอียดเกี่ยวกับรูปภาพนี้ สามารถเขียนคำอธิบายเพิ่มเติมเกี่ยวกับเหตุการณ์หรือสถานที่นั้น ๆ ได้ที่นี่</p>
          </div>
        </div>

      
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <a href="#">
            <img src="img/run3.jpg" alt="Image 1" class="w-full h-48 object-cover">
          </a>
          <div class="p-3">
            <h3 class=" font-bold text-gray-800 mb-2">วิ่งจับไก่</h3>
            <p class="text-gray-600 text-sm">นี่คือรายละเอียดเกี่ยวกับรูปภาพนี้ สามารถเพิ่มคำอธิบายหรือข้อมูลอื่น ๆ เกี่ยวกับรูปภาพนี้ได้ที่นี่</p>
          </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <a href="#">
            <img src="img/run4.jpg" alt="Image 1" class="w-full h-48 object-cover">
          </a>
          <div class="p-3">
            <h3 class=" font-bold text-gray-800 mb-2">วิ่งจับเเมว</h3>
            <p class="text-gray-600 text-sm">รายละเอียดเกี่ยวกับรูปภาพนี้ สามารถเขียนคำอธิบายเพิ่มเติมเกี่ยวกับเหตุการณ์หรือสถานที่นั้น ๆ ได้ที่นี่</p>
          </div>
        </div>
        
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <a href="#">
            <img src="img/run5.jpg" alt="Image 1" class="w-full h-48 object-cover">
          </a>
          <div class="p-3">
            <h3 class=" font-bold text-gray-800 mb-2">วิ่งจับเเมว</h3>
            <p class="text-gray-600 text-sm">รายละเอียดเกี่ยวกับรูปภาพนี้ สามารถเขียนคำอธิบายเพิ่มเติมเกี่ยวกับเหตุการณ์หรือสถานที่นั้น ๆ ได้ที่นี่</p>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <a href="#">
            <img src="img/run6.jpg" alt="Image 1" class="w-full h-48 object-cover">
          </a>
          <div class="p-3">
            <h3 class=" font-bold text-gray-800 mb-2">วิ่งจับเเมว</h3>
            <p class="text-gray-600 text-sm">รายละเอียดเกี่ยวกับรูปภาพนี้ สามารถเขียนคำอธิบายเพิ่มเติมเกี่ยวกับเหตุการณ์หรือสถานที่นั้น ๆ ได้ที่นี่</p>
          </div>
        </div>

      </div>
    </div>
  </section>


@endsection