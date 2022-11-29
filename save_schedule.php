<?php 
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
    $id = $_SESSION['identifier'];  
    $user_name = $_POST['userName'];
    $user_gender = $_POST['sex'];
    $user_email = $_POST['email'];
    $user_phoneNo = $_POST['phoneNo'];
    $start = $_POST['start_datetime'];
    $end = $_POST['end_datetime'];
    $doctorName = $_POST['doctorName'];
    
        $query = "INSERT INTO booking_table (user_id, user_name, user_gender, user_email, user_phoneNo, start, end, status, doctor_name) VALUES ('$id' ,'$user_name', '$user_gender', '$user_email', '$user_phoneNo', '$start', '$end', 'Pending', '$doctorName')";

        mysqli_query($dbc,$query);
        echo "<script> alert('You have booked a slote, please wait for the approval email!');window.location= \"timetable.php\"; </script>";
    
        
   //email
        
    $fromEmail = 'tengteng8132002@gmail.com';
    $toEmail = 'tengteng8132002@gmail.com';
    $subjectName = 'Subject';
    //$message = $_POST['username'];

    $to = $toEmail;
    $subject = $subjectName;
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
    $message = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
			</head>
			<body>
			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;"hello</span>
				<div class="container">
                 <br/>
                    Regards<br/>
                  '.$fromEmail.'
				</div>
			</body>
			</html>';
    
    $result = @mail($to, $subject, $message, $headers);

    if ($result){
         echo '<script>alert("Email sent successfully !")</script>';
    }
   

}  
?>