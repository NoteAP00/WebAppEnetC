<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
<?php
if(isset($_SESSION["id"])){
    header("Location: index.php");
}
?>
    <h1 style="text-align:center">Webboard KakKak</h1>
    <hr><center>
    
    <?php
    isset($_POST['username']) ? $u = $_POST['username'] : $u = "";
    isset($_POST['password']) ? $p = $_POST['password'] : $p = "";
    //echo "<center>Login = $u </center><br>";
    //echo "<center>Password = $p </center><br>";
    if($u=="admin"&&$p=="ad1234"){
        echo "<center>ยินดีต้อนรับคุณ " . strtoupper($u) ;
        $_SESSION["username"] = $u;
        $_SESSION["role"] = "a";
        $_SESSION["id"] = session_id();
        header("Location: index.php");

    }
    elseif($u=="member"&&$p=="mem1234"){
        echo "<center>ยินดีต้อนรับคุณ " . strtoupper($u) ; 
        $_SESSION["username"] = $u;
        $_SESSION["role"] = "m";
        $_SESSION["id"] = session_id();
        header("Location: index.php");       
        
    }
    elseif($u==""&&$p==""){
        echo "<center>ไม่พบชื่อบัญชีหรือรหัสผ่าน"; 
    }
    else{
        echo "<center>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง"; 
    }
    
    ?>
    <h3><a href="index.php">กลับไปหน้าหลัก</a></h3></center>
</body>
</html>


