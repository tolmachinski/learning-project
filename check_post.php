<?php
   $name = $_POST['user_name'];
   $email = $_POST['user_email'];
   $pass = $_POST['user_password'];
   $age = $_POST['user_age'];
   $job = $_POST['user_job'];
   

   if(trim($name) == "") { // пробелы
       echo "Incorrect name...";
   }
   else if(strlen(trim($name)) <= 1) { // 1 символ
        echo "Incorrect name...";
   }
   else if(trim($email) == "" || trim($pass) == "") {
       echo "Enter all data, please.";
   }
   else {
    //$pass = $_POST['user_password'] = md5($pass); // хеширование 
       //echo "<h1>Your Data :</h1>";
       //foreach ($_POST as $key => $value) {
           //echo "<p>$value</p>";

           header('Location:\index.php');
           exit;
       }
   


?>

