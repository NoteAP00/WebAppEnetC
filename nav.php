<!-- no login -->
<?php
if(!isset($_SESSION['id'])){
?>
<!--ส่วนด้านบนสุด navbar-->
<nav class="navbar navbar-expand-lg bg-light" style="background-color: #D3D3D3;">
        <div class="container-fluid"> <!--[fluid] navbar จะมีอยู่เต็มทั้งด้านซ้ายและขวา-->
            <a href="index.php" class="navbar-brand bi bi-house-door-fill">
                Home
            </a>
            <a href="login.php" class="navbar-brand bi bi-pencil-square ">
                เข้าสู่ระบบ
            </a>
    </nav>
<!-- Login -->
<?php
}else{
?>
<!--ส่วนด้านบนสุด navbar-->
<nav class="navbar navbar-expand-lg bg-light" style="background-color: #D3D3D3;">
        <div class="container-fluid"> <!--[fluid] navbar จะมีอยู่เต็มทั้งด้านซ้ายและขวา-->
            <a href="index.php" class="navbar-brand bi bi-house-door-fill">
                Home
            </a>
            <div class="dropdown">
            <a class="btn btn-outline-secondary dropdown-toggle btn-sm bi bi-person-lines-fill" 
               type="button" id="button1" data-bs-toggle="dropdown" aria-expanded="false">
                <?php
                    echo $_SESSION["username"];
                ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="button1">
                <li><a class="dropdown-item bi bi-power" href="logout.php"> ออกจากระบบ</a></li>
            </ul>
            </div>
    </nav>
<?php
}
?>