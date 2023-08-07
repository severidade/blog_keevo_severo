<?php get_header() ?>
<main>
  <!-- <section class="hero">hero</section>
  <section class="about">
    <h2>Posts do Blog</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur eum itaque quidem ad maiores facilis ipsum vitae dicta ex, voluptate, quaerat officiis molestias obcaecati veniam hic ullam nostrum modi tempore</p>
  </section> -->
  <section class="blog_posts">
    <h2>Posts do Blog</h2>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="post">
        <h1><?php the_title(); ?></h1>
        <p>Publicado em <?php echo get_the_date(); ?> por <?php the_author() ?></p>
        <p>Categorias: <?php the_category(' '); ?> </p>
        <p><?php the_tags('Tags: ', ', '); ?></p>
        <p><?php the_content(); ?></p>
      </div>
    <?php endwhile;
      else:
    ?>
      <p>Não Há posts</p>
    <?php endif; ?>
  </section>
</main>
<?php get_footer() ?>