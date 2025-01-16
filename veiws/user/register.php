<?php
// Include the required controller
require_once '../../controllers/RegisterController.php';

// Create an instance of the controller
$controller = new RegisterController();

// Call the create method to handle form submission
$controller->create();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Register | Sri Luck</title>
  <style>
    /* Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap');

    /* Welcome Text Cursive Font */
    .cursive-text {
      font-family: 'Dancing Script', cursive;
      color: white;
    }
  </style>
</head>
<body class="bg-cover bg-center h-screen" style="background-image: url('./../../images/lg.jpg');">


<!-- Registration Form Section -->
<div class="flex items-center justify-center min-h-screen">
  <div class="bg-[#F8F5EF] p-8 rounded-lg shadow-md mx-4 w-full max-w-md">
    <h2 class="text-4xl font-semibold text-center mb-6">Register</h2>

    <!-- Display success message -->
    <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
      <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
        Registration successful!
      </div>
    <?php endif; ?>

    <!-- Registration Form -->
    <form action="http://localhost/Sriluck_PHP/App/veiws/user/register.php" method="POST" class="space-y-2">
      <div>
        <label for="fullname" class="block text-sm font-medium">Full Name</label>
        <input type="text" id="fullname" name="fullname" placeholder="Enter your full name"
               class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-gray-400" required>
      </div>

      <div>
        <label for="address" class="block text-sm font-medium">Address</label>
        <input type="text" id="address" name="address" placeholder="Enter your address"
               class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-gray-400" required>
      </div>

      <div>
        <label for="email" class="block text-sm font-medium">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email"
               class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-gray-400" required>
      </div>

      <div>
        <label for="username" class="block text-sm font-medium">User Name</label>
        <input type="text" id="username" name="username" placeholder="Create a username"
               class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-gray-400" required>
      </div>

      <div>
        <label for="password" class="block text-sm font-medium">Password</label>
        <input type="password" id="password" name="password" placeholder="Create a password"
               class="w-full border rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-gray-400" required>
      </div>

      <button type="submit"
              class="w-full bg-gray-700 text-white py-2 rounded-lg hover:bg-gray-900">REGISTER</button>
    </form>

    <!-- Social Media Links -->
    <div class="flex justify-center space-x-6 mt-6 text-gray-600">
      <a href="#" class="hover:text-blue-500"><i class="fab fa-facebook-f text-2xl"></i></a>
      <a href="#" class="hover:text-pink-500"><i class="fab fa-instagram text-2xl"></i></a>
      <a href="#" class="hover:text-blue-400"><i class="fab fa-twitter text-2xl"></i></a>
    </div>
  </div>
</div>

</body>
</html>
