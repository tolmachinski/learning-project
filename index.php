<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>
</html>

<?php
    $title = "Main Page";
    require_once "header.php";

?>

    <h2>MAIN PAGE</h2>

<?php 
    //array func/meth

    $lis = [5, 7, 9, 3, 1];
    unset($lis[1]);
    $lis = array_values($lis);
    rsort($lis);
    print_r($lis);

    echo "<br>";

    $arr_1 = [1, 2];
    $arr_2 = [3, 4, 5];
    $arr_3 = array_merge($arr_1, $arr_2);
    print_r($arr_3);

    echo "<br>";

    if(in_array(1, $lis) == ""){
        echo "not found".'<br>';
    }
    else {
        echo "found".'<br>';
    }
    
    //vars meth/func
    
    $x = "10";
    echo gettype($x).'<br>';
    echo is_numeric($x).'<br>'; // but is_integer = false;

    //str

    $str = "Example";
    echo strpos($str, "a").'<br>';

    $words = "john, bob, alex";
    $arr_words = explode(",", $words);
    print_r($arr_words);
    echo '<br>'.implode(" | ", $arr_words).'<br>';


    echo "<br>";
    echo date('m-d-Y H:i:s', strtotime("+1 Hour")); //time
    echo "<br>";

    // files

    $file = fopen('text.txt', "w"); // "a" for adding text
    fwrite($file, "Example text\n Hello");
    fclose($file);

    $filename = "text.txt";
    $file_1 = fopen($filename, "r");
    $content = fread($file_1, filesize($filename));
    fclose($file_1);
    echo "<br>"."<pre>".$content."</pre>";

    file_put_contents("a.txt", "Hello");
    echo file_get_contents("a.txt")."<br>";
    //rename("a.txt", "b.txt");
    //unlink("b.txt");

    echo __FILE__;
    echo "<br>";

    // $_SERVER

    echo "<br>";
    echo $_SERVER['HTTP_HOST']."<br>"; // my ip
    echo $_SERVER['HTTP_USER_AGENT']."<br>";

    //

    if($_GET['source'] != "") {
        $link = explode("?souce=", $_SERVER["REQUEST_URI"]);
        $redirect = "http://".$_SERVER['HTTP_HOST'].$link[0];

        header('HTTP/1.1 301 Moved Permanently'); // redirect 
        header('Location: '.$redirect);
        exit;
    }

    // email

    $message = "Message";
    $to = "example@mail.com";
    $from = "user@mail.com";
    $subj = "Subject";

    $subj = "=?utf-8?B?".base64_encode($subj)."?=";
    $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";

    mail($to, $subj, $message, $headers);

    // cookie and SESSION

    $user_name = "Alexey";
    setcookie("user_name", $user_name, time() + 600); // if "-" - delete
    print_r($_COOKIE).'<br>';

    echo $_COOKIE['user_name'].'<br>';

    //

    session_start();
    $_SESSION['user_name'] = $user_name;
    if($_SESSION['user_name'] == 'Alex') {
        echo "Session started!";
    }
    else {
        echo "Session not found."; // must be announced at start
    }

    unset($_SESSION['user_name']);
    session_destroy();


    require_once "footer.php";

?>