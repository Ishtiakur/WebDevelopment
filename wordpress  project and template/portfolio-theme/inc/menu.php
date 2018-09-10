<?php
    //navigation menu
        function navigation_menu(){
            register_nav_menu('main_menu',__( 'Header Menu' ));

        }
        add_action( "after_setup_theme", "portfolio_theme_setup");


    //nav menu link attributes  for adding external classes..................
    function add_class_to_all_menu_anchors( $atts ) {
        $atts['class'] = 'nav-link js-scroll-trigger';

        return $atts;
    }
    add_filter( 'nav_menu_link_attributes', 'add_class_to_all_menu_anchors', 10 );

    // menu css item float left 
    function alpha_menu_item_css($classes, $item){
        $classes[] = "list-inline-item";
        return $classes;
    }
    add_filter( "nav_menu_css_class", "alpha_menu_item_css", 10, 2 ); 

    ?>