<?php
require_once '../../../config/database.php';
require_once '../../../app/models/UserModel.php'; 

class RegisterController {
    private $db;  
    private $user; 

    public function __construct() {
        
        $database = new Database(); 
        $this->db = $database->connect(); 
        $this->user = new UserModel($this->db);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
            $this->user->fullname = $_POST['fullname'];
            $this->user->address = $_POST['address'];
            $this->user->email = $_POST['email'];
            $this->user->username = $_POST['username'];
            $this->user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);

           
            if ($this->user->create()) {
                header('Location: http://localhost/SRILUCK_PHP/app/veiws/user/');
                exit; 
            } else {
                echo "Failed to register user.";
            }
        }
    }
}
?>
