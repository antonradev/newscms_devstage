<?php

class Post extends Category {

    public function show_featured_post() {

        $this->_db->query("SELECT * from posts WHERE featured = 1 LIMIT 1");
        $this->rows_posts = $this->_db->resultset();
        foreach ($this->rows_posts as $post_featured) {
            if ($post_featured['featured'] == 1) {
                include_once VIEWS_PATH . 'homepage/featured_publication.php';
            }
        }
    }

    public function show_current_post() {
        if (ctype_digit($_GET['id'])) {
            $post_id = $_GET['id'];
        } else {
            header('Location: http://newscms.dev/');
        }
        $this->_db->query("SELECT * from posts WHERE post_id = '$post_id'");
        $this->rows_current_post = $this->_db->single();
        $this->post_row = $this->rows_current_post;
        
        $category_id = $this->post_row['category_id'];

        $this->_db->query("SELECT category_name from categories WHERE category_id = '$category_id'");
        $this->rows_post_category = $this->_db->single();
        
    }
    
    
    public function show_current_category_name() {
        if (ctype_digit($_GET['id'])) {
            $category_id = $_GET['id'];
        } else {
            header('Location: http://newscms.dev/');
        }
        $this->_db->query("SELECT * from categories WHERE category_id = '$category_id'");
        $this->rows_current_category_name = $this->_db->single();
        
        $current_category_id = $this->rows_current_category_name['category_id'];


        $this->_db->query("SELECT category_name from categories WHERE category_id = '$current_category_id'");
        $this->rows_curr_cat_name = $this->_db->single();
        
    }
    

        public function category_box($category_id, $category_name) {
        $this->_db->query("SELECT * from posts WHERE category_id = '$category_id' ORDER by post_published_date DESC");
        $this->current_category_posts = $this->_db->resultset();

        $posts = array();

        foreach ($this->current_category_posts as $post) {
            if ($post['category_id'] === $category_id) {
                $posts[] = $post;
            }
        }

        include VIEWS_PATH . 'homepage/category_box.php';
    }

    public function category_boxes() {

        if (ctype_digit($_GET['id'])) {
            $category_id = $_GET['id'];
        } else {
            header('Location: http://newscms.dev/');
        }

        $this->_db->query("SELECT * from posts WHERE category_id = '$category_id' ORDER by post_published_date DESC LIMIT 10");
        $this->category_boxes_posts = $this->_db->resultset();

        $category_boxes_posts = array();

        foreach ($this->category_boxes_posts as $category_boxes_post) {
            if ($category_boxes_post['category_id'] === $category_id) {
                $category_boxes_posts[] = $category_boxes_post;
            }
            include VIEWS_PATH . 'categories/category_box.php';
        }

        if (count($this->category_boxes_posts) < 1) {
            header('Location: http://newscms.dev/');
        }
    }

}

?>
