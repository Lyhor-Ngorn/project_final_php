<?php
include_once('structure/head.php');
include_once('structure/nav.php');
include_once('structure/body.php');
include_once('structure/footer.php');

if(isset($_GET['page'])) {
    include_once('pages/'.$_GET['page'].'.php');
}else{
    include_once('pages/home.php');
}