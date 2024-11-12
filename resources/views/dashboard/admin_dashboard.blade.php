<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
      
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="flex">
      <!-- Sidebar -->
      <div class="fixed w-64 bg-gray-900 text-gray-200 h-screen hidden md:block">
        <div class="p-4">
          <h1 class="text-2xl font-bold text-white">Dashboard</h1>
        </div>
        <nav class="mt-10">
          <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Dashboard</a>
          <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Settings</a>
          <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Profile</a>
          <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-700">Logout</a>
        </nav>
      </div>
  
      <!-- Main Content -->
      <div class="flex-1 md:ml-64 flex flex-col h-screen overflow-y-hidden">
        <!-- Navbar -->
        <header class="flex items-center justify-between p-4 bg-white shadow-md">
          <div class="text-xl font-semibold text-gray-900">Navbar</div>
          <button class="md:hidden text-gray-900 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </header>
  
        <!-- Content Area -->
        <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
          <div class="text-3xl font-semibold text-gray-800">Welcome to the Dashboard</div>
          <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Sample cards -->
            <div class="bg-white shadow-md rounded-lg p-6">
              <h2 class="text-xl font-semibold text-gray-800">Card 1</h2>
              <p class="text-gray-600">Details about Card 1...</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6">
              <h2 class="text-xl font-semibold text-gray-800">Card 2</h2>
              <p class="text-gray-600">Details about Card 2...</p>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6">
              <h2 class="text-xl font-semibold text-gray-800">Card 3</h2>
              <p class="text-gray-600">Details about Card 3...</p>
            </div>
          </div>
        </main>
      </div>
    </div>
  
  </body>
 
</html>
