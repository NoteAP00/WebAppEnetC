<?php
session_start();

if(isset($_SESSION["username"]) && $_SESSION["id"]==session_id()){
    header("Location: index.php");
    die();
}

    isset($_POST['username']) ? $u = $_POST['username'] : $u = "";
    isset($_POST['password']) ? $p = $_POST['password'] : $p = "";
    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
    $sql = "SELECT * FROM user where login='$u' and password = sha1('$p')";
    $result = $conn->query($sql);
    if($result->rowCount()==1){
        $data=$result->fetch(PDO::FETCH_ASSOC);
        $_SESSION["username"] = $data["login"];
        $_SESSION["role"] = $data["role"];
        $_SESSION["user_id"] = $data["id"];
        $_SESSION["id"] = session_id();
        header("Location: index.php");       
        die();
    }else{
        $_SESSION["error"] = 1;
        header("Location: index.php");       
        die();
    }
    $conn=null;






    //echo "<center>Login = $u </center><br>";
    //echo "<center>Password = $p </center><br>";
    /*if($u=="admin"&&$p=="ad1234"){
        //echo "<center>ยินดีต้อนรับคุณ " . strtoupper($u) ;
        $_SESSION["username"] = $u;
        $_SESSION["role"] = "a";
        $_SESSION["id"] = session_id();
        header("Location: index.php");
        die();
    }
    elseif($u=="member"&&$p=="mem1234"){
        //echo "<center>ยินดีต้อนรับคุณ " . strtoupper($u) ; 
        $_SESSION["username"] = $u;
        $_SESSION["role"] = "m";
        $_SESSION["id"] = session_id();
        header("Location: index.php");       
        die();
    }
    
    else{
        //echo "<center>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง"; 
        $_SESSION["error"] = "err1";
        header("Location: login.php");
        die(); 
    } */
    
    ?>



