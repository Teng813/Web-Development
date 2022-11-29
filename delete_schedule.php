<?php 
session_start();

$dbc=mysqli_connect("localhost","root","");
mysqli_select_db($dbc, "clinic_reservation"); 


$schedules = mysqli_query($dbc, "SELECT * FROM booking_table");

if(!isset($_GET['id'])){
    echo "<script> alert('Undefined Schedule ID.'); location.replace('./') </script>";
    $schedules->close();
    exit;
}

$delete = mysqli_query($dbc, "DELETE FROM booking_table WHERE booking_id = '{$_GET['id']}'");

if($delete){
    echo "<script> alert('Event has deleted successfully.');window.location= \"timetable.php\"; </script>";
}else{
    echo "<pre>";
    echo "An Error occured.<br>";
    echo "Error: ".$schedules->error."<br>";
    echo "SQL: ".$sql."<br>";
    echo "</pre>";
}
$schedules->close();

?>