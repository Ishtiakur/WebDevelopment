<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <title> <?php bloginfo( "title" ); ?></title>
    <?php wp_head(); ?>
    
  </head>

  <body <?php body_class(  ); ?> id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <?php
            if ( has_custom_logo(  )) {    ?>
               <a href="<?php bloginfo('home'); ?>"> 
                   <?php  the_custom_logo(); ?>
               </a>  
              
   <?php     }else{
          ?>    
             <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a>
          <?php  }
           
          ?>  
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
       
           <?php
              wp_nav_menu( array(
                'theme_lcoation' => 'main_menu',
                'menu_id'=>'',
                'menu_class'     => 'navbar-nav text-uppercase ml-auto',
                'fallback_cb'    => 'alpha_menu_item_css'
              ) );
           ?>
        </div>
      </div>
    </nav>
