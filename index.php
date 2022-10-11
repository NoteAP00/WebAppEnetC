<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<?php
    if(!isset($_SESSION["id"])){
        
    ?>
<body>
    <h1 style="text-align:center">Webboard KakKak</h1>
    <hr>
    
    หมวดหมู่ : 
    
    <a href="login.php" style="float:right">เข้าสู่ระบบ</a>
        <select name="หมวดหมู่" >
            <option value="1">-- ทั้งหมด --</option>
            <option value="2">เรื่องทั่วไป</option>
            <option value="3">เรื่องร้องเรียน</option>
        </select>
        
        <br>
    
    <ul>
        <?php
        for($i=1;$i<=10;$i++){
            echo "<li><a href=\"post.php?id=$i\">กระทู้ที่ $i</a></li>";
            }
        ?>
    </ul>
    
</body>
<?php
    }else{
?>
<body>
    <h1 style="text-align:center">Webboard KakKak</h1>
    <hr>
    
    หมวดหมู่ : 
    
    <a href="logout.php" style="float:right">ออกจากระบบ</a>
        <select name="หมวดหมู่" >
            <option value="1">-- ทั้งหมด --</option>
            <option value="2">เรื่องทั่วไป</option>
            <option value="3">เรื่องร้องเรียน</option>
        </select>
        <div style="float: right">
        <?php 
        echo "ผู้ใช้งานระบบ : " . $_SESSION["username"] . "&nbsp;&nbsp;&nbsp;&nbsp;";
        ?>
        </div>
        <br>
        <a href="newpost.php">สร้างกระทู้ใหม่</a>
    <ul>
        <?php
        
        for($i=1;$i<=10;$i++){
            echo "<li><a href=\"post.php?id=$i\">กระทู้ที่ $i</a>";
            if($_SESSION["role"] == "a"){
                echo "&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"delete.php?id=$i\">ลบ</a></li>";
            }
            }
        ?>
    </ul>
    
</body>
<?php
    }
?>
</html>