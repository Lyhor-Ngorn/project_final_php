<div class="container d-flex flex-wrap justify-content-center">
    <?php
        require_once('data/data.php');
        $data = selectAll();
        foreach($data as $value):
    ?>
        <div class="card mr-3 mt-3" style="width:30% ">
            <img class="card-img-top hvr-grow" src="allImg/<?= $value['image']?>" alt="Card image" style="width:100%;height:40vh;">
            <div class="text hvr hvr-grow" style="margin-top:-55%; background:#E74C3C ;width:40%;border-top-right-radius: 40px;border-bottom-right-radius:40px; padding-left:20px;color:white"><?= $value['typeOfNews'] ?></div>
            <div class="card-body" style="margin-top:45%;">
                <a href="#">Detail</a>
                <a href="delete.php?id=<?= $value['postId'] ?>"><i class="fa fa-trash"></i></a>
                <a href="edit.php?id=<?= $value['postId'] ?>"><i class="fas fa-edit"></i></a>
            </div>
        </div>
    <?php endforeach; ?>
</div> 