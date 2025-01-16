<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Navbar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome CDN for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-[#F8F4E1] text-[#543310]">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-[#74512D] text-white flex flex-col">
            <div class="p-4">
                <h1 class="text-2xl font-bold">SRI LUCK</h1>
            </div>
            <nav class="flex-1 px-4">
                <ul class="space-y-4">
                    <li>
                        <a href="http://localhost/SRILUCK_PHP/app/veiws/admin/admin_dashboard.php" class="flex items-center gap-3 text-gray-200 hover:bg-[#AF8F6F] p-3 rounded">
                            <i class="fas fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/SRILUCK_PHP/app/veiws/admin/create.php" class="flex items-center gap-3 text-gray-200 hover:bg-[#AF8F6F] p-3 rounded">
                            <i class="fas fa-cogs"></i>
                            <span>Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="view_customers.php" class="flex items-center gap-3 text-gray-200 hover:bg-[#AF8F6F] p-3 rounded">
                            <i class="fas fa-users"></i>
                            <span>Customers</span>
                        </a>
                    </li>
                    <li>
                        <a href="view_orders.php" class="flex items-center gap-3 text-gray-200 hover:bg-[#AF8F6F] p-3 rounded">
                            <i class="fas fa-box"></i>
                            <span>Orders</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="p-4">
                <a href="http://localhost/SRILUCK_PHP/app/veiws/admin_login.php" class="text-gray-200 hover:text-white">
                    <i class="fas fa-sign-out-alt"></i> 
                    Logout
                </a>
            </div>
        </aside>
    </div>
</body>
</html>
