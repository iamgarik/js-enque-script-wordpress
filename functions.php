<?php

add_action('wp_enqueue_scripts', function(){

  wp_register_script('my', get_stylesheet_directory_uri() . '/path/my.js', [], '1.0', true);

  wp_localize_script('my', 'ADMIN_STUFF', [
    'ajax_url' => admin_url('admin-ajax.php'),
    'nameparams' => 'valueparams'
  ]);

  wp_enqueue_script('my2', get_stylesheet_directory_uri() . '/path/my2.js', ['my'], '1.1', true);

});





// plugin stuff

add_action('wp_enqueue_scripts', function(){

  if(!is_home()){
    wp_deregister_script('my');
  }

});









