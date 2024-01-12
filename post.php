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
        $id = $_GET['id'];

        echo "ต้องการดูกระทู้หมายเลข $id" . "<BR>";
        ?>
        <table align="center">
            <tr>
                <td style="text-align: left; background-color :violet" >แสดงความคิดเห็น</td>
                <br>
            </tr>
            <tr>
                <td><textarea name="message" id="" cols="70" rows="10"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="ส่งข้อความ"></td>
            </tr>
        </table>
        <br>
        <a  href="index.html">กลับไปหน้าหลัก</a>
    </div>

</body>

</html>