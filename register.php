<?php

session_start();

if (isset($_SESSION['id'])) {
    header("location:http://localhost/Webboard_ECT/index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

<script>
    function OnBlurPwd(){
        let pwd = document.getElementById("pwd");
        let pwd2 = document.getElementById("pwd2");
        if(pwd.value !== pwd2.value){
            alert("รหัสผ่านทั้งสองไม่ตรงกัน");
            pwd2.value="";
        }
    }
</script>

    <div class="container">
        <h1 style="text-align: center;" class="mt-3">WebKakkak</h1>
        <?php include "nav.php" ?>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <?php 
                    if(isset($_SESSION['add_login'])){
                        if($_SESSION['add_login'] == "error"){
                            echo "<div class='alert alert-danger'>ชื่อบัญชีซ้ำ</div>";
                        }else{
                            echo "<div class='alert alert-success'>เพิ่มบัญชีเรียบร้อยแล้ว</div>";
                        }
                        unset($_SESSION['add_login']);
                    }
                    
                ?>
                <div class="card border-primary">
                    <div class="card-header bg-primary text-white">เข้าสู่ระบบ</div>
                    <div class="card-body">
                        <form action="register_save.php" method="post">
                            <div class="row">
                                <label class="col-lg-3 col-form-label" for="user">ชื่อบัญชี</label>
                                <div class="col-lg-9">
                                    <input type="text" name="login" id="user" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label" for="pwd">รหัสผ่าน</label>
                                <div class="col-lg-9">
                                    <input type="password" name="pwd" id="pwd" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label" for="pwd2">ใส่รหัสผ่านซ้ำ</label>
                                <div class="col-lg-9">
                                    <input type="password" name="pwd2" id="pwd2" class="form-control" onblur="OnBlurPwd()" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label" for="name">ชื่อ-นามสกุล</label>
                                <div class="col-lg-9">
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label">เพศ</label>
                                <div class="col-lg-9">
                                    <div class="form-check">
                                        <input type="radio" name="gender" value="m" class="form-check-input" required>
                                        <label class="form-check-label">ชาย</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="gender" value="f" class="form-check-input" required>
                                        <label class="form-check-label">หญิง</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" name="gender" value="o" class="form-check-input" required>
                                        <label class="form-check-label">อื่นๆ</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label" for="email">อีเมล:</label>
                                <div class="col-lg-9">
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-sm me-2">
                                        <i class="bi bi-save"></i> สมัครสมาชิก
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm me-2">
                                        <i class="bi bi-x-square"></i> ยกเลิก
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
        </div>
    </div>
    <br>
</body>

</html>