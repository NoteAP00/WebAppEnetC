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
    
    <title>Post</title>
</head>
<body>
<div class="container">
<h1 style="text-align:center">Webboard KakKak</h1>

<?php
        include "nav.php"; 
    ?>    
<center>
    <?php
    isset($_GET['id']) ? $id= $_GET['id'] : header("Location: index.php");
    echo "<center>ต้องการดูกระทู้หมายเลข $id <br>";
    if($id % 2 == 0){
        echo "เป็นกระทู้หมายเลขคู่</center><br>";
    }
    else{
        echo "เป็นกระทู้หมายเลขคี่</center><br>";
    }
    ?>
    <div class="card text-dark bg-white border-success">
        <div class="card-header bg-success text-white">แสดงความคิดเห็น</div>
        <div class="card-body">
            <form action="post_save.php" method="post">
                <input type="hidden" name="post_id" value="<? $_GET['id'] ?>">
                <div class="row mb-3 justify-content-center">
                    <div class="col-lg-10">
                        <textarea name="comment" class="form-control" rows="8"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <center>
                            <button type="submit" class="btn btn-success btn-sm text-white">
                                <i class="bi bi-box-arrow-up-right me-1"></i>
                                ส่งข้อความ
                            </button>
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </center>
</div>


   <!-- <table style="border: 2px solid black; width:40% ;"> 
    <tr><th style="background-color: #6CD2FE; text-align: left;" colspan="2">แสดงความคิดเห็น</th></tr>
    <tr><td><div style="text-align:center"><textarea type="text" name="comment" rows="5%" cols="65%" placeholder="แสดงความคิดเห็นได้ที่นี่......" autofocus></textarea></div></td></tr>
    <tr><td style="text-align:center"><input type="submit" value="ส่งข้อความ"></td></tr>    
    </table> -->
<!--<h3><a href="index.php">กลับไปหน้าหลัก</a></h3></center>
-->
</body>
</html>