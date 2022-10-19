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
    
    <title>Login Page</title>
</head>
<body>
    <div class="container">
<?php
if(isset($_SESSION["id"])){
    header("Location: index.php");
}
?>
    <h1 style="text-align:center">Webboard KakKak</h1>
    <?php
        include "nav.php";
    ?><!-- เรียก navbar จากที่อื่นมาใช้ ง่ายต่อการเรียนใช้ในหลายๆไฟล์ --> 
<section class="col-md-5 mx-auto">
    <?php    if(isset($_SESSION["error"]) && $_SESSION["error"] == "err1"){
            echo "<div style=\"max-width: 18rem;\" class=\"alert alert-danger m-3\" role=\"alert\">";
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
            echo "</div>";
            unset($_SESSION["error"]);
        }
    ?>

    
    <form action="verify.php" method="post" >
    <!--
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
    -->
    <div class="card text-bg-light m-3" style="max-width: 18rem;">
        <div class="card-header">เข้าสู่ระบบ</div>
        <div class="card-body d-grid gap-2">
            <label for="username" class="form-label mb-1">Login :</label>
            <input type="text" class="form-control"  name="username" required>
            <label for="password" class="form-label mb-1">Password :</label>
            <input type="password" class="form-control"  name="password" required>
            <input type="submit" value="login" class="btn btn-secondary gap-2 col-md-5 mx-auto" style="max-width: 25%;">
        </div>
    </div>
</form>
    <p>ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a></p>
</section>
</div>
</body>
</html>