<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men Sandals</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#F8F4E1] text-[#543310] font-['Roboto',sans-serif]">

    <?php include '..\layout\header.php'; ?>

    <!-- Page Title -->
    <section class="py-8 text-center bg-gradient-to-r from-[#E7D2C8] to-[#F5E9DB]">
        <h1 class="text-3xl font-bold text-[#74512D] font-['Lora',serif]">Men's Sandals</h1>
        <p class="text-sm text-gray-600 mt-2">Explore our versatile collection of men's sandals, designed for comfort and style.</p>
    </section>

    <!-- Product Cards Section -->
    <section class="py-12">
        <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 px-4">
            <!-- Product Card -->
            <?php for ($i = 1; $i <= 15; $i++) { ?>
                <div class="bg-white shadow-lg rounded-lg p-4 hover:shadow-xl transition duration-300">
                    <img src="../../images/m<?php echo $i; ?>.jpg" alt="Men Sandal <?php echo $i; ?>" class="w-full h-56 object-cover rounded-md">
                    <p class="text-lg font-semibold mt-4 text-[#74512D]">Men Sandal <?php echo $i; ?></p>
                    <p class="text-sm text-gray-500">Color: Black</p>
                    <p class="text-lg font-bold text-[#74512D]">€<?php echo 20 + $i; ?></p>
                    <p class="text-sm text-gray-600 mt-2">Durable and stylish sandals, perfect for any occasion.</p>
                    <button class="mt-4 w-full bg-[#74512D] text-white py-2 rounded-lg hover:bg-[#AF8F6F] transition duration-300">Buy Now</button>
                </div>
            <?php } ?>
        </div>
    </section>

    <?php include '..\layout\footer.php'; ?>

</body>
</html>
