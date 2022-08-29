<?php


	//  Testimonial Slider 
    function dany_man_testimonial() {
        $labels = array(
            'name'                  => __( 'Add Feedback Item',  'dany-man' ),
            'singular_name'         => __( 'Testimonial Slider',  'dany-man' ),
            'menu_name'             => __( 'Testimonial',  'dany-man' ),
            'name_admin_bar'        => __( 'Testimonial',  'dany-man' ),
            'add_new'               => __( 'Add Feedback', 'dany-man' ),
            'add_new_item'          => __( 'Add New Feedback', 'dany-man' ),
            'new_item'              => __( 'New Feedback', 'dany-man' ),
            'edit_item'             => __( 'Edit Feedback', 'dany-man' ),
            'view_item'             => __( 'View Feedback', 'dany-man' ),
            'all_items'             => __( 'All Feedbacks', 'dany-man' ),
        );
     
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'menu_icon' 		 => 'dashicons-testimonial',
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'feedback' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'thumbnail'),
        );
     
        register_post_type( 'testimonial-slider', $args );
    }
    add_action( 'init', 'dany_man_testimonial' );
    
        // Portfolios 
    function dany_man_projects() {
        $labels = array(
            'name'                  => __( 'Add Portfolio Item',  'dany-man' ),
            'singular_name'         => __( 'Portfolios',  'dany-man' ),
            'menu_name'             => __( 'Portfolios',  'dany-man' ),
            'name_admin_bar'        => __( 'Portfolio',  'dany-man' ),
            'add_new'               => __( 'Add Portfolio', 'dany-man' ),
            'add_new_item'          => __( 'Add New Portfolio', 'dany-man' ),
            'new_item'              => __( 'New Portfolio', 'dany-man' ),
            'edit_item'             => __( 'Edit Portfolio', 'dany-man' ),
            'view_item'             => __( 'View Portfolio', 'dany-man' ),
            'all_items'             => __( 'All Portfolios', 'dany-man' ),
        );
     
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'menu_icon' 		 => 'dashicons-portfolio',
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'portfolios' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    
             // This is where we add taxonomies to our CPT
             'taxonomies' => array('category', 'post_tag'),
        );
     
        register_post_type( 'portfolios', $args );
    
    }
    add_action( 'init', 'dany_man_projects' );
    
        // Service Block 
    function dany_man_services() {
        $labels = array(
            'name'                  => __( 'Add Service Item',  'dany-man' ),
            'singular_name'         => __( 'Service',  'dany-man' ),
            'menu_name'             => __( 'Services',  'dany-man' ),
            'name_admin_bar'        => __( 'Service',  'dany-man' ),
            'add_new'               => __( 'Add Service', 'dany-man' ),
            'add_new_item'          => __( 'Add New Service', 'dany-man' ),
            'new_item'              => __( 'New Service', 'dany-man' ),
            'edit_item'             => __( 'Edit Service', 'dany-man' ),
            'view_item'             => __( 'View Service', 'dany-man' ),
            'all_items'             => __( 'All Services', 'dany-man' ),
        );
     
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'menu_icon' 		 => 'dashicons-book',
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'services' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    
             // This is where we add taxonomies to our CPT
             'taxonomies' => array('category', 'post_tag'),
        );
     
        register_post_type( 'services', $args );
    
    }
    add_action( 'init', 'dany_man_services' );
    
        // Counter Box 
    function dany_man_countdown_box() {
        $labels = array(
            'name'                  => __( 'Add Count Down Item',  'dany-man' ),
            'singular_name'         => __( 'countdown',  'dany-man' ),
            'menu_name'             => __( 'Counterup',  'dany-man' ),
            'name_admin_bar'        => __( 'Counterup',  'dany-man' ),
            'add_new'               => __( 'Add Countdown', 'dany-man' ),
            'add_new_item'          => __( 'Add New Countdown', 'dany-man' ),
            'new_item'              => __( 'New Countdown', 'dany-man' ),
            'edit_item'             => __( 'Edit Countdown', 'dany-man' ),
            'view_item'             => __( 'View Countdown', 'dany-man' ),
            'all_items'             => __( 'All Countdowns', 'dany-man' ),
        );
     
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'menu_icon' 		 => 'dashicons-controls-repeat',
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'countdown' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'            => array( 'title', 'excerpt', 'custom-fields', ),
    
        );
     
        register_post_type( 'counter', $args );
    
    }
    add_action( 'init', 'dany_man_countdown_box' );
    















