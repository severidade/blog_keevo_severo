<article>
  <div class="post">
    <h1 class="post_title"><?php the_title(); ?></h1>
    <div class="post_img_container">
      <?php the_post_thumbnail('thumbnail'); ?>
    </div>
    <div class="post_text_container">
      <p>Publicado em <?php echo get_the_date(); ?> por <?php the_author() ?></p>
      <p>Categorias: <?php the_category(' '); ?> </p>
      <p><?php the_tags('Tags: ', ', '); ?></p>
      <p><?php the_excerpt(); ?></p>
    </div>
  </div>
</article>