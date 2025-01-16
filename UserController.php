<?php

require_once 'C:\xampp\htdocs\Sriluck_PHP\app\models\UserModel.php';

class UserController
{
    private $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function login($username, $password)
    {
        $user = $this->model->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user'] = $user['username'];
            header("Location: http://localhost/SRILUCK_PHP/app/veiws/user/"); 
            exit;
        } else {
            header("Location: http://localhost/SRILUCK_PHP/app/veiws/user/register.php"); 
            exit;
        }
    }


   
}
