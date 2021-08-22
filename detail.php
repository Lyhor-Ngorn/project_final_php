<?php include_once('structure/head.php'); ?>
    <?php
        require_once('data/data.php');
        $id = $_GET["id"];
        $items= selectItemOne($id);
        foreach($items as $row):
    ?>
        <div class="container" style="width:80%;color:white">
            <img class="mt-3"src="allImg/<?= $row['image']?>" alt="Card image" style=" height:40vh">
            <h2><?= $row['title'] ?></h2>
            <h4><?= $row['datePost'] ?></h4>
            <p stlye="text-align:justify;color:white;"><?= $row['description'] ?></p>
            <a href="index.php"class="btn btn-danger">Go back to homepage</a>
        </div>
    <?php endforeach; ?>