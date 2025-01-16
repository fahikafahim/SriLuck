<?php
require_once '../../../App/controllers/ProductController.php';
$controller = new ProductController();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $products = $controller->index();
    $filteredProducts = array_values(array_filter($products, fn($p) => $p['id'] == $id));
    if (count($filteredProducts) > 0) {
        $product = $filteredProducts[0];
    } else {
        die('Product not found.');
    }
} else {
    die('Invalid product ID.');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-[#F8F4E1] text-[#543310]">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <?php include '../layout/adminHeader.php'; ?>

        <!-- Main Content -->
        <div class="flex-grow p-8">
            <div class="container mx-auto mt-12 p-6 bg-white shadow-lg rounded-lg">
                <h1 class="text-3xl font-bold text-[#74512D] mb-6 text-center">Product Details</h1>

                <!-- Display product details -->
                <div class="bg-[#F8F4E1] p-6 rounded-lg shadow-md">
                    <div class="mb-4">
                        <p class="text-lg font-semibold text-[#74512D]">
                            <span class="font-bold text-[#543310]">ID:</span> <?php echo $product['id']; ?>
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-lg font-semibold text-[#74512D]">
                            <span class="font-bold text-[#543310]">Name:</span> <?php echo htmlspecialchars($product['name'], ENT_QUOTES); ?>
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-lg font-semibold text-[#74512D]">
                            <span class="font-bold text-[#543310]">Price:</span> $<?php echo htmlspecialchars($product['price'], ENT_QUOTES); ?>
                        </p>
                    </div>
                </div>

                <!-- Back Button -->
                <div class="mt-6 text-center">
                    <a href="list.php" 
                       class="inline-block bg-[#74512D] hover:bg-[#543310] text-white font-semibold px-6 py-2 rounded-lg shadow-lg transition-all">
                        Back to Product List
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
