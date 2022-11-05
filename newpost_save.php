<?php
   session_start();
   $cid = $_POST['category'];
   $uid = $_SESSION["user_id"];
   $title = $_POST["topic"];
   $content = $_POST["comment"];


   $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
        
    
        $sql = "INSERT INTO `post` (`title`, `content`, `post_date`, `cat_id`, `user_id`) VALUES
                ('$title','$content',NOW(),'$cid', '$uid')";

        $conn -> exec($sql);
        $_SESSION['add_post'] = 'success';
        
    
    header("Location: newpost.php");  
    $conn = null;     
    die();
?>