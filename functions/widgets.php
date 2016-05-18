<?php

function vcode_widgets_init() {

  	/*
    Sidebar (one widget area)
     */
    register_sidebar( array(
        'name' => __( 'Sidebar', 'vcode' ),
        'id' => 'sidebar-widget-area',
        'description' => __( 'The sidebar widget area', 'vcode' ),
        'before_widget' => '<section class="%1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );

  	/*
    Footer (three widget areas)
     */
    register_sidebar( array(
        'name' => __( 'Footer', 'vcode' ),
        'id' => 'footer-widget-area',
        'description' => __( 'The footer widget area', 'vcode' ),
        'before_widget' => '<div class="%1$s %2$s col-sm-4">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );

}
add_action( 'widgets_init', 'vcode_widgets_init' );
