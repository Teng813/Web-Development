<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['save'])){ 
    
    session_start();
    $dbc = mysqli_connect("localhost","root","");
    mysqli_select_db($dbc, "clinic_reservation");
    
    echo'<script>
        function submissionAlert() {
                alert("The item has been added.");
        }
        </script>';
    
    $allday = isset($allday);
    $bookingID = $_POST['id'];
    $id = $_SESSION['identifier'];  
    $user_name = $_POST['userName'];
    $user_gender = $_POST['sex'];
    $user_email = $_POST['email'];
    $user_phoneNo = $_POST['phoneNo'];
    $start = $_POST['start_datetime'];
    $end = $_POST['end_datetime'];
    $doctorName = $_POST['doctorName'];
    $status = $_POST['status'];
                    
        $query1 = "UPDATE booking_table set user_name = '$user_name', user_gender = '$user_gender', user_email = '$user_email', user_phoneNo = '$user_phoneNo', start = '$start', end = '$end', status = '$status', doctor_name = '$doctorName' 
                WHERE booking_id='$bookingID'";
        mysqli_query($dbc,$query1);    

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'tengteng8132002@gmail.com';
        $mail->Password = 'zzvmemdazozxzadq';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('tengteng8132002@gmail.com');

        $mail->addAddress($_POST['email']);

        $mail->isHTML(true);

        $mail->Subject = 'Clinic Reservation';
        $mail->Body = 'Dear Customer, your booking status have been updated to '.$status.', thank you for choosing Clinic Harmony!';

        $mail->send();
        
         echo "<script> alert('Information updated');window.location= \"admintimetable.php\"; </script>";


}
?>              
