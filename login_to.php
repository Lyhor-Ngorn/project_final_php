<?php
    require_once('data/data.php');
    $user = [];
    $user['name'] = $_POST['name'];
    $user['password'] = $_POST['password'];
    $login = loginNow($user);
    if($login == "success") {
        header("Location:index.php");
    } else {
        header("Location:404_error.php");
    }
?>