<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .dropdown-menu {
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s ease, visibility 0.3s ease;
    }
    .group:hover .dropdown-menu {
      opacity: 1;
      visibility: visible;
    }
    .dropdown-menu:hover {
      opacity: 1;
      visibility: visible;
    }
  </style>
</head>
<body class="font-sans text-gray-700">

  <!-- Top Bar -->
  <div class="bg-[#493628] text-white text-sm py-2 px-5 flex justify-between">
    <span>Welcome to Sri Luck Footwear</span>
    <div class="flex items-center space-x-4">
      <div>
        <label for="language">Language:</label>
        <select id="language" class="bg-[#493628] text-white border-none focus:outline-none">
          <option>ENG</option>
          <option>FR</option>
        </select>
      </div>
      <div>
        <label for="currency">Currency:</label>
        <select id="currency" class="bg-[#493628] text-white border-none focus:outline-none">
          <option>USD</option>
          <option>EUR</option>
        </select>
      </div>
    </div>
  </div>

  <!-- Middle Bar -->
  <div class="bg-white shadow-md">
    <div class="container mx-auto flex justify-between items-center py-4 px-5">
      <!-- Logo -->
      <h1 class="text-2xl font-bold text-[#40291b]">SRI LUCK</h1>

      <!-- Icons -->
      <div class="flex items-center space-x-6 text-lg text-[#40291b]">
        <a href="#" class="hover:text-[#CBA35C] transition">
          <i class="fa fa-search"></i> 
        </a>
        <a href="./../user/cart.php" class="hover:text-[#CBA35C] transition">
          <i class="fa fa-shopping-cart"></i> 
        </a>
      </div>
    </div>
  </div>

  <!-- Bottom Navbar -->
  <nav class="bg-[#493628]">
    <div class="container mx-auto">
      <ul class="flex justify-center gap-8 py-3 text-white font-medium text-sm relative">
        <li>
          <a href="./../user/home.php" class="text-white hover:text-[#CBA35C] transition">HOME</a>
        </li>
        <li>
          <a href="#" class="text-white hover:text-[#CBA35C] transition">ABOUT US</a>
        </li>
        <!-- Category Dropdown -->
        <li class="relative group">
          <a href="#" class="text-white hover:text-[#CBA35C] transition">CATEGORY</a>
          <div class="dropdown-menu absolute bg-white shadow-md rounded-md mt-2 w-32 text-sm text-left z-50">
            <a href="./../user/men.php" class="block px-4 py-2 text-[#40291b] hover:bg-[#f4f4f4] hover:text-[#CBA35C] transition">Men</a>
            <a href="./../user/women.php" class="block px-4 py-2 text-[#40291b] hover:bg-[#f4f4f4] hover:text-[#CBA35C] transition">Women</a>
            <a href="./../user/kid.php" class="block px-4 py-2 text-[#40291b] hover:bg-[#f4f4f4] hover:text-[#CBA35C] transition">Kids</a>
          </div>
        </li>
        <!-- Login Dropdown -->
        <li class="relative group">
          <a href="#" class="text-white hover:text-[#CBA35C] transition">LOGIN</a>
          <div class="dropdown-menu absolute bg-white shadow-md rounded-md mt-2 w-32 text-sm text-left z-50">
            <a href="./../admin_login.php" class="block px-4 py-2 text-[#40291b] hover:bg-[#f4f4f4] hover:text-[#CBA35C] transition">Admin</a>
            <a href="./../user_login.php" class="block px-4 py-2 text-[#40291b] hover:bg-[#f4f4f4] hover:text-[#CBA35C] transition">User</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>

</body>
</html>
