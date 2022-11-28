<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  //header('Content-Type: application/json'); ->used for Postman testing
  header('Access-Control-Allow-Methods: POST');
  header("Access-Control-Max-Age: 3600");
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/Post.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Post($db);

  // Get raw posted data
  //$data = json_decode(file_get_contents("php://input"));

  if(isset($_POST["submit"])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $gender = $_POST['radio-stacked'];
        $dob =$_POST['dateBirth'];
        $address =$_POST['address'];
        $city =$_POST['city'];
        $zip =$_POST['zip'];
        $state =$_POST['state'];
        $email =$_POST['email'];
        $phoneNo =$_POST['phoneNo'];
        
        if(strlen($password) >= 8){
            $post->user_id = $username;
            $post->user_password = $password;
            $post->user_name = $name;
            $post->user_gender = $gender;
            $post->user_email = $email;
            $post->user_dob = $dob;
            $post->user_phoneNo = $phoneNo;
            $post->user_address = $address;
            $post->address_city = $city;
            $post->address_zip = $zip;
            $post->address_state = $state;
        }
        else{
            echo "<script> alert('Password must be more than 8 characters!');window.location= \"register.php\"; </script>";
        }

       
       
}

  // Create post
  if($post->create()) {
     echo "<script> alert('You have successfully register!');window.location= \"http://localhost/clinicReservation/public_html/login.php\"; </script>";
  } 
  //else {
    //echo json_encode(
      //array('message' => 'Post Not Created')
    //);
 //