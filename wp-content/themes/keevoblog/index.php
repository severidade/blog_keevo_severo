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
          <div class="logo"><h1>Logo do Blog</h1> </div>
        </div>
        <nav class="menu_area">
          <div class="menu">
            <?php wp_nav_menu( array( 'theme_location' => 'meu_menu_principal' )); ?>
          </div>
        </nav>
      </header>

      <main>
        <section class="hero">hero</section>
        <section class="about">
          <h2>sobre o blog</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur eum itaque quidem ad maiores facilis ipsum vitae dicta ex, voluptate, quaerat officiis molestias obcaecati veniam hic ullam nostrum modi tempore</p>
        </section>
        <section class="blog_posts">
          lista dos posts do blog
        </section>
      </main>

      <footer>
        <div class="social_links">
          <ul>
            <li><a href="#" target="_blank">Facebook</a></li>
            <li><a href="#" target="_blank">Instagram</a></li>
            <li><a href="#" target="_blank">Linkedin</a></li>
            <li><a href="#" target="_blank">Youtube</a></li>
          </ul>
        </div>
        <div class="autor"><p>Desenvolvido por <a href="https://www.linkedin.com/in/severidade/" target="_blank">severo</a></p></div>
      </footer>
    </div>
	</body>
</html>