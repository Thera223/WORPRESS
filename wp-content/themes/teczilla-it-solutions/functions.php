<?php 

// teczilla it solutions css js enqueue

load_theme_textdomain('teczilla-it-solutions');


function teczilla_it_solutions_theme_sidebars() {

    // Blog Sidebar

    register_sidebar(array(
        'name' => esc_html__( 'Blog Sidebar', "teczilla-it-solutions"),
        'id' => 'top-sidebar',
        'description' => esc_html__( 'Sidebar on the blog layout.', "teczilla-it-solutions"),
        'before_widget' => '<div id="%1$s" class="sidebar-search sidebar-widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="sidebar-title"><h3 class="title semi-bold mb-20">',
        'after_title' => '</h3></div>',
    ));
        
}
add_action( 'widgets_init', 'teczilla_it_solutions_theme_sidebars' );



function teczilla_it_solutions_scripts_enqueue() {

    $avadanta_typography_show = get_theme_mod('teczilla_show_typography', 0);
    If($avadanta_typography_show == 0) {
      wp_enqueue_style('teczilla-font', 'https://fonts.googleapis.com/css2?family=Poppins&display=swap'); 
    }
    $teczilla_it_solutions_depend = array( 'bootstrap-min', 'aoff-canvas','owl-carousel','responsive','teczilla-main');
	wp_enqueue_style( 'teczilla-it-solutions-parent-style', get_template_directory_uri() . '/style.css',array('animate'));	
	wp_enqueue_style('teczilla-it-solutions-it-solutions',get_stylesheet_directory_uri() .'/css/it-solutions.css',$teczilla_it_solutions_depend);
	
}
add_action('wp_enqueue_scripts', 'teczilla_it_solutions_scripts_enqueue');



require( get_stylesheet_directory() . '/include/customizer.php');
require( get_stylesheet_directory() . '/include/template-function.php');