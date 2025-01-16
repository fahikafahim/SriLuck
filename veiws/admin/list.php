<?php 
require_once '../../../App/controllers/ProductController.php';
$controller = new ProductController();
$products = $controller->index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-[#F8F4E1] text-[#543310]">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <?php include '../layout/adminHeader.php'; ?>

        <!-- Main Content -->
        <div class="flex-grow p-8">
            <div class="container mx-auto mt-10 p-6 bg-[#F8F4E1] shadow-lg rounded-lg">
                <h1 class="text-3xl font-extrabold text-[#74512D] mb-8 text-center">Product List</h1>
                
                <table class="table-auto w-full border border-[#AF8F6F] rounded-lg overflow-hidden shadow-sm">
                    <thead>
                        <tr class="bg-[#AF8F6F] text-left text-sm font-semibold text-[#543310] uppercase">
                            <th class="border-b border-[#AF8F6F] px-6 py-4">ID</th>
                            <th class="border-b border-[#AF8F6F] px-6 py-4">Name</th>
                            <th class="border-b border-[#AF8F6F] px-6 py-4">Description</th>
                            <th class="border-b border-[#AF8F6F] px-6 py-4">Price</th>
                            <th class="border-b border-[#AF8F6F] px-6 py-4 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-[#AF8F6F]">
                        <?php if (!empty($products)): ?>
                            <?php foreach ($products as $product): ?>
                                <tr class="hover:bg-[#F8F4E1] transition-colors">
                                    <td class="px-6 py-4"><?php echo $product['id']; ?></td>
                                    <td class="px-6 py-4"><?php echo $product['name']; ?></td>
                                    <td class="px-6 py-4"><?php echo $product['description']; ?></td>
                                    <td class="px-6 py-4 text-[#74512D] font-bold">$<?php echo $product['price']; ?></td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex items-center justify-center space-x-4">
                                            <!-- Edit Button -->
                                            <a href="edit.php?id=<?php echo $product['id']; ?>" 
                                               class="inline-block text-sm text-white bg-[#74512D] hover:bg-[#543310] rounded px-4 py-2 shadow-md">
                                                Edit
                                            </a>

                                            <!-- View Button -->
                                            <a href="view.php?id=<?php echo $product['id']; ?>" 
                                               class="inline-block text-sm text-white bg-[#AF8F6F] hover:bg-[#74512D] rounded px-4 py-2 shadow-md">
                                                View
                                            </a>

                                            <!-- Delete Button -->
                                            <a href="delete.php?id=<?php echo $product['id']; ?>" 
                                               class="inline-block text-sm text-white bg-[#543310] hover:bg-[#74512D] rounded px-4 py-2 shadow-md"
                                               onclick="return confirm('Are you sure you want to delete this product?');">
                                                Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5" class="text-center px-6 py-4 text-[#543310]">No products found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
