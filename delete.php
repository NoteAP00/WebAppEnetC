<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="text-align:center">Webboard KakKak</h1>
    <hr>
<?php
if($_SESSION["role"] != "a"){
    header("Location: index.php");
}
$id= $_GET['id'];
echo "ลบกระทู้ หมายเลข $id";
?>
<center><h3><a href="index.php">กลับไปหน้าหลัก</a></h3></center>
</body>
</html>