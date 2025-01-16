<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Lora:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
     body {
        margin: 0;
        padding: 0;
        background-color: #F8F4E1; /* Light cream background */
        color: #543310; /* Dark brown text color */
        font-family: 'Roboto', sans-serif; /* Apply Roboto font for body */
     }

     h1, h2, h3, h4, h5, h6 {
        font-family: 'Lora', serif; /* Apply Lora font for headings */
        font-weight: 700;
     }

     p {
        font-family: 'Roboto', sans-serif; /* Apply Roboto font for paragraphs */
     }

     
     .relative, section {
        margin: 0;
        padding: 0;
     }

     .relative.h-screen.flex.items-center.justify-center {
        margin-bottom: 0;
     }

     section.py-12.bg-gray-50 {
        margin-top: 0;
        padding-top: 20px;
     }

     .hidden-on-mobile {
        display: block;
     }

     .responsive-image {
        width: 100px;
        height: auto;
     }

     @media (max-width: 768px) {
        .hidden-on-mobile {
            display: none;
        }
        .responsive-image {
            width: 50px;
        }
     }

     @media (max-width: 480px) {
        .responsive-image {
            width: 25px;
        }
     }

     /* Additional styles for buttons and sections */
     .btn {
        font-family: 'Poppins', sans-serif; /* Apply Poppins for buttons */
     }

     .text-title {
        font-family: 'Lora', serif; /* Apply Lora font for titles */
        font-weight: 700;
     }

     .card {
        font-family: 'Poppins', sans-serif; /* Apply Poppins font for cards */
     }

     .heading-font {
        font-family: 'Lora', serif; /* For major headings */
     }
    </style>
</head>
<body>
<?php include '..\layout\header.php'; ?>

<!-- Banner Section -->
<div class="relative h-[80vh] flex items-center justify-center from-[#F5E9DB] to-white">

  <!-- Sale Image Container -->
  <img  src="../../images/o.png" id="dynamic" alt="Left Shoe" class="absolute left-0 bottom-0 top-10 max-w-xxs hidden-on-mobile">

<!-- Center Text -->
<div class="text-center lg:text-left relative max-w-sm bg-white p-4 rounded-lg shadow-lg left-20">
  <h1 class="text-2xl font-extrabold text-[#74512D] leading-tight mb-3">
    Explore Sandals
  </h1>
  <p class="mt-2 text-gray-600 text-xs leading-relaxed">
    Comfort and style combined! Discover our wide collection of sandals, perfect for every occasion. Whether you're strolling on the beach, attending a casual outing, or relaxing at home, our sandals bring together premium comfort and timeless style.
  </p>
  <button class="mt-4 px-5 py-2.5 bg-[#74512D] text-white font-semibold rounded-lg hover:bg-[#AF8F6F] shadow-md transition-transform transform hover:scale-105 btn">
    Buy Now
  </button>
</div>

  <!-- Dynamic Right Image Container -->
  <img id="dynamic-image-right" src="../../images/bg1.png" alt="Right Shoe" class="absolute right-5 top-0 max-w-xs">
</div>

<!-- Icon Features Section -->
<section class="py-12 bg-[#F8F4E1]" style="margin: 0; padding-top: 10px;">

  <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
    <!-- Free Delivery -->
    <div class="card">
      <img src="../../images/free-delivery-icon.png" alt="Free Delivery" class="mx-auto mb-4 w-12 h-12">
      <h4 class="text-lg font-bold text-[#74512D]">FREE DELIVERY</h4>
      <p class="text-sm text-gray-500">UK Orders Only</p>
    </div>
    <!-- 7/24 Support -->
    <div class="card">
      <img src="../../images/support-icon.png" alt="7/24 Support" class="mx-auto mb-4 w-12 h-12">
      <h4 class="text-lg font-bold text-[#74512D]">7/24 SUPPORT</h4>
      <p class="text-sm text-gray-500">Dedicated Support</p>
    </div>
    <!-- Easy and Fast Return -->
    <div class="card">
      <img src="../../images/return-icon.png" alt="Easy and Fast Return" class="mx-auto mb-4 w-12 h-12">
      <h4 class="text-lg font-bold text-[#74512D]">EASY AND FAST RETURN</h4>
      <p class="text-sm text-gray-500">Shop with Confidence</p>
    </div>
    <!-- Secure Payment -->
    <div class="card">
      <img src="../../images/secure-payment-icon.png" alt="Secure Payment" class="mx-auto mb-4 w-12 h-12">
      <h4 class="text-lg font-bold text-[#74512D]">SECURE PAYMENT</h4>
      <p class="text-sm text-gray-500">100% Secure Payment</p>
    </div>
  </div>
</section>

<!-- New Arrivals Section -->
<section class="py-16 bg-gradient-to-r from-[#F5E9DB] to-white">
<h2 class="text-4xl text-center font-bold text-[#74512D] mb-10 heading-font">Most Popular</h2>
  <div class="flex justify-center items-center relative">
    <!-- Products Carousel -->
    <div class="grid grid-cols-4 gap-6 overflow-hidden max-w-5xl mx-4" id="product-carousel">
      <!-- Product 1 -->
      <div class="text-center bg-white shadow-lg rounded-lg p-4 hover:shadow-xl transition duration-300">
        <img src="./../../images/pop1.jpg" alt="Girl Kid Sandal" class="w-full h-64 object-cover rounded-md">
        <p class="text-sm font-semibold mt-4 text-[#74512D]">Girl Kid Sandal</p>
        <p class="text-gray-500 text-xs">Color: Grey</p>
        <p class="text-gray-900 font-bold text-lg">15€</p>
        <p class="text-sm text-gray-600 mt-2">Perfect for everyday adventures. Lightweight and durable for active kids.</p>
      </div>
      <!-- Product 2 -->
      <div class="text-center bg-white shadow-lg rounded-lg p-4 hover:shadow-xl transition duration-300">
        <img src="./../../images/pop2.jpg" alt="Boy Kid Sandal" class="w-full h-64 object-cover rounded-md">
        <p class="text-sm font-semibold mt-4 text-[#74512D]">Boy Kid Sandal</p>
        <p class="text-gray-500 text-xs">Color: Brown</p>
        <p class="text-gray-900 font-bold text-lg">18€</p>
        <p class="text-sm text-gray-600 mt-2">Stylish and comfortable. Perfect for both playtime and outings.</p>
      </div>
      <!-- Product 3 -->
      <div class="text-center bg-white shadow-lg rounded-lg p-4 hover:shadow-xl transition duration-300">
        <img src="./../../images/pop4.jpg" alt="Women Sandal" class="w-full h-64 object-cover rounded-md">
        <p class="text-sm font-semibold mt-4 text-[#74512D]">Women Sandal</p>
        <p class="text-gray-500 text-xs">Color: Pink</p>
        <p class="text-gray-900 font-bold text-lg">22€</p>
        <p class="text-sm text-gray-600 mt-2">Elegant design with superior comfort, perfect for casual outings or summer vibes.</p>
      </div>
      <!-- Product 4 -->
      <div class="text-center bg-white shadow-lg rounded-lg p-4 hover:shadow-xl transition duration-300">
        <img src="./../../images/pop6.jpg" alt="Women Sandal" class="w-full h-64 object-cover rounded-md">
        <p class="text-sm font-semibold mt-4 text-[#74512D]">Women Sandal</p>
        <p class="text-gray-500 text-xs">Color: Grey</p>
        <p class="text-gray-900 font-bold text-lg">20€</p>
        <p class="text-sm text-gray-600 mt-2">Sleek and versatile, these sandals are ideal for both work and casual wear.</p>
      </div>
    </div>
  </div>
</section>

<!-- Offers Section -->
<section class="py-16 bg-gradient-to-r from-[#F5E9DB] to-white">
<h2 class="text-4xl text-center font-extrabold text-[#74512D] mb-10 heading-font cursive-font">
    Special Offers
  </h2>
  <div class="max-w-6xl mx-auto flex flex-wrap items-center shadow-lg rounded-lg overflow-hidden bg-white">
    <!-- Video Section -->
    <div class="w-full md:w-1/2 relative">
      <video class="w-full h-full object-cover rounded-l-lg" autoplay loop muted>
        <source src="../../images/of.mp4" type="video/mp4">
      </video>
      <div class="absolute top-4 left-4 bg-[#74512D] text-white text-sm px-3 py-1 rounded-full">
        Limited Time Offer
      </div>
    </div>
    <!-- Text Section -->
    <div class="w-full md:w-1/2 p-8 text-center md:text-left">
      <p class="text-2xl font-semibold text-[#74512D] mb-4">
        Unbeatable Deals, Just For You!🎉
      </p>
      <p class="text-lg mb-6 text-gray-600">
        Refresh your style with exclusive discounts on our latest collection. Enjoy up to <span class="font-bold text-[#74512D]">50% off</span> on select items. Don't wait—these offers are going fast!
      </p>
      <p class="text-sm text-gray-500 mb-6">
        Shop now and discover timeless styles crafted for comfort and elegance. Perfect for every occasion, from casual outings to formal events.
      </p>
      <button class="btn bg-[#74512D] text-white py-2 px-6 rounded-lg hover:bg-[#AF8F6F] transition-all duration-300">
        Shop Now
      </button>
    </div>
  </div>
</section>

<?php include '..\layout\footer.php'; ?>

<script>
  // Arrays of image sources for both left and right images
  const imagesLeft = [
    "../../images/l1.png",
    "../../images/bg7.png",
    "../../images/l2.png",
    "../../images/l3.png"
  ];
  const imagesRight = [
    "../../images/r2.png",
    "../../images/r3.png",
    "../../images/bg1.png"
  ];

  // Select the image elements
  const dynamicImageLeft = document.getElementById("dynamic-image-left");
  const dynamicImageRight = document.getElementById("dynamic-image-right");

  let currentIndexLeft = 0; // Track the current index for the left image
  let currentIndexRight = 0; // Track the current index for the right image

  // Function to update the left image
  function changeLeftImage() {
    currentIndexLeft = (currentIndexLeft + 1) % imagesLeft.length; // Cycle through left images
    dynamicImageLeft.src = imagesLeft[currentIndexLeft];
  }

  // Function to update the right image
  function changeRightImage() {
    currentIndexRight = (currentIndexRight + 1) % imagesRight.length; // Cycle through right images
    dynamicImageRight.src = imagesRight[currentIndexRight];
  }

  // Change both images every second (1000ms)
  setInterval(changeLeftImage, 1000);
  setInterval(changeRightImage, 1000);

  
</script>

</body>
</html>
