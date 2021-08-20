<?php include_once('structure/head.php'); ?>
<?php include_once('structure/nav.php'); ?>


<div class="container p-4">
    <form action="create.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Input title in here" name="title">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Input describtion in here" name="description">
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
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFileLang" lang="es" name="image">
            <label class="custom-file-label" for="customFileLang">Select only one image each time</label>
        </div>
        <div class="form-group mt-3">
            <input type="submit" class="btn btn-primary form-control" name="btn" value="Update it now">
        </div>
    </form>
</div>



<?php include_once('structure/footer.php')?>