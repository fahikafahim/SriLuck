<?php 

class Product {
    private $conn;
    private $table = 'product'; // Table name

    // Product properties
    public $id;
    public $name;
    public $description;
    public $price;
    

    public function __construct($db) {
        $this->conn = $db;
    }

    // Create a new product
    public function create() {
        $query = "INSERT INTO " . $this->table . " (name, description, price) 
                  VALUES (:name, :description, :price)";
        $stmt = $this->conn->prepare($query);

        // Bind parameters
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':price', $this->price);
       

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Retrieve all products
    public function getAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Retrieve a single product by ID
    public function getById() {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id LIMIT 1";
        $stmt = $this->conn->prepare($query);

        // Bind parameter
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Update a product
    public function update() {
        $query = "UPDATE " . $this->table . " 
                  SET name = :name, description = :description, price = :price
                  WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        // Bind parameters
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':price', $this->price);
        
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // Delete a product
    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";

        $stmt = $this->conn->prepare($query);

        // Bind parameter
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>
