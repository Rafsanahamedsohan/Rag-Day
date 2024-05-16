<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $to = "rafsanahamedsohan@gmail.com"; // Replace with your Gmail address
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From: " . $_POST['email'] . "\r\n";

    if(mail($to, $subject, $message, $headers)){
        echo "Email sent successfully!";
    } else{
        echo "Email sending failed.";
    }
}
?>
