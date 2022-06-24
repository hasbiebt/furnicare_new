<?php
session_start();
if (isset($_POST['login'])) {
    include_once $_SERVER['DOCUMENT_ROOT'].'/furnicare_new/database/user-dbop.php';
    $objUser = new User();
    $objUser->login($_POST['email'], $_POST['password']);
    header('location:../detailedservice.php');
}
?>