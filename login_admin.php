<?php
/* This code and overTheFence.html is for the http authentication use
 * if the credentials is correct then it will redirect to the admin dashboard but if 
 * its wrong then it will bring it over to overTheFence.html to redirect again to homepage.
 */

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Text to send if user hits Cancel button';
    exit;
} else {
    if($_SERVER['PHP_AUTH_USER'] == "A001" && $_SERVER['PHP_AUTH_PW'] == "Admin12345"){
        header('Location: adminTimetable.php');
        
        session_start();
        $_SESSION['identifier']="A001"; 
    }
}
?>
