<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Lora:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #F8F4E1;
      color: #543310;
      font-family: 'Roboto', sans-serif;
    }
    
    h1, h2, h3, h4, h5, h6 {
      font-family: 'Lora', serif;
      font-weight: 700;
    }
    
    p {
      font-family: 'Roboto', sans-serif;
    }
    
    .btn {
      font-family: 'Poppins', sans-serif;
    }
    
    .card {
      font-family: 'Poppins', sans-serif;
    }
    
    .heading-font {
      font-family: 'Lora', serif;
    }
  </style>
</head>
<body>
<?php include '..\layout\header.php'; ?>

<main class="container mx-auto mt-8">
  <!-- Cart Section -->
  <div class="bg-white p-8 rounded-lg shadow-lg">
    <h2 class="text-3xl font-bold text-center text-[#74512D] mb-6">Your Cart</h2>
    <div id="cartItems" class="space-y-6">
      <!-- Example Cart Item -->
      <div class="flex items-center justify-between border-b pb-6">
        <div class="flex items-center space-x-6">
          <button class="delete-btn text-red-500 hover:text-red-700 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
          <img src="./../../images/a3.jpg" alt="Product Image" class="w-24 h-24 rounded-lg shadow">
          <div>
            <h3 class="text-xl font-bold text-[#74512D]">Beige Casual Sandals</h3>
            <p class="text-gray-700 text-lg">$<span class="price">68.56</span></p>
            <p class="text-gray-600 text-sm">Size: M</p>
          </div>
        </div>
        <div class="flex items-center space-x-6">
          <div class="flex items-center border rounded-lg px-4 py-2">
            <button class="quantity-btn text-[#74512D] hover:text-gray-900 transition px-2 font-bold">-</button>
            <span class="quantity mx-3 text-lg font-medium text-gray-800">1</span>
            <button class="quantity-btn text-[#74512D] hover:text-gray-900 transition px-2 font-bold">+</button>
          </div>
        </div>
      </div>
    </div>
  </div>

 <!-- Checkout Summary Section -->
<section class="py-16 bg-gradient-to-r from-[#F5E9DB] to-white">
  <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-8">
    <h2 class="text-2xl font-bold text-[#74512D] mb-6 text-center">Checkout Summary</h2>
    <div class="space-y-4">
      <!-- Sub Total -->
      <div class="flex justify-between items-center text-lg">
        <p class="text-gray-700">Sub Total</p>
        <p id="subtotal" class="font-bold text-gray-900">$20,568</p>
      </div>
      <!-- Delivery Fee -->
      <div class="flex justify-between items-center text-lg">
        <p class="text-gray-700">Delivery Fee</p>
        <p id="delivery" class="font-bold text-gray-900">$68.56</p>
      </div>
      <!-- Total -->
      <div class="flex justify-between items-center text-lg font-bold border-t pt-4">
        <p class="text-gray-800">Total</p>
        <p id="total" class="text-xl text-[#74512D]">$27,424</p>
      </div>
    </div>
    <!-- Checkout Button -->
    <div class="text-center mt-8">
      <button class="bg-[#74512D] text-white px-8 py-3 rounded-lg hover:bg-[#AF8F6F] transition-transform transform hover:scale-105">
        Proceed to Checkout
      </button>
    </div>
  </div>
</section>



<?php include '..\layout\footer.php'; ?>
</body>
</html>
