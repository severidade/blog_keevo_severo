<?php get_header() ?>
<main>
  <section class="blog_posts">
    <h2>Posts do Blog</h2>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article>
        <div class="post">
          <h1><?php the_title(); ?></h1>
        <div class="container_post_img">
          <?php the_post_thumbnail('thumbnail'); ?>
        </div>
          <p>Publicado em <?php echo get_the_date(); ?> por <?php the_author() ?></p>
          <p>Categorias: <?php the_category(' '); ?> </p>
          <p><?php the_tags('Tags: ', ', '); ?></p>
          <p><?php the_excerpt(); ?></p>
        </div>
      </article>
    <?php endwhile;
      else:
    ?>
      <p>Não Há posts</p>
    <?php endif; ?>
  </section>
</main>
<?php get_footer() ?>