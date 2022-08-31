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
    <center>เข้าสู่ระบบด้วย</center><br>
    <?php
    $u = $_POST['username'];
    $p = $_POST['password'];
    echo "<center>Login = $u </center><br>";
    echo "<center>Password = $p </center><br>";
    ?>
</body>
</html>


