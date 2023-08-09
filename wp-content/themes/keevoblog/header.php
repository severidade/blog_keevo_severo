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
        <h1>Keevo | Blog</h1>
      </a>
      <div id="menu-control-open">hamburger</div>  
    </div>
    <nav id="menu_area">
      <div id="menu-control-close">Fechar</div>
      <?php wp_nav_menu( array( 'theme_location' => 'meu_menu_principal' )); ?>
    </nav>
  </header>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Alvo
      const menuControlOpen = document.getElementById("menu-control-open");
      const menuControlClose = document.getElementById("menu-control-close");

      // Escutadores
      menuControlOpen.addEventListener("click", togleMenu)
      menuControlClose.addEventListener("click", togleMenu)


      function togleMenu(event) {
        document.getElementById("menu_area").classList.toggle("active");
        document.getElementsByTagName("body")[0].classList.toggle("boqueiaScroll");
      }

      // closeModal.addEventListener('click', function() {
      //   successModal.style.display = 'none';
      // });
    });
  </script>