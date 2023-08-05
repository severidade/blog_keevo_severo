<?php
//Função para carregar os scripts
function carrega_scripts(){
  wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0', 'all');
  wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array('reset'), '1.0', 'all');
  wp_enqueue_script('template', get_template_directory_uri() . '/js/template.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'carrega_scripts');
