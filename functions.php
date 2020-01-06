<?php 

function bttg_resources() {

    
     wp_enqueue_style('bootstrap-min-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css', array());
     wp_enqueue_style('font-roboto-condensed', 'https://fonts.googleapis.com/css?family=Roboto+Condensed');
     wp_enqueue_style('font-roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,900');
     wp_enqueue_style( 'style', get_stylesheet_uri(  ));
     wp_enqueue_script('jquery.min.js', get_template_directory_uri(  ).'/jquery.min' );
     wp_enqueue_script('main.js', get_template_directory_uri(  ).'/main.js',array(), null, true); // the 'all'/true at the end made it work properly
     wp_enqueue_script('popper.min.js', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js');
     wp_enqueue_script('bootstrap.min.js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js' );

}

add_action('wp_enqueue_scripts', 'bttg_resources');

//Navigation Menus
register_nav_menus(array(

    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
 
));

?>