

<?php

function theBlog_assets(){
    wp_enqueue_style('theBlog-style', get_template_directory_uri() . './css/main.css' , microtime());
    
}

add_action('wp_enqueue_scripts' ,'theBlog_assets');

