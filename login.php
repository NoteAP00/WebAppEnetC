<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
<?php
if(isset($_SESSION["id"])){
    header("Location: index.php");
}
?>
    <h1 style="text-align:center">Webboard KakKak</h1>
    <hr><center>
    <form action="verify.php" method="post" >
    <table style="border: 2px solid black; width:40% ;">
        <tr><th style="background-color: #6CD2FE; text-align: left;" colspan="2">เข้าสู่ระบบ</th>
        <tr><td>
            Login </td><td><div style="float:right">
                <input type="text" size="40%" name="username" required></div></td></tr>
        <tr><td>
            Password </td><td><div style="float:right">
                 <input type="password" size="40%" name="password" required></div></td></tr>
        <tr><td style="text-align:center" colspan="2"><input type="submit" value="login"></td></tr>
        
</table>    
</form>
    <h3>ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a></h3>
</center>
    
</body>
</html>