<?php

function theBlog_custom_post (){

    $BlogPost_label = array(
        'name'              => __('blog post', 'textdomain'),
        'singular_name'     => __('blog post', 'textdomain'),
        'add_new'           => __('add blog post', 'textdomain'),
        'add_new_item'   => __('Add New Blog', 'textdomain'),
        'edit_item'         =>__('edit blog post', 'textdomain'),
        'all_items'         =>__('blog post', 'textdomain')
    );
    $BlogPost_args = array(
        'labels'        => $BlogPost_label,
        'public'        => true,
        'capability_type' => 'post',
        'show_ui'       => true,
        'taxonomies'    => array('post_tag', 'category'),
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('BlogPost', $BlogPost_args);

    $latestPost_label = array(
        'name'              => __('Latest Post', 'textdomain'),
        'singular_name'     => __('Latest Post', 'textdomain'),
        'add_new'           => __('add Latest Post', 'textdomain'),
        'add_new_item'   => __('Add Latest Post', 'textdomain'),
        'edit_item'         =>__('edit Latest Post', 'textdomain'),
        'all_items'         =>__('Latest Post', 'textdomain')
    );
    $latestPost_args = array(
        'labels'        => $latestPost_label,
        'public'        => true,
        'capability_type' => 'post',
        'show_ui'       => true,
        'taxonomies'    => array('post_tag', 'category'),
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('LatestPost', $latestPost_args);

    $featuredPost_label = array(
        'name'              => __('featured Post', 'textdomain'),
        'singular_name'     => __('featured Post', 'textdomain'),
        'add_new'           => __('add featured Post', 'textdomain'),
        'add_new_item'   => __('Add featured Post', 'textdomain'),
        'edit_item'         =>__('edit featured Post', 'textdomain'),
        'all_items'         =>__('featured Post', 'textdomain')
    );
    $featuredPost_args = array(
        'labels'        => $featuredPost_label,
        'public'        => true,
        'capability_type' => 'post',
        'show_ui'       => true,
        'taxonomies'    => array('post_tag', 'category'),
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('featuredPost', $featuredPost_args);

    // content__sidebar
    $ContentsidePost_label = array(
        'name'              => __('Contentside Post', 'textdomain'),
        'singular_name'     => __('Contentside Post', 'textdomain'),
        'add_new'           => __('add Contentside Post', 'textdomain'),
        'add_new_item'   => __('Add Contentside Post', 'textdomain'),
        'edit_item'         =>__('edit Contentside Post', 'textdomain'),
        'all_items'         =>__('Contentside Post', 'textdomain')
    );
    $ContentsidePost_args = array(
        'labels'        => $ContentsidePost_label,
        'public'        => true,
        'capability_type' => 'post',
        'show_ui'       => true,
        'taxonomies'    => array('post_tag', 'category'),
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('ContentsidePost', $ContentsidePost_args);


}

add_action('init', 'theBlog_custom_post');




