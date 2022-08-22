<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailto = "gertoldenburg247@outlook.com";
    $headers = "From: ".$mailFrom;
    $txt = "je hebt van je website een mail van".$name.".\n\n".$message;
    
    mail($mailto, $subject, $txt, $headers);
    header("Location: contact.html?mailsend");¡
}