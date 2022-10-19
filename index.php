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
    
    <title>Homepage</title>
</head>
<?php
    if(!isset($_SESSION["id"])){
        
    ?>
<body>
<div class="container"><!-- ทั้งหน้าจะมีการเว้นซ้ายขวา -->
    <h1 style="text-align:center">Webboard KakKak</h1>
    
    <?php
        include "nav.php"; 
    ?><!-- เรียก navbar จากที่อื่นมาใช้ ง่ายต่อการเรียนใช้ในหลายๆไฟล์ -->
<!--
    หมวดหมู่ : 
    
    <a href="login.php" style="float:right">เข้าสู่ระบบ</a>
        <select name="หมวดหมู่" >
            <option value="1">-- ทั้งหมด --</option>
            <option value="2">เรื่องทั่วไป</option>
            <option value="3">เรื่องร้องเรียน</option>
        </select>
        
    -->
  <br>
  <div class="d-flex">
        <div>
            <label>หมวดหมู่</label>
            <span class="dropdown">
                <button class="btn btn-light dropdown-toggle btn-sm"
                        type="button" id="button2" data-bs-toggle="dropdown"\
                        aria-expanded="false">
                        --ทั้งหมด--
                </button>
                <ul class="dropdown-menu" aria-labelledby="button2">
                    <li><a href="#" class="dropdown-item">ทั้งหมด</a></li>
                    <li><a href="#" class="dropdown-item">เรื่องทั่วไป</a></li>
                    <li><a href="#" class="dropdown-item">เรื่องร้องเรียน</a></li>
                </ul>
            </span>
        </div>
  </div>  
  <br>
  <table class="table table-striped">

        <?php
        for($i=1;$i<=10;$i++){ 
            echo "<tr><td><a href=\"post.php?id=$i\" style=text-decoration:none>กระทู้ที่ $i</a>";
        }?>
</table>    
    </div>   
</body>
<?php
    }else{
?>
<body>
<div class="container"><!-- ทั้งหน้าจะมีการเว้นซ้ายขวา -->
    <h1 style="text-align:center">Webboard KakKak</h1>
    
    <?php
        include "nav.php"; 
    ?><!-- เรียก navbar จากที่อื่นมาใช้ ง่ายต่อการเรียนใช้ในหลายๆไฟล์ -->
   <!--
    หมวดหมู่ : 
    
    <a href="login.php" style="float:right">เข้าสู่ระบบ</a>
        <select name="หมวดหมู่" >
            <option value="1">-- ทั้งหมด --</option>
            <option value="2">เรื่องทั่วไป</option>
            <option value="3">เรื่องร้องเรียน</option>
        </select>
        
    -->
  <br>
  <div class="d-flex">
        <div class="w-100">
            <label class="form-lable">หมวดหมู่</label>
            <span class="dropdown">
                <button class="btn btn-light dropdown-toggle btn-sm "
                        type="button" id="button2" data-bs-toggle="dropdown"\
                        aria-expanded="false">
                        --ทั้งหมด--
                </button>
                <ul class="dropdown-menu" aria-labelledby="button2">
                    <li><a href="#" class="dropdown-item">ทั้งหมด</a></li>
                    <li><a href="#" class="dropdown-item">เรื่องทั่วไป</a></li>
                    <li><a href="#" class="dropdown-item">เรื่องร้องเรียน</a></li>
                </ul>
            </span>
        </div>
        <div class="flex-shrink-0">
            <a  class="btn btn-success bi bi-plus" href="newpost.php">สร้างกระทู้ใหม่</a>
        </div>
    
  </div> 
        
        
  <br>
  <table class="table table-striped ">

        <?php
        for($i=1;$i<=10;$i++){ 
            echo "<tr><td><a href=\"post.php?id=$i\" style=text-decoration:none>กระทู้ที่ $i</a>";
            if($_SESSION["role"] == "a"){
                echo "</td><td><a href=\"delete.php?id=$i\" class=\"btn btn-danger bi bi-trash\"></a>";
                echo "</td></tr>";
            }
        }?>
</table>    
</div>
</body>
<?php
    }
?>
</html>