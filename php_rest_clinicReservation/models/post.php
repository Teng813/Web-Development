<?php 
  class Post {
    // DB stuff
    private $conn;
    private $table = 'user_table';

    // Post Properties
    public $user_id;
    public $user_password;
    public $user_name;
    public $user_gender;
    public $user_email;
    public $user_dob;
    public $user_phoneNo;
    public $user_address;
    public $address_city;
    public $address_zip;
    public $address_state;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function read() {
      // Create query
      $query = 'SELECT * FROM ' . $this->table . '';
      
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }

     // Get Single Post
     public function read_single() {
      // Create query
      $query = 'SELECT * FROM ' . $this->table . ' WHERE user_id = ? LIMIT 0,1';

      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Bind ID
      $stmt->bindParam(1, $this->id); 

      // Execute query
      $stmt->execute();

      $row = $stmt->fetch(PDO::FETCH_ASSOC);

      // Set properties
      $this->user_id = $row['user_id'];
      $this->user_password = $row['user_password'];
      $this->user_name = $row['user_name'];
      $this->user_gender = $row['user_gender'];
      $this->user_email = $row['user_email'];
      $this->user_dob = $row['user_dob'];
      $this->user_phoneNo = $row['user_phoneNo'];
      $this->user_address = $row['user_address'];
      $this->address_city = $row['address_city'];
      $this->address_zip = $row['address_zip'];
      $this->address_state = $row['address_state'];
}

// Create Post
public function create() {
  // Create query
  $query = 'INSERT INTO ' . $this->table . ' SET 
      user_id = :user_id, 
      user_password = :user_password, 
      user_name = :user_name, 
      user_gender = :user_gender,
      user_email = :user_email,
      user_dob = :user_dob,
      user_phoneNo = :user_phoneNo,
      user_address = :user_address,
      address_city = :address_city,
      address_zip = :address_zip,
      address_state = :address_state';

  // Prepare statement
  $stmt = $this->conn->prepare($query);

  // Clean data
  $this->user_id = htmlspecialchars(strip_tags($this->user_id));
  $this->user_password = htmlspecialchars(strip_tags($this->user_password));
  $this->user_name = htmlspecialchars(strip_tags($this->user_name));
  $this->user_gender = htmlspecialchars(strip_tags($this->user_gender));
  $this->user_email = htmlspecialchars(strip_tags($this->user_email));
  $this->user_dob = htmlspecialchars(strip_tags($this->user_dob));
  $this->user_phoneNo = htmlspecialchars(strip_tags($this->user_phoneNo));
  $this->user_address = htmlspecialchars(strip_tags($this->user_address));
  $this->address_city = htmlspecialchars(strip_tags($this->address_city));
  $this->address_zip = htmlspecialchars(strip_tags($this->address_zip));
  $this->address_state = htmlspecialchars(strip_tags($this->address_state));

  // Bind data
  $stmt->bindParam(':user_id', $this->user_id);
  $stmt->bindParam(':user_password', $this->user_password);
  $stmt->bindParam(':user_name', $this->user_name);
  $stmt->bindParam(':user_gender', $this->user_gender);
  $stmt->bindParam(':user_email', $this->user_email);
  $stmt->bindParam(':user_dob', $this->user_dob);
  $stmt->bindParam(':user_phoneNo', $this->user_phoneNo);
  $stmt->bindParam(':user_address', $this->user_address);
  $stmt->bindParam(':address_city', $this->address_city);
  $stmt->bindParam(':address_zip', $this->address_zip);
  $stmt->bindParam(':address_state', $this->address_state);

  // Execute query
  if($stmt->execute()) {
    return true;
}

// Print error if something goes wrong
printf("Error: %s.\n", $stmt->error);

return false;
}

    
    }
   