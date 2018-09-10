<?php
function portfolio_theme_setup(){
       
    // adding custom-logo in portfolio theme
    add_theme_support( 'custom-logo', array(
        'height'      => 50,
        'width'       => 50,
        'flex-width'  => true,
        'header-text' => array( 'Portfolio Theme', 'The Portfolio theme' ),
    ) );
      
    //add cover photo  
    $default = array(
        'default-image'          => esc_url(get_template_directory_uri()).'../img/header-bg.jpg',
        'flex-height'            => false,
        'flex-width'             => false,
        'uploads'                => true,
        'random-default'         => false,
        'header-text'            => true,
        'default-text-color'     => '',
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
    );
} 
    add_theme_support( "custom-header", $default );    



function portfolio_theme_bootsrapping(){
        load_theme_textdomain( "portfolio" );
        add_theme_support( "post-thumbnails" );
        register_nav_menu( "topMenu", __("Top Menu", "portfolio") );
        // register_nav_menu( "FooterMenu", __("Footer Menu", "alpha") );
        
 }
 add_action( "after_setup_theme", "portfolio_theme_bootsrapping");

 


?>