@extends('template.admin_master')
   
@section('body')

<section class="py-16 px-0 my-9 pt-20 max-w-md m-auto" >

      <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-4 text-gray-800 text-center">Add event</h2>
        <form action="#" method="POST" enctype="multipart/form-data">
          <!-- NameEvent -->
      <div class="mb-4">
        <label for="name_event" class="block text-sm font-medium text-gray-700">NameEvent</label>
        <input type="text" id="name_event" name="name_event" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm" placeholder="Enter event name">
      </div>

      <!-- รายละเอียด -->
      <div class="mb-4">
        <label for="details" class="block text-sm font-medium text-gray-700">รายละเอียด</label>
        <input type="text" id="details" name="details" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm" placeholder="Enter details">
      </div>

      <!-- Start Time -->
      <div class="mb-4">
        <label for="start_time" class="block text-sm font-medium text-gray-700">Start Time</label>
        <input type="time" id="start_time" name="start_time" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm">
      </div>

      <!-- End Time -->
      <div class="mb-4">
        <label for="end_time" class="block text-sm font-medium text-gray-700">End Time</label>
        <input type="time" id="end_time" name="end_time" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm">
      </div>

      <!-- Location Start -->
      <div class="mb-4">
        <label for="location_start" class="block text-sm font-medium text-gray-700">Location Start</label>
        <input type="text" id="location_start" name="location_start" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm" placeholder="Enter start location">
      </div>

      <!-- Location Other -->
      <div class="mb-4">
        <label for="location_other" class="block text-sm font-medium text-gray-700">Location Other</label>
        <input type="text" id="location_other" name="location_other" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm" placeholder="Enter other location">
      </div>

      <!-- Location End -->
      <div class="mb-4">
        <label for="location_end" class="block text-sm font-medium text-gray-700">Location End</label>
        <input type="text" id="location_end" name="location_end" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm" placeholder="Enter end location">
      </div>

    
          <!-- Upload Image -->
          <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
            <input type="file" id="image" name="image" class="mt-1 block w-full text-gray-500 sm:text-sm">
          </div>
    
          <!-- Submit Button -->
          <div class="mt-6">
            <button type="submit" class="w-full bg-purple-700 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            <a href='{{asset("admin_index")}}'>
            Submit
            </a>   
            </button>
          </div>
        </form>
      </div>
      </section> 



@endsection


