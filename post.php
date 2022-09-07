<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
<h1 style="text-align:center">Webboard KakKak</h1>
    <hr><center>
    <?php
    $id= $_GET['id'];
    echo "<center>ต้องการดูกระทู้หมายเลข $id <br>";
    if($id % 2 == 0){
        echo "เป็นกระทู้หมายเลขคู่</center><br>";
    }
    else{
        echo "เป็นกระทู้หมายเลขคี่</center><br>";
    }
    ?>
    <table style="border: 2px solid black; width:40% ;"> 
    <tr><th style="background-color: #6CD2FE; text-align: left;" colspan="2">แสดงความคิดเห็น</th></tr>
    <tr><td><div style="text-align:center"><textarea type="text" name="comment" rows="5%" cols="65%" placeholder="แสดงความคิดเห็นได้ที่นี่......" autofocus></textarea></div></td></tr>
    <tr><td style="text-align:center"><input type="submit" value="ส่งข้อความ"></td></tr>    
</table>
<center><h3><a href="index.php">กลับไปหน้าหลัก</a></h3></center>
</body>
</html>