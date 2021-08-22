<?php include_once('structure/head.php'); ?>
<?php include_once('structure/nav.php'); ?>


<?php
    require_once('data/data.php');
    $id = $_GET["id"];
    $items= selectItemOne($id);
    foreach($items as $row):
    ?>
    <div class="container p-4">
        <form action="update_model.php" method="post">
            <input type="hidden" value=<?= $row['postId']?> name="postId">
            <input type="hidden" value=<?= $row['image']?> name="image">
            <div class="form-group">
                <input type="text" class="form-control" value="<?= $row['title']?>" name="title">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" value="<?= $row['description']?>" name="description">
            </div>
            <div class="form-group">
                <small class="text text-light">Select type of the news</small><br>
                <select class="form-control" name="typeOfNews" id="newsType">
                    <option value="Covid-19">Covid-19</option>
                    <option value="Relex">Relex news</option>
                    <option value="Sport">Sport</option>
                    <option value="Economy">Economy</option>
                    <option value="Technology">Technology</option>
                    <option value="Job occasion">Job occasion</option>

                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary form-control" name="btn" value="Update it now">
            </div>
        </form>
    </div>
<?php 
    endforeach;
?>



<?php include_once('structure/footer.php'); ?>