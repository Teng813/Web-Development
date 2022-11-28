<?php 
  class Contact {
    // DB stuff
    private $conn;
    private $table = 'contactus';

    // Post Properties
    public $name;
    public $email;
    public $subject;
    public $message;

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
      $query = 'SELECT * FROM ' . $this->table . ' WHERE name = ? LIMIT 0,1';

      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Bind ID
      $stmt->bindParam(1, $this->id); 

      // Execute query
      $stmt->execute();

      $row = $stmt->fetch(PDO::FETCH_ASSOC);

      // Set properties
      $this->name = $row['name'];
      $this->email = $row['email'];
      $this->subject = $row['subject'];
      $this->message = $row['message'];
}

// Create Post
public function create() {
  // Create query
  $query = 'INSERT INTO ' . $this->table . ' SET 
      name = :name, 
      email = :email, 
      subject = :subject, 
      message = :message';

  // Prepare statement
  $stmt = $this->conn->prepare($query);

  // Clean data
  $this->name = htmlspecialchars(strip_tags($this->name));
  $this->email = htmlspecialchars(strip_tags($this->email));
  $this->subject = htmlspecialchars(strip_tags($this->subject));
  $this->message = htmlspecialchars(strip_tags($this->message));

  // Bind data
  $stmt->bindParam(':name', $this->name);
  $stmt->bindParam(':email', $this->email);
  $stmt->bindParam(':subject', $this->subject);
  $stmt->bindParam(':message', $this->message);

  // Execute query
  if($stmt->execute()) {
    return true;
}

// Print error if something goes wrong
printf("Error: %s.\n", $stmt->error);

return false;
}

    
    }
   