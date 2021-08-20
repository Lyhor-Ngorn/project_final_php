<?php
        require_once('data/data.php');
        $arr = [];
        $arr['title'] = $_POST['title'];
        $arr['description'] = $_POST['description'];
        $arr['image'] = $_POST['image'];
        $arr['id'] = $_POST['postId'];
        $arr['category'] = $_POST['typeOfNews'];
        update($arr);
        header('Location: index.php');