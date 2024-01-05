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
        เข้าสู่ระบบด้วย
        <br>
        <?php

        $l = $_POST['login'];
        $p = $_POST['pwd'];

        echo "Login = $l" . "<BR>";
        echo "Password = $p" . "<BR>";
        ?>
    </div>

</body>

</html>