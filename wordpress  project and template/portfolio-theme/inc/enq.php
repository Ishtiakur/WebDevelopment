<?php 
        // version selection  for removing caching 
        if(site_url() == 'http://localhost/wp_theme'){
            define("version", time());
        }else{
            define("version", wp_get_theme( ) -> get('Version') ); 
        }
//connect the assets of the portfolio theme..............
    function portfolio_theme_assets(){
        wp_enqueue_style( "bootstrap", get_theme_file_uri( "/vendor/bootstrap/css/bootstrap.min.css", null, version ));
        wp_enqueue_style( "font_awesome", get_theme_file_uri( "/vendor/font-awesome/css/font-awesome.min.css", null, version  ));

        wp_enqueue_style( "font_monsterrat", "//fonts.googleapis.com/css?family=Montserrat:400,700", null, version );
        wp_enqueue_style( "font_kaushan", "//fonts.googleapis.com/css?family=Kaushan+Script", null, version );
        wp_enqueue_style( "font_dorid", "//fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic", null, version );
        wp_enqueue_style( "font_roboto", "//fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700", null, version );
        wp_enqueue_style( "agency_css", get_theme_file_uri( "/css/agency.css", null, version  ));
        wp_enqueue_style( "style_css", get_stylesheet_uri(), null, version  );


        wp_enqueue_script('agency_jquey', get_theme_file_uri( "/vendor/jquery/jquery.min.js" ));
        wp_enqueue_script( "jquery_easing_js", get_theme_file_uri("/vendor/jquery-easing/jquery.easing.min.js"), array('agency_jquey'), null, true );

        wp_enqueue_script( "bootstap_js", get_theme_file_uri("/vendor/bootstrap/js/bootstrap.bundle.min.js"), array('agency_jquey'), null, true );
       
        wp_enqueue_script( "B_validation_js", get_theme_file_uri("/js/jqBootstrapValidation.js"), array('agency_jquey'), null, true );
        wp_enqueue_script( "contact_js", get_theme_file_uri("/js/contact_me.js"), array('agency_jquey'), null, true );

        wp_enqueue_script( "agency_js", get_theme_file_uri("/js/agency.min.js"), array('agency_jquey'), null, true );

    }
    add_action( "wp_enqueue_scripts", "portfolio_theme_assets" );

    ?>