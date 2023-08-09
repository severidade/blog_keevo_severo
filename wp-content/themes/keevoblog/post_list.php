<article class="destaque">
  <div class="container_img">
    <div class="img_filter">
      <a href="<?php the_permalink(); ?>"></a>
      <?php the_post_thumbnail('large'); ?>
    </div>
  </div>
  <div class="text_container_destaque">
    <div class="categoria_destaque">
      <?php the_category(' '); ?>
    </div>
    <a href="<?php the_permalink(); ?>">
      <h1 class="post_title"><?php the_title(); ?></h1>
      <?php the_excerpt(); ?>
    </a>
    <div class="footer_post">
      <p class="autor"><?php echo get_the_date(); ?> | Autor <?php the_author_posts_link() ?></p>
      <p class="tags"><?php the_tags('Tags: ', ', '); ?></p>
  </div>
</article>