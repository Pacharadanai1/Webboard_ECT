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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>สมัครสมาชิก</h1>
    <hr>
    <form action="">
        <table align="center">
            <tr>
                <td colspan="2" style="background-color: violet;">กรอกข้อมูล</td>
            </tr>
            <tr>
                <td>ชื่อบัญชี:</td>
                <td><input type="text" name="user" size="50"></td>
            </tr>
            <tr>
                <td>รหัสผ่าน:</td>
                <td><input type="password" name="pwd" size="50"></td>
            </tr>
            <tr>
                <td>ชื่อ-นามสกุล:</td>
                <td><input type="text" name="name"  size="50"></td>
            </tr>
            <tr>
                <td>เพศ:</td>
                <td>
                    <input type="radio" name="gender" value="m">ชาย <br>
                    <input type="radio" name="gender" value="f">หญิง <br>
                    <input type="radio" name="gender" value="o">อื่นๆ <br>
                </td>  
            </tr>
            <tr>
                <td>อีเมล:</td>
                <td><input type="email" name="email" size="50"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="สมัครสมาชิก"></td>
            </tr>
        </table>
        <br>
        <div>
            ถ้ายังไม่ได้เป็นสมาชิก<a href="index.php">กลับไปหน้าหลัก</a>
        </div>
    </form>
</body>
</html>