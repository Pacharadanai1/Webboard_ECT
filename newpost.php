<?php

session_start();

if (!isset($_SESSION['id'])) {
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
        <form action="">
            <table align="center">
                <tr style="text-align: center;">
                    <td>ผู้ใช้: <?php echo $_SESSION['username'] ?>
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td style="float: left;">หมวดหมู่: <select name="category" id="">
                            <option value="all">--ทั้งหมด--</option>
                            <option value="gerral">เรื่องทั่วไป</option>
                            <option value="study">เรื่องเรียน</option>
                        </select>

                    </td>

                </tr>
                <tr>
                    <td style="float: left;">หัวข้อ: <input type="text"></td>
                </tr>
                <tr>
                    <td style="float: left;">เนื้อหา: </td>
                    <td style="float: left;"><textarea name="message" id="" cols="21" rows="2"></textarea></td>
                </tr>
                <tr>
                    <td style="float: right;"><input type="submit" value="บันทึกข้อความ"></td>
                </tr>
            </table>
        </form>
        <br>
        <a href="index.php">กลับไปหน้าหลัก</a>
    </div>

</body>

</html>