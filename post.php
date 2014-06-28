<?php

include_once './config.php';


$category = new Category();

$post = new Post();
$post->show_current_post();

require_once VIEWS_PATH . 'head.php';
require_once VIEWS_PATH . 'header.php';
require_once VIEWS_PATH . 'post/post_container.php';



require_once VIEWS_PATH . 'footer.php';
?>