<?php 

/* Theme functions code */
function mywigetfun() {
    
    
        register_sidebar(
        array(
            'name'          => __('Primary Sidebar','html2wp'),
            'id'            => 'main-sidebar',
            'description'   =>"for sidebar area1",
            'before_widget' => '<div class="footer-text">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        )
    );

        register_sidebar(
        array(
            'name'          => __('Footer1','html2wp'),
            'id'            => 'f1',
            'description'   =>"for footer area1",
            'before_widget' => '<div class="footer-text">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        )
    );
         register_sidebar(
        array(
            'name'          => __('Footer2','html2wp'),
            'id'            => 'f2',
            'description'   =>"for footer area2",
            'before_widget' => '<div class="footer-text">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        )
    );
         register_sidebar(
        array(
            'name'          => __('Footer3','html2wp'),
            'id'            => 'f3',
            'description'   =>"for footer area3",
            'before_widget' => '<div class="footer-text">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        )
    );

    

    

    
}

add_action( 'widgets_init', 'mywigetfun' );
include get_template_directory() . '/inc/portfolio.php';


function html2wp_theme_setup() {
 
    
    load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    add_image_size( 'home-feature', 680, 400,array('center','center'));
    add_image_size( 'single-img', 800, 240,array('center','center'));
    
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'myfirsttheme' )
       ) );
}

add_action( 'after_setup_theme', 'html2wp_theme_setup' );




function htlm2wp_script(){
	wp_enqueue_style('style',get_stylesheet_uri());

}

add_action('wp_enqueue_scripts','htlm2wp_script')



?>
