<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f5f5f5]">

<?php include '..\layout\header.php'; ?>

  <!-- Hero Section -->
  <section class="relative">
    <img src="./../../images/category_bg.jpg" alt="Hero Image" class="w-full h-64 object-cover">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[80%]">
      <div class="relative">
        <input type="text" placeholder="Search" class="w-full py-3 pl-4 pr-10 rounded-full bg-white shadow-md">
        <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-[#b57f58]">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M9 3a6 6 0 100 12A6 6 0 009 3zM2 9a7 7 0 1112.901 4.368l4.16 4.161a1 1 0 01-1.414 1.414l-4.161-4.16A7 7 0 012 9z" clip-rule="evenodd" />
          </svg>
        </button>
      </div>
    </div>
  </section>

  <!-- Products Section -->
  <section class="max-w-6xl mx-auto mt-10 px-4">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Sidebar -->
      <aside class="md:col-span-1">
        <div class="flex flex-col gap-4">
          <button class="py-3 bg-[#b57f58] text-white rounded-full hover:bg-[#a77255]">New Collection</button>
          <button class="py-3 bg-[#b57f58] text-white rounded-full hover:bg-[#a77255]">Mens</button>
          <button class="py-3 bg-[#b57f58] text-white rounded-full hover:bg-[#a77255]">Womens</button>
          <button class="py-3 bg-[#b57f58] text-white rounded-full hover:bg-[#a77255]">Best Sellers</button>
        </div>
      </aside>

      <!-- Product Cards -->
      <div class="md:col-span-2 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Row 1: 3 Cards -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="./../../images/cat3.jpg" alt="Beige Casual Sandals" class="w-full h-40 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold">Beige Casual Sandals</h3>
            <p class="text-sm text-gray-600 mt-2">Lorem ipsum dolor sit amet...</p>
            <p class="text-[#b57f58] font-bold mt-2">$68.56</p>
            <div class="flex justify-between mt-4">
             
              <button class="bg-[#b57f58] text-white py-2 px-4 rounded-lg hover:bg-[#a77255]">ADD TO CART</button>
            </div>
          </div>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="./../../images/cat4.jpg" alt="Product 2" class="w-full h-40 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold">Product 2</h3>
            <p class="text-sm text-gray-600 mt-2">Lorem ipsum dolor sit amet...</p>
            <p class="text-[#b57f58] font-bold mt-2">$75.00</p>
            <div class="flex justify-between mt-4">
              <button class="bg-[#b57f58] text-white py-2 px-4 rounded-lg hover:bg-[#a77255]">BUY NOW</button>
            </div>
          </div>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="./../../images/c1.jpg" alt="Product 3" class="w-full h-40 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold">Product 3</h3>
            <p class="text-sm text-gray-600 mt-2">Lorem ipsum dolor sit amet...</p>
            <p class="text-[#b57f58] font-bold mt-2">$80.00</p>
            <div class="flex justify-between mt-4">
              <button class="bg-[#b57f58] text-white py-2 px-4 rounded-lg hover:bg-[#a77255]">BUY NOW</button>
            </div>
          </div>
        </div>

        <!-- Row 2: 4 Cards -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="./../../images/cat1.jpg" alt="Product 4" class="w-full h-40 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold">Product 4</h3>
            <p class="text-sm text-gray-600 mt-2">Lorem ipsum dolor sit amet...</p>
            <p class="text-[#b57f58] font-bold mt-2">$85.00</p>
            <div class="flex justify-between mt-4">
              <button class="bg-[#b57f58] text-white py-2 px-4 rounded-lg hover:bg-[#a77255]">BUY NOW</button>
            </div>
          </div>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="./../../images/cat10.jpg" alt="Product 5" class="w-full h-40 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold">Product 5</h3>
            <p class="text-sm text-gray-600 mt-2">Lorem ipsum dolor sit amet...</p>
            <p class="text-[#b57f58] font-bold mt-2">$90.00</p>
            <div class="flex justify-between mt-4">
              <button class="bg-[#b57f58] text-white py-2 px-4 rounded-lg hover:bg-[#a77255]">BUY NOW</button>
            </div>
          </div>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="./../../images/cat11.jpg" alt="Product 6" class="w-full h-40 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold">Product 6</h3>
            <p class="text-sm text-gray-600 mt-2">Lorem ipsum dolor sit amet...</p>
            <p class="text-[#b57f58] font-bold mt-2">$95.00</p>
            <div class="flex justify-between mt-4">
              <button class="bg-[#b57f58] text-white py-2 px-4 rounded-lg hover:bg-[#a77255]">BUY NOW</button>
            </div>
          </div>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
          <img src="./../../images/cat12.jpg" alt="Product 7" class="w-full h-40 object-cover">
          <div class="p-4">
            <h3 class="text-lg font-semibold">Product 7</h3>
            <p class="text-sm text-gray-600 mt-2">Lorem ipsum dolor sit amet...</p>
            <p class="text-[#b57f58] font-bold mt-2">$100.00</p>
            <div class="flex justify-between mt-4">
              <button class="bg-[#b57f58] text-white py-2 px-4 rounded-lg hover:bg-[#a77255]">BUY NOW</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="py-10"></div>

<?php include '..\layout\footer.php'; ?>

</body>
</html>
