<?php
        require_once("data/data.php");
        $id = $_GET['id'];
        delete($id);
        header('Location: index.php');