<?php 
require_once 'C:\xampp\htdocs\Sriluck_PHP\app\controllers\ProductController.php';
$controller = new ProductController();
$products = $controller->create();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Product Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-[#F8F4E1] text-[#543310]">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <?php include '../layout/adminHeader.php'; ?>

        <!-- Content Section -->
        <div class="flex-grow p-8">
            <h1 class="text-3xl font-bold mb-6 text-[#74512D]">Add Product</h1>

            <!-- Product Form -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <form action="http://localhost/SRILUCK_PHP/app/veiws/admin/create.php" method="POST" class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-semibold text-[#74512D]">Product Name</label>
                        <input 
                            type="text" 
                            name="name" 
                            id="name" 
                            class="w-full px-4 py-2 border border-[#AF8F6F] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#74512D]" 
                            placeholder="Enter product name" 
                            required>
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-semibold text-[#74512D]">Description</label>
                        <textarea 
                            name="description" 
                            id="description" 
                            rows="4" 
                            class="w-full px-4 py-2 border border-[#AF8F6F] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#74512D]" 
                            placeholder="Enter product description" 
                            required></textarea>
                    </div>

                    <div>
                        <label for="price" class="block text-sm font-semibold text-[#74512D]">Price</label>
                        <input 
                            type="number" 
                            name="price" 
                            id="price" 
                            class="w-full px-4 py-2 border border-[#AF8F6F] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#74512D]" 
                            placeholder="Enter product price" 
                            required>
                    </div>

                    <div>
                        <button 
                            type="submit" 
                            class="bg-[#74512D] hover:bg-[#AF8F6F] text-white font-semibold px-6 py-2 rounded-lg shadow">
                            Add Product
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
