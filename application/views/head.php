<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0" />
        <title><?php
            if (isset($post->post_row['post_title'])) {
                print $post->post_row['post_title'];
            } elseif (isset($post->rows_curr_cat_name['category_name'])) {
                print $post->rows_curr_cat_name['category_name'];
            } else {
                print "NewsCMS";
            }
            ?></title>
        <?php
        if (isset($post->post_row['post_title'])) {
            $keywords = $post->post_row['meta_keywords'];
            $description = $post->post_row['meta_description'];
            ?>
            <meta name="description" content="<?php print $description; ?>">
            <meta name="keywords" content="<?php print $keywords; ?>">
            <?php
        }
        ?>
        <link rel="stylesheet" type="text/css" media="all" href="public/css/normalizer.css" />
        <link rel="stylesheet" type="text/css" media="all" href="public/css/main.css" />
        <link rel="stylesheet" type="text/css" media="all" href="public/css/font-awesome.min.css" />
        <link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    </head>