
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
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Webboard KakKak</h1>
    <hr>
    <div>
        <?php      

        $l = $_POST['login'];
        $p = $_POST['pwd'];
        
        $l1 = "admin";
        $p1 = "ad1234";
        $l2 = "member";
        $p2 = "mem1234";

        if($l == $l1 && $p == $p1){
            $_SESSION['username'] = 'admin';
            $_SESSION['role'] = 'a';
            $_SESSION['id'] = session_id();

            echo "ยินดีตอนรับคุณ ADMIN";
        }
        elseif($l == $l2 && $p == $p2){
            $_SESSION['username'] = 'member';
            $_SESSION['role'] = 'm';
            $_SESSION['id'] = session_id();
            
            echo "ยินดีตอนรับคุณ MEMBER";
        }
        else{
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
        }
        ?>
        <br>
        <a href="index.php">กลับไปยังหน้าหลัก</a>
    </div>

</body>

</html>