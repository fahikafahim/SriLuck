<?php
class UserModel {
    private $db; // Database connection
    private $table = 'register'; // Database table name

    public $id;
    public $fullname;
    public $address;
    public $email;
    public $username;
    public $password;

    public function __construct()
    {
       
        $this->db = new mysqli('localhost', 'root', '', 'sriluck_footwear_website');

        if ($this->db->connect_error) {
            die("Database connection failed: " . $this->db->connect_error);
        }
    }

    public function create() {
        
        $query = "INSERT INTO " . $this->table . " (full_name, address, email, user_name, password) 
                  VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($query);

        if (!$stmt) {
            die("Preparation failed: " . $this->db->error);
        }

        
        $stmt->bind_param("sssss", $this->fullname, $this->address, $this->email, $this->username, $this->password);

        
        if ($stmt->execute()) {
            return true;
        }

        error_log("Database error: " . $stmt->error);
        return false;
    }

    public function getUserByUsername($username)
    {
        $stmt = $this->db->prepare("SELECT * FROM register WHERE user_name = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
?>
