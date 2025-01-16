<?php
require_once '../../../App/controllers/ProductController.php';
$controller = new ProductController();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->update();
}
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
    <title>Edit Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-[#F8F4E1] text-[#543310]">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <?php include '../layout/adminHeader.php'; ?>

        <!-- Main Content -->
        <div class="flex-grow p-8">
            <div class="container mx-auto p-6 bg-white shadow-lg rounded-lg">
                <h2 class="text-3xl font-bold text-center text-[#74512D] mb-8">Edit Product</h2>

                <!-- Product Edit Form -->
                <form action="edit.php" method="POST" class="space-y-6">
                    <input type="hidden" name="id" value="<?php echo $product['id']; ?>" />

                    <div>
                        <label for="name" class="block text-sm font-semibold text-[#74512D] mb-2">Name</label>
                        <input 
                            type="text" 
                            name="name" 
                            id="name" 
                            class="w-full border border-[#74512D] rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#8f6d55] focus:border-[#8f6d55]" 
                            value="<?php echo htmlspecialchars($product['name'], ENT_QUOTES); ?>" 
                            required
                        >
                    </div>

                    <div>
                        <label for="price" class="block text-sm font-semibold text-[#74512D] mb-2">Price</label>
                        <input 
                            type="text" 
                            name="price" 
                            id="price" 
                            class="w-full border border-[#74512D] rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#8f6d55] focus:border-[#8f6d55]" 
                            value="<?php echo htmlspecialchars($product['price'], ENT_QUOTES); ?>" 
                            required
                        >
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-semibold text-[#74512D] mb-2">Description</label>
                        <textarea 
                            name="description" 
                            id="description" 
                            rows="5" 
                            class="w-full border border-[#74512D] rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#8f6d55] focus:border-[#8f6d55]" 
                            required><?php echo htmlspecialchars($product['description'], ENT_QUOTES); ?></textarea>
                    </div>

                    <!-- Submit button to update the product -->
                    <div class="flex justify-center">
                        <button 
                            type="submit" 
                            class="bg-[#74512D] hover:bg-[#543310] text-white font-semibold px-6 py-2 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-[#8f6d55]"
                        >
                            Update Product
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
