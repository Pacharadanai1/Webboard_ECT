<?php
session_start();

$id = $_GET['id'];

if (isset($_SESSION['id']) && ($_SESSION['role']) == 'a') {
    echo "ลบการทู้หมายเลข $id";
} else {
    header("location:http://localhost/Webboard_ECT/index.php");
    die();
}
