@extends('template.admin_master')
   
@section('body')
<section class="py-16 px-0 my-8 pt-20 m-auto" >
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="w-full max-w-6xl p-4">
    <!-- Title -->
    <h1 class="text-2xl font-bold text-center mb-4">Ranking</h1>

    <!-- Dropdown -->
    <div class="flex justify-center mb-4">
      <select class="bg-gray-300 px-4 py-2 rounded-lg shadow focus:outline-none">
        <option selected>Name Event</option>
        <option>Event 1</option>
        <option>Event 2</option>
      </select>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
      <table class="min-w-full border-collapse border border-gray-300 text-center">
        <!-- Table Head -->
        <thead>
          <tr class="bg-purple-200">
            <th class="py-2 px-4 border border-gray-300 text-left">
              Name
              <input
                type="text"
                placeholder="🔍"
                class="ml-2 bg-white border border-gray-300 rounded-lg px-2 py-1 text-sm focus:outline-none"
              />
            </th>
            <th class="py-2 px-4 border border-gray-300">pace ⬆️</th>
            <th class="py-2 px-4 border border-gray-300">dist ⬆️</th>
            <th class="py-2 px-4 border border-gray-300">duration ⬆️</th>
            <th class="py-2 px-4 border border-gray-300">Last Update ⬆️</th>
          </tr>
        </thead>

        <!-- Table Body -->
        <tbody>
          <!-- Rows -->
          <tr class="bg-gray-200">
            <td class="py-2 px-4 border border-gray-300">Example Name</td>
            <td class="py-2 px-4 border border-gray-300">5:30</td>
            <td class="py-2 px-4 border border-gray-300">10km</td>
            <td class="py-2 px-4 border border-gray-300">1:00:00</td>
            <td class="py-2 px-4 border border-gray-300">2025-01-09</td>
          </tr>
          <!-- Empty Rows -->
          <tr class="bg-gray-300">
            <td class="py-2 px-4 border border-gray-300"></td>
            <td class="py-2 px-4 border border-gray-300"></td>
            <td class="py-2 px-4 border border-gray-300"></td>
            <td class="py-2 px-4 border border-gray-300"></td>
            <td class="py-2 px-4 border border-gray-300"></td>
          </tr>
          <!-- Add as many rows as needed -->
        </tbody>
      </table>
    </div>
  </div>
</section>
@endsection


