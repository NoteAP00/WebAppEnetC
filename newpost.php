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
    
    <title>Newpost</title>
</head>
<body>

<h1 style="text-align:center">Webboard KakKak</h1>
    <hr><center>
<table style="border: 2px solid black; width:40% ;">
<tr><th style="background-color: #6CD2FE; text-align: left;" colspan="2">สร้างโพสต์ใหม่</th></tr>
<tr><td>ผู้ใช้ : </td><td><div style="float:left"> 
<?php
if(!isset($_SESSION["id"])){
    header("Location: index.php");
}
echo  $_SESSION["username"] . "</div></td></tr>";

?>
<tr><td>หมวดหมู่ : </td><td><div style="float:left"><select name="หมวดหมู่" >
            <option value="1">เรื่องทั่วไป</option>
            <option value="2">เรื่องร้องเรียน</option>
        </select></div></td></tr>
<tr><td>หัวข้อ :  </td><td><div style="float:left"><input type="text" size="40%" name="head" required></div></td></tr>
<tr><td>เนื้อหา : </td><td><div style="float:left"><textarea type="text" name="content" rows="5%" cols="40%" placeholder="เขียนข้อความได้ที่นี่......" autofocus></textarea></div></td></tr>
<tr><td></td><td><div style="text-align:center"><input type="submit" value="บันทึกข้อความ"></div></td></tr>
</table>
<h3><a href="index.php">กลับไปหน้าหลัก</a></h3></center>
</body>
</html>