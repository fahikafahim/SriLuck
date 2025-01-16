<?php 
require_once '../../../app/controllers/ProductController.php';

if (isset($_GET['id'])) {
    $controller = new ProductController();
    $controller->delete($_GET['id']);
} else {
    echo "No product ID provided";
}
?>
