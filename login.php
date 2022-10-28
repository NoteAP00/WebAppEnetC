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

    <!--
        user 1 :
        user : Apinun
        pass : $passwd
    -->

    

    
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
   <?php
        if(isset($_SESSION["error"]) == "err1"){
   ?>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <?php   
                        echo "<div class=\"alert alert-danger bi bi-exclamation-triangle\" role=\"alert\">";
                        echo "  ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
                        echo "</div>";
                        unset($_SESSION["error"]);
                    
            ?>
        </div>
        <div class="col-md-4"></div>
    </div>
    <?php
        }
    ?>

    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <div class="card text-dark bg-light" >
                <div class="card-header ">เข้าสู่ระบบ</div>
                <div class="card-body">
                    <div class="form-group mb-2">
                        <label class="form-label">Login :</label>
                        <input type="text" class="form-control" name="username" required>
                    </div>
                    <div class="form-group mb-4">
                        <label class="form-label">Password :</label>
                        <input type="password" class="form-control"  name="password" required>
                    </div>    
                    <center><button type="submit"  class="btn btn-secondary btn-sm">Login</button></center>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</form>
        <div class="mt-4" align="center">ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a></div>

</div>
</body>
</html>