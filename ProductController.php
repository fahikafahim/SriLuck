<?php
require_once 'C:\xampp\htdocs\Sriluck_PHP\config\database.php';
require_once 'C:\xampp\htdocs\Sriluck_PHP\app\models\Product.php';

class ProductController {
    private $db; 
    private $product; 

    public function __construct() {
        $database = new Database();
        $this->db = $database->connect();
        $this->product = new Product($this->db); 
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $this->product->name = $_POST['name'];
            $this->product->description = $_POST['description'];
            $this->product->price = $_POST['price'];

            if ($this->product->create()) {
                
                header('Location: http://localhost/SRILUCK_PHP/app/veiws/admin/list.php');
                exit; 
            } else {
                echo "Failed to create product.";
            }
        }
    }

    public function index() {
        
        return $this->product->getAll();
    }

    public function delete($id) {
        $this->product->id = $id;
        if ($this->product->delete()) {
            
            header('Location: http://localhost/SRILUCK_PHP/app/veiws/admin/list.php?success');
            exit;
        } else {
            echo "Failed to delete product."; 
        }
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->product->id = $_POST['id'];
            $this->product->name = $_POST['name'];
            $this->product->description = $_POST['description'];
            $this->product->price = $_POST['price'];
    
            if ($this->product->update()) {
                
                header('Location: http://localhost/SRILUCK_PHP/app/veiws/admin/list.php');
                exit;
            } else {
                echo "Failed to update product.";
            }
        }
    }
}
?>
