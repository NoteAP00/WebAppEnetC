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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>Homepage</title>


    <script>
        function myFunction1() {
            let r = confirm("ต้องการจะลบจริงหรือไม่");
            return r;
        }
    </script>

</head>
<?php
if (isset($_SESSION["id"])) {

?>

    <body>
        <div class="container"><!-- ทั้งหน้าจะมีการเว้นซ้ายขวา -->
            <h1 class="text-center">Webboard KakKak</h1>

            <?php
            include "nav.php";
            ?><!-- เรียก navbar จากที่อื่นมาใช้ ง่ายต่อการเรียนใช้ในหลายๆไฟล์ -->
            <a href="index.php" class="btn btn-info btn-outline-danger mt-2 ">กลับไปหน้าปกติ</a>
            <button class="btn btn-primary mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapseExample">
                สร้างโพสต์ใหม่
            </button>
            <div class="collapse" id="collapse1">
                <div class="card text-dark bg-white border-info my-4">
                    <div class="card-header bg-primary text-white">
                        ตั้งกระทู้ใหม่
                    </div>
                    <div class="card-body">
                        <form action="newpost_save1.php" method="post">
                            <div class="row mb-3">
                                <label class="col-lg-3 col-form-label">
                                    หมวดหมู่ :
                                </label>
                                <div class="col-lg-9">
                                    <select name="category" class="form-select">
                                        <!--
                                    <option value="general">เรื่องทั่วไป</option>
                                    <option value="study">เรื่องร้องเรียน</option>
                                    -->
                                        <?php
                                        $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
                                        $sql = "SELECT * FROM category";
                                        foreach ($conn->query($sql) as $row) {

                                            echo "<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
                                        }
                                        $conn = null;
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-3 col-form-lable">หัวข้อ :</label>
                                <div class="col-lg-9">
                                    <input type="text" name="topic" class="form-control" require>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-lg-3 col-form-lable">เนื้อหา :</label>
                                <div class="col-lg-9">
                                    <textarea name="comment" class="form-control" rows="8" require></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <center>
                                        <button type="submit" class="btn btn-info btn-sm text-white">
                                            <i class="bi bi-caret-right-square me-1"></i>
                                            บันทึกข้อความ
                                        </button>
                                    </center>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php
            $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
            $conn->exec("SET CHARACTER SET utf8");

            $data = $conn->query("SELECT p.id,p.title,p.content,p.post_date ,c.name,u.name FROM post p , user u , category c WHERE p.cat_id = c.id AND p.user_id = u.id order by p.id DESC;");



            if ($data !== false) {
                while ($row = $data->fetch()) {
                    // echo "<tr><td><a href=\"post.php?id=".$row['0'].'\" style=text-decoration:none></a>"; 
                    /* echo "<tr><td>";
               echo "[ ".$row['4']." ] ";   
               echo "<a href=\"post.php?id=".$row['0']."\" style=text-decoration:none>";            
               echo $row['1']."</a>";
               echo "<br>";
               echo $row['5']." - " . $row['3'];
               echo "</td></tr>";   */
                    foreach ($conn->query("SELECT COUNT(*) FROM comment WHERE post_id = " . $row['0'] . ";") as $i) {
                        $count = $i[0];
                    }

            ?>

                    <div class="card my-4 text-dark bg-white border-info">
                        <div class="card-header text-white bg-info">
                            <div class="card-title">
                                <h4 class="bi bi-person-circle">&nbsp;<?= $row['5'] ?></h4>
                            </div>
                            <div class="card-subtitle">
                                [ <?= $row['4'] ?> ] - <?= $row['3'] ?>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="card-title">
                                <h5><?= $row['1'] ?></h5>
                            </div>
                            <div class="card-subtitle">
                                <p>&nbsp;&nbsp;<?= $row['2'] ?></p>
                            </div>
                        </div>
                        <div class="card-footer bg-white">
                            <button class="btn btn-warning mt-2 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#id<?= $row['0'] ?>-2" aria-expanded="false" aria-controls="collapseExample">
                                ดูความคิดเห็น (<?= $count ?>)
                            </button>
                            <button class="btn btn-success mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#id<?= $row['0'] ?>-3" aria-expanded="false" aria-controls="collapseExample">
                                แสดงความคิดเห็น
                            </button>
                            <div class="collapse" id="id<?= $row['0'] ?>-2">
                                <?php
                                $result = $conn->query("SELECT c.* , u.name FROM comment c , user u WHERE c.user_id = u.id AND c.post_id = " . $row['0'] . ";");

                                foreach ($result as $row1) {

                                ?>

                                    <div class="container">
                                        <div class="card my-4 text-dark bg-white border-warning">
                                            <div class="card-header text-white bg-warning ">
                                                <div class="card-title">
                                                    <h4 class="bi bi-person-circle">&nbsp;<?= $row1['5'] ?></h4>

                                                </div>
                                                <div class="card-subtitle">
                                                    <?= $row1['2'] ?>
                                                </div>

                                            </div>
                                            <div class="card-body">
                                                <div class="card-subtitle">
                                                    <p>&nbsp;&nbsp;<?= $row1['1'] ?></p>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="collapse" id="id<?= $row['0'] ?>-3">
                            <div class="card text-dark bg-white border-success mx-5 my-3">
                                <div class="card-header bg-success text-white">แสดงความคิดเห็น</div>
                                <div class="card-body">
                                    <form action="post_save1.php" method="post">
                                        <input type="hidden" name="post_id" value="<?= $row['0'] ?>">
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
                        </div>

                    </div>
            <?php

                }
            }
            $conn = null;
            ?>


        <?php
    } else {
        header("Location: index.php");
    }
        ?>
    </body>

</html>