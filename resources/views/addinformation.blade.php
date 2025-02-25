@extends('template.master')
   
@section('body')


<section class="py-16 px-0 my-9 pt-20 max-w-md m-auto" >

      <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-4 text-gray-800 text-center">Input Distance and Time</h2>
        <form action="{{route('addinformation_post')}}" method="POST" enctype="multipart/form-data">
          @csrf
        <!-- Distance -->
          <div class="mb-4">
            <label for="distance" class="block text-sm font-medium text-gray-700">Distance (in km)</label>
            <input type="number" id="distance" name="distance" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm  sm:text-sm " placeholder="Enter distance in kilometers">
          </div>
    
          <!-- Time -->
          <div class="mb-4">
            <label for="time" class="block text-sm font-medium text-gray-700">Time (in hours)</label>
            <input type="number" step="0.01" id="time" name="time" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm  sm:text-sm " placeholder="Enter time in hours">
          </div>

              <!-- Date -->
            <div class="mb-4">
               <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
              <input type="date" id="date" name="date" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm">
             </div>
      
            <!-- Heart Rate -->
             <div class="mb-4">
              <label for="hr" class="block text-sm font-medium text-gray-700">HR</label>
            <input type="number" id="hr" name="hr" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm" placeholder="Enter Heart Rate (HR)">
           </div>
    
          <!-- Upload Image -->
          <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Upload Image</label>
            <input type="file" id="image" name="image" class="mt-1 block w-full text-gray-500 sm:text-sm">
          </div>
    
          <!-- Submit Button -->
          <div class="mt-6">
            <button type="submit" class="w-full bg-purple-700 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            <!-- <a href='{{asset("event")}}'> -->
            Submit
            <!-- </a>    -->
            </button>
          </div>
        </form>
      </div>
      </section> 



@endsection


