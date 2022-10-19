<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <title>Register Page</title>
</head>
<body>
<?php
if(isset($_SESSION["id"])){
    header("Location: index.php");
}
?>
    <h1 style="text-align:center">สมัครสมาชิก</h1>
    <hr>
    <center>
        <table style="border: 2px solid black; width:40% ;">
        <tr><th style="background-color: #6CD2FE; text-align: left;" colspan="2">กรอกข้อมูล</th></tr>
        <tr><td><form action="" >
            ชื่อบัญชี : </td><td><div style="float:right"><input type="text" size="40%" name="username" required></div></td></tr>
        <tr><td>
            รหัสผ่าน : </td><td><div style="float:right"><input type="password" size="40%" name="password" required></div></td></tr>
        <tr><td>
            ชื่อ-นามสกุล : </td><td><div style="float:right"><input type="text" size="40%" name="namesur" required></div></td></tr>
        <tr><td>
            เพศ :   </td><td>
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="m" required> ชาย <br>
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="f"> หญิง <br>
                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="e"> อื่นๆ <br></td></tr>
        <tr><td>
                    อีเมลล์ : </td><td><div style="float:right"><input type="email" size="40%" name="email" required></div></td></tr>
        <tr><td style="text-align:center" colspan="2"><input type="submit" value="สมัครสมาชิก"></td></tr>
        </form>

    </table>
    <h3><a href="index.php">กลับไปหน้าหลัก</a></h3>
</center>
</body>
</html>