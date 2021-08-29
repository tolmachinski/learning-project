<?php
    session_start();
    $title = "Contacts";
    require "header.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>
<body>
    
</body>
</html>

<h2 class="container"><?=$title?></h2>



<div class="container mt-5">
    <div class="text-success"><?=$_SESSION['success_mail']?></div>
    <form action="check_contact.php" method="post">
        <input type="text" name="username" value="<?=$_SESSION['username']?>" placeholder="Name" class="form-control">
        <div class="text-danger"><?=$_SESSION['error_user_name']?></div><br>
        <input type="email" name="email" value="<?=$_SESSION['email']?>" placeholder="E-mail" class="form-control">
        <div class="text-danger"><?=$_SESSION['error_email']?></div><br>
        <input type="text" name="subject" value="<?=$_SESSION['subject']?>" placeholder="Subject" class="form-control">
        <div class="text-danger"><?=$_SESSION['error_subject']?></div><br>
        <textarea name="message" placeholder="Your message" class="form-control"><?=$_SESSION['message']?></textarea>
        <div class="text-danger"><?=$_SESSION['error_message']?></div><br>
        <button type="submit" class="btn btn-success">Send</button>
    </form> 
</div>



<?php 
    require_once "footer.php";

?>