<?php
    session_start();
    
    unset($_SESSION['username']);
    unset($_SESSION['email']);
    unset($_SESSION['subject']);
    unset($_SESSION['message']);

    unset($_SESSION['error_user_name']);
    unset($_SESSION['error_email']);
    unset($_SESSION['error_subject']);
    unset($_SESSION['error_message']);

    function redirect() { // redirection for errors
        header('Location: contact.php');
        exit;
    }

    $user_name = htmlspecialchars(trim($_POST['username'])); // tags deleting
    $from = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    $_SESSION['username'] = $user_name;
    $_SESSION['email'] = $from;
    $_SESSION['subject'] = $subject;
    $_SESSION['message'] = $message;

    if(strlen($user_name) <= 1) {
        $_SESSION['error_user_name'] = "Incorrect name";
        redirect();   
    }
    else if(strlen($from) < 5 || strpos($from, "@") == false) {
        $_SESSION['error_email'] = "Incorrect e-mail";
        redirect();  
    }    
    else if(strlen($subject) < 5) {
        $_SESSION['error_subject'] = "Incorrect subject";
        redirect();  
    }
    else if(strlen($message) <= 10) {
        $_SESSION['error_message'] = "Message is too short";
        redirect();  
    }
    else {
        $subj = "=?utf-8?B?".base64_encode($subj)."?=";
    $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
        mail("admin@mail.com", $sbject, $message, $headers);

        $_SESSION['success_mail'] = "Message was sent";
        redirect();
    }


?>