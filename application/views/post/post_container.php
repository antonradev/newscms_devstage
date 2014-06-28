<div class="page">

    <div class="container">
        <div class="content">
            <div class="content-inner">
                
                <div class="breadcrumb">
                    <a href="/">Home</a> &raquo; 
                    <a href="category.php?id=<?php print $post->post_row['category_id']; ?>"><?php print $post->rows_post_category['category_name']; ?></a> &raquo; 
                    <?php print $post->post_row['post_title']; ?>
                </div><!-- end div.breadcrumb -->

                <div class="publication">
                    <h1><?php print $post->post_row['post_title']; ?></h1>
                    <div class="published-date">
                        <?php print $post->post_row['post_published_date']; ?>
                        <div class="post-views">Post reads: <?php print $post->post_row['post_views']; ?></div>
                        <div class="clearfix"></div>
                    </div><!-- end div.published-date -->
                    <div class="main-photo">
                        <img src="public/uploads/images/<?php print $post->post_row['post_photo']; ?>.jpg" alt="">
                        <span class="photo-caption">
                            <?php print $post->post_row['post_photo_caption']; ?> 
                        </span><!-- end div.photo-caption -->
                    </div><!-- end div.main-photo -->
                    <div class="publication-text">
                        <h2 class="subtitle"><?php print $post->post_row['post_subtitle']; ?></h2>
                        <?php print $post->post_row['post_content']; ?>
                    </div><!-- end div.publication-text -->
                </div><!-- end div.publication -->

                <div class="comments">
                    <h4>Comments to this post: 4</h4>

                    <div class="post-comment">
                        <form action="" method="post">
                            <input type="text" placeholder="Your name" class="text-field">
                            <textarea placeholder="Your comment"></textarea>
                            <input type="submit" class="button" value="Post comment">
                        </form>
                    </div><!-- end div.post-comment -->

                    <div class="comment">
                        <div class="name">John Doe</div>
                        <div class="commented-time">
                            February 11, 2014 13:57
                        </div><!-- end div.commented-time -->
                        <div class="comment-text">
                            Hello guys! I think this topic has very deep 
                            problem and I fully support the idea and the author
                            opinion.
                        </div><!-- end div.comment-text -->
                    </div><!-- end div.comment -->

                    <div class="comment">
                        <div class="name">John Doe</div>
                        <div class="commented-time">
                            February 11, 2014 13:57
                        </div><!-- end div.commented-time -->
                        <div class="comment-text">
                            Hello guys! I think this topic has very deep 
                            problem and I fully support the idea and the author
                            opinion.
                        </div><!-- end div.comment-text -->
                    </div><!-- end div.comment -->

                    <div class="comment">
                        <div class="name">John Doe</div>
                        <div class="commented-time">
                            February 11, 2014 13:57
                        </div><!-- end div.commented-time -->
                        <div class="comment-text">
                            Hello guys! I think this topic has very deep 
                            problem and I fully support the idea and the author
                            opinion.
                        </div><!-- end div.comment-text -->
                    </div><!-- end div.comment -->



                </div><!-- end div.comments -->



            </div><!-- end div.content-inner -->
        </div><!-- end div.content -->
        <?php
        include_once VIEWS_PATH . 'sidebar/sidebar.php';
        ?>
        <div class="clearfix"></div>