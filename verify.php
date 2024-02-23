
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
        <?php      

        $l = $_POST['login'];
        $p = $_POST['pwd'];
        
        $l1 = "admin";
        $p1 = "ad1234";
        $l2 = "member";
        $p2 = "mem1234";

        
        if($l == $l1 && $p == $p1){
            $_SESSION['username'] = '<i class="bi bi-person-circle"> </i> Admin';
            $_SESSION['role'] = 'a';
            $_SESSION['id'] = session_id();

            header("location:index.php");
            die();
        }
        elseif($l == $l2 && $p == $p2){
            $_SESSION['username'] = '<i class="bi bi-person-lines-fill"></i> Member';
            $_SESSION['role'] = 'm';
            $_SESSION['id'] = session_id();
            
            header("location:index.php");
            die();
        }
        else{
            $_SESSION['error']='error';
            header("location:login.php");
            die();
        }
        ?>

</body>

</html>