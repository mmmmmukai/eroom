<?php

 register_nav_menu('mainmenu', 'メインメニュー');

 /**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

  register_sidebar( array(
    'name' => 'category_sidebar',
    'id' => 'category_sidebar',
  ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

?>
