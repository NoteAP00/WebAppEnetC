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
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
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
        //echo "<center>ยินดีต้อนรับคุณ " . strtoupper($u) ;
        $_SESSION["username"] = $u;
        $_SESSION["role"] = "a";
        $_SESSION["id"] = session_id();
        header("Location: index.php");

    }
    elseif($u=="member"&&$p=="mem1234"){
        //echo "<center>ยินดีต้อนรับคุณ " . strtoupper($u) ; 
        $_SESSION["username"] = $u;
        $_SESSION["role"] = "m";
        $_SESSION["id"] = session_id();
        header("Location: index.php");       
        
    }
    
    else{
        //echo "<center>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง"; 
        $_SESSION["error"] = "err1";
        header("Location: login.php"); 
    } 
    
    ?>
    <h3><a href="index.php">กลับไปหน้าหลัก</a></h3></center>
</body>
</html>


