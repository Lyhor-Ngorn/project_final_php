<?php
    require_once('data/data.php');
    $arr = [];
    $arr['title'] = $_POST['title'];
    $arr['description'] = $_POST['description'];
    // $arr['image'] = $_POST['image'];
    $arr['category'] = $_POST['typeOfNews'];
    print_r($_FILES['image']);
    $imgName = $_FILES['image']['name'];
    $imgSize = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $type = $_FILES['image']['type'];
    $error = $_FILES['image']['error'];
    if ($error === 0) {
        $imgEx = pathinfo($imgName,PATHINFO_EXTENSION);
        $imgLocaltion = strtolower($imgEx);
        $allow = array('jpg','jpeg','png');
        if (in_array($imgEx,$allow)) {
            $newImgName = uniqid("IMG-",true).'.'.$imgLocaltion;
            $imgUploadPath = 'allImg/'.$newImgName;
            move_uploaded_file($tmp_name,$imgUploadPath);
            $arr['image'] = $newImgName;
            create($arr);
            header('Location: index.php');
        }else {
            Location('index.php?error=can not use this file');
        }
    } else {
        Location('index.php?error=404 Not found');
    }