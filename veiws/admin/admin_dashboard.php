<?php
// session_start();
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// // Check if the admin session exists
// if (!isset($_SESSION['admin'])) {
//     // Redirect to the login page if not authenticated
//     header("Location: http://localhost/SRILUCK_PHP/app/veiws/admin/admin_dashboard.php");
//     exit;
// }

require_once 'C:/xampp/htdocs/Sriluck_PHP/app/controllers/ProductController.php'; // Product controller
$controller = new ProductController();
$products = $controller->index();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-[#F8F4E1] text-[#543310]">
    <div class="flex">
        <!-- Sidebar included from navbar.php -->
        <?php require_once 'C:\xampp\htdocs\Sriluck_PHP\app\veiws\layout\adminHeader.php'; ?>
        
        <div class="flex-grow p-8">
            <!-- Content -->
            <h1 class="text-3xl font-bold mb-6 text-[#74512D]">Dashboard</h1>

            <!-- Product Table -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-[#74512D] mb-4">Product List</h2>
                <table class="w-full border-collapse border border-[#AF8F6F]">
                    <thead>
                        <tr class="bg-[#AF8F6F] text-left">
                            <th class="border border-[#AF8F6F] px-4 py-2">ID</th>
                            <th class="border border-[#AF8F6F] px-4 py-2">Name</th>
                            <th class="border border-[#AF8F6F] px-4 py-2">Description</th>
                            <th class="border border-[#AF8F6F] px-4 py-2">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($products)): ?>
                            <?php foreach ($products as $product): ?>
                                <tr class="hover:bg-[#F8F4E1]">
                                    <td class="border border-[#AF8F6F] px-4 py-2"><?php echo $product['id']; ?></td>
                                    <td class="border border-[#AF8F6F] px-4 py-2"><?php echo $product['name']; ?></td>
                                    <td class="border border-[#AF8F6F] px-4 py-2"><?php echo $product['description']; ?></td>
                                    <td class="border border-[#AF8F6F] px-4 py-2 text-[#74512D] font-bold">
                                        $<?php echo $product['price']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="4" class="text-center py-4 text-[#543310]">No products found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
