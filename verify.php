<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    
    <h1 style="text-align:center">Webboard KakKak</h1>
    <hr><center>
    
    <?php
    $u = $_POST['username'];
    $p = $_POST['password'];
    //echo "<center>Login = $u </center><br>";
    //echo "<center>Password = $p </center><br>";
    if($u=="admin"&&$p=="ad1234"){
        echo "<center>ยินดีต้อนรับคุณ " . strtoupper($u) ;
    }
    elseif($u=="member"&&$p=="mem1234"){
        echo "<center>ยินดีต้อนรับคุณ " . strtoupper($u) ;        
        
    }
    else{
        echo "<center>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง"; 
    }
    
    ?>
    <h3><a href="index.php">กลับไปหน้าหลัก</a></h3></center>
</body>
</html>


