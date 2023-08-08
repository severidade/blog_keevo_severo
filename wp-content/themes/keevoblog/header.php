<!DOCTYPE html>
<html lang="pt-br">
	<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
  <title>keevo-Blog</title>
  <?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
<div class="container_blog">
  <header>
    <div class="container_logo">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
      <h1>Logo do Blog</h1>
    </a>
    </div>
    <nav class="menu_area">
      <?php wp_nav_menu( array( 'theme_location' => 'meu_menu_principal' )); ?>
    </nav>
  </header>