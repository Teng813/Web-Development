<?php

    use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

  // Headers
  header('Access-Control-Allow-Origin: *');
  //header('Content-Type: application/json'); ->used for Postman testing
  header('Access-Control-Allow-Methods: POST');
  header("Access-Control-Max-Age: 3600");
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/contact.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $contact = new Contact($db);

  // Get raw posted data
  //$data = json_decode(file_get_contents("php://input"));

  if(isset($_POST["send"])){

    $name = $_POST['name'];
    $email =$_POST['email'];
    $subject =$_POST['subject'];
    $message =$_POST['message'];

    $contact->name = $name;
    $contact->email = $email;
    $contact->subject = $subject;
    $contact->message = $message;
 

 
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    if(isset($_POST["send"])){

        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'tengteng8132002@gmail.com';
        $mail->Password = 'zzvmemdazozxzadq';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('tengteng8132002@gmail.com');

        $mail->addAddress($_POST["email"]);

        $mail->isHTML(true);

        $mail->Subject = 'Message from Clinic Harmony';
        $mail->Body = 'Dear '.$_POST["email"].', thank you for enquiry us!';

        $mail->send();

}
   
  }

  // Create post
  if($contact->create()) {
     echo "<script> alert('You have successfully send a message to us!');window.location= \"http://localhost/clinicReservation/public_html/contactUs.php\"; </script>";
  } 
  //else {
    //echo json_encode(
      //array('message' => 'Post Not Created')
    //);
 //