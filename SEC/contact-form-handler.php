<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    // if (empty($name) || empty($subject) || empty($mailFrom) || empty($message)) {
    //     header("Location: index.php?mailsend=empty");
    // }
    // else {
    //     if (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
    //         header("Location: index.php?mailsend=invalidemail");
    //     }
    //     else {
    //         echo "E-mail Valid";
    //     }
    // }

    $mailTo = "thetran@iu.edu";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}
else {
    header("Location: index.php?mailsend=error");
}
