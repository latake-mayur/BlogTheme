<?php

  register_nav_menus([
    "Primary_menu" => ("main menu")
  ]);


  
 


function mytheme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mytheme_setup');


?>