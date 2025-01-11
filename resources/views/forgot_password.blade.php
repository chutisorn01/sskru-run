@extends('template.master')
   
@section('body')

<section class="py-16 px-1 my-9 pt-20 max-w-md m-auto " >
    
<body class="flex items-center justify-center min-h-screen bg-gray-100">
  <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">ลืมรหัสผ่าน</h2>
    <p class="text-gray-600 text-sm text-center mb-4">
      ใส่อีเมลที่ใช้ลงทะเบียนเพื่อรับลิงก์รีเซ็ตรหัสผ่าน
    </p>
    <form action="/forgot-password" method="POST" class="space-y-4">
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">อีเมล</label>
        <input
          type="email"
          id="email"
          name="email"
          required
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
          placeholder="example@example.com"
        />
      </div>
      <button
        type="submit"
        class="w-full bg-purple-700 text-white py-2 px-4 rounded hover:bg-blue-600 focus:ring-4 focus:ring-blue-300"
      >
        ส่งลิงก์รีเซ็ตรหัสผ่าน
      </button>
    </form>
    <div class="text-center mt-4">
      <a href='{{asset("loginsskrurun")}}' class="text-purple-700 hover:underline text-sm">ย้อนกลับไปหน้าเข้าสู่ระบบ</a>
    </div>
  </div>
</section>

@endsection


