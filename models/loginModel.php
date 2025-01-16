<?php
class loginModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Get Admin by Username
    public function getAdminByUsername($username) {
        $query = "SELECT * FROM admin WHERE username = :username";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    }

}
?>
