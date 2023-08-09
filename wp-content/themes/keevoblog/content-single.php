<!-- <article class="post_single">
  <div class="img_single_destaque">
    <?php the_post_thumbnail('large'); ?>
  </div>
  <header>
    <h1 class="post_title"><?php the_title(); ?></h1>
    <p>Publicado por <?php the_author_posts_link() ?> em <?php echo get_the_date(); ?></p>
    <p><?php the_category(' '); ?></p>
    <p>Tags: <span><?php the_tags('Tags: ', ', '); ?></span></p>
  </header>
  <div class="content">
    <?php the_content(); ?>
  </div>
</article> -->

<article class="destaque_principal">
  <div class="container_img">
    <div class="img_filter">
      <a href="<?php the_permalink(); ?>"></a>
      <?php the_post_thumbnail('large'); ?>
    </div>
    <div class="categoria_destaque_principal">
      <?php the_category(' '); ?>
    </div>
  </div>
  <div class="text_container_destaque_principal">
    <div class="footer_post">
      <p class="autor"><?php echo get_the_date(); ?> | Autor <?php the_author_posts_link() ?></p>
      <p class="tags"><?php the_tags('Tags: ', ', '); ?></p>
    </div>
    <div>
      <h1 class="post_title_interna"><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  </div>
</article>