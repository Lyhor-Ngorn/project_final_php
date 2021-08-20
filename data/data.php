<?php
/**
 * Connect to database
 */
function db() {
    return new mysqli('localhost','root','','project_final');
}
function selectAll() {
    $db = db();
    return $db->query("SELECT all_post.*,category.typeOfNews FROM all_post JOIN category ON category.categoryId = all_post.categoryId ORDER BY postId DESC");
}

// Delete funtion
function delete($id) {
    $db = db();
    $db->query("delete from category where postId = $id");
    return $db->query("delete from all_post where postId = $id");
}

// select one item 
function selectItemOne($id) {
    $db = db();
    return $db->query("SELECT all_post.*,category.typeOfNews FROM category JOIN all_post ON category.categoryId = all_post.categoryId WHERE all_post.postId = $id ");
}

// select one category 
// function selectCategory($id) {
//     $db = db();
//     return $db->query("SELECT * FROM category WHERE category.postId = $id ");
// }

// update or edit 
function update($value) {
    $db = db();
    $title = $value["title"];
    $id = $value['id'];
    $description = $value["description"];
    $image = $value["image"];
    $type = 4;
    if($value['category'] == "Relex") {
        $type = 5;
    }else if ($value['category'] == "Sport") {
        $type = 6;
    }else if ($value['category'] == "Economy") {
        $type = 7;
    }else if ($value['category'] == "Technology") {
        $type = 8;
    }else if ($value['category'] == "Job occasion") {
        $type = 9;
    }
    return $db->query("UPDATE all_post SET title='$title', description='$description', image='$image' , categoryId='$type' where postId = $id");
}


// create

function create($value) {
    $db = db();
    $title = $value["title"];
    $description = $value["description"];
    $image = $value["image"];
    $type = 4;
    if($value['category'] == "Relex") {
        $type = 5;
    }else if ($value['category'] == "Sport") {
        $type = 6;
    }else if ($value['category'] == "Economy") {
        $type = 7;
    }else if ($value['category'] == "Technology") {
        $type = 8;
    }else if ($value['category'] == "Job occasion") {
        $type = 9;
    }
    return $db->query("INSERT INTO `all_post`( `title`, `description`, `userId`, `image`, `categoryId`) VALUES ('$title','$description',1,'$image','$type')");
}