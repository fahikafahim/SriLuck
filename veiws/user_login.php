<?php
require_once 'C:\xampp\htdocs\Sriluck_PHP\app\controllers\UserController.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $controller = new UserController();
    $controller->login($username, $password);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <title>Login | Sri Luck</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap');

    /* Welcome Text Cursive Font */
    .cursive-text {
      font-family: 'Dancing Script', cursive;
      color: white;
    }

    /* Custom Color for Buttons and Icons */
    .custom-color {
      background-color: #ac8f79;
      color: white;
    }
    .custom-color:hover {
      background-color: #946e60;
    }
    .icon-custom-color {
      color: #ac8f79;
    }
    .icon-custom-color:hover {
      color: #946e60;
    }
  </style>
</head>
<body class="bg-cover bg-center h-screen" style="background-image: url('./../images/lg.jpg');">

  <!-- Main Container -->
  <div class="flex flex-wrap items-center justify-center min-h-screen space-x-4">
    <!-- Customer Login -->
<div class="bg-[#F8F5EF] p-8 rounded-lg shadow-md max-w-md w-full min-h-[500px] flex flex-col justify-between">
  <h2 class="text-3xl font-semibold text-center mb-4">Customer</h2>
  <div class="flex justify-center mb-4">
    <span class="text-6xl icon-custom-color">👥</span>
  </div>
  <form class="flex-1" action="http://localhost/SRILUCK_PHP/app/veiws/user/">
    <label class="block mb-2">User Name</label>
    <div class="relative mb-4">
      <input type="text" placeholder="Enter your username"
             class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-gray-400">
      <span class="absolute right-3 top-2 text-gray-500">👤</span>
    </div>
    <label class="block mb-2">Password</label>
    <div class="relative mb-4">
      <input type="password" placeholder="Enter your password"
             class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-gray-400">
      <span class="absolute right-3 top-2 text-gray-500">🔒</span>
    </div>
    <button type="submit"
            class="w-full custom-color py-2 rounded-lg">LOGIN</button>
  </form>
  <div class="text-center mt-4 text-gray-600">
    <p>Don't have an account? 
      <a href="./user/register.php" class="text-blue-600 hover:underline">Register</a>
    </p>
  </div>
  <div class="flex justify-center space-x-6 mt-6 text-gray-600">
    <a href="#" class="icon-custom-color"><i class="fab fa-facebook-f text-2xl"></i></a>
    <a href="#" class="icon-custom-color"><i class="fab fa-instagram text-2xl"></i></a>
    <a href="#" class="icon-custom-color"><i class="fab fa-twitter text-2xl"></i></a>
  </div>
</div>


  </div>
</body>
</html>
