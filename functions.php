<?php function bronnen() {
 wp_enqueue_script('Javascripts', get_theme_file_uri('/js/scripts.js'), NULL, '1.0', true);
 wp_enqueue_style('mijnGooglefonts','//fonts.googleapis.com/css?family=Roboto&display=swap');
 wp_enqueue_style('style', get_stylesheet_uri());
 }
 add_action('wp_enqueue_scripts', 'bronnen');
 register_nav_menus( array (
 'hoofd' => __('Hoofd menu'),
 'footer' => __('Footer menu')
 ));
function themaKevin_widgets() {
   register_sidebar( array(
    'name'          => __( ' Widget aside' ),
    'id'            => (' widget_aside'),    
    'description'   => (' Hier de widgets voor de aside plaatsen'),
    'before_title'  => ' <h4 class="widgettitel">',
    'after_title'   => ' </h4>'
  ) );
}
add_action('widgets_init', 'themaKevin_widgets');
?>
