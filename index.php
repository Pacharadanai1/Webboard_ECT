<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebKakkak</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-lg">
        <h1 style="text-align: center;" class="mt-3"> WebKakkak</h1>

        <nav class="navbar navbar-expand-lg bg-success ">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="index.php"><i class="bi bi-house-fill"></i>Home</a>
                <ul class="navbar-nav">
                    <?php if (!isset($_SESSION['id'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="login.php"><i class="bi bi-pencil-square"></i>เข้าสู่ระบบ</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item dropdown ">
                            <a class="btn btn-outline-info dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i><?php echo $_SESSION['username'] ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="logout.php"><i class="bi bi-power"></i>ออกจากระบบ</a></li>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
        <form>
            หมวดหมู่ <select name "Category">
                <option value="all">--ทั้งหมด--</option>
                <option value="geraral">เรื่องทั่วไป</option>
                <option value="study">เรื่องเรียน</option>
            </select>
            <?php
            if (!isset($_SESSION['id'])) {
                echo "<a href=login.php style='float: right;'></a>";
            } else {
                echo "<div style='float: right;'>
            <a href=logout.php></a>
        </div>";
                echo "<br><a href=newpost.php>สร้างกระทู้ใหม่</a>";
            }
            ?>

        </form>

        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<li><a href=post.php?id=$i>กระทู้ที่ $i</a>";

            if (isset($_SESSION['id']) && $_SESSION['role'] == 'a') {
                echo "&nbsp;&nbsp;<a href=delete.php?id=$i>ลบ</a>";
            }
            echo "</li>";
        }

        ?>
    </div>
</body>

</html>