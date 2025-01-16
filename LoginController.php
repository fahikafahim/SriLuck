<?php

require_once '../../config/database.php';
require_once './../models/loginModel.php'; 


class LoginController {
    private $loginModel;
    // Get DB connection
    public function __construct() {
        $database = new Database();
        $db = $database->connect(); 
        $this->loginModel = new LoginModel($db);
    }

    // Admin login method
    public function login($username, $password) {
        $admin = $this->loginModel->getAdminByUsername($username);

        if ($admin && $admin['Password'] === $password) {
            session_start();
            $_SESSION['admin'] = $admin['username'];
            header("Location: http://localhost/SRILUCK_PHP/app/veiws/admin/admin_dashboard.php?login=success");
            
            exit;
        } else {
            header("Location:http://localhost/SRILUCK_PHP/app/veiws/admin_login.php?");
            exit;
        }
    }

  
}

?>
