<article class="noticia_destaque">
  <div class="img_container_destaque">
    <?php the_post_thumbnail('large'); ?>
  </div>
  <div class="text_container_destaque">
    <h1 class="post_title"><?php the_title(); ?></h1>
    <p>por <samp><?php the_author() ?></samp> em <span><?php the_category(' '); ?></span> Tags: <span><?php the_tags('Tags: ', ', '); ?></span> </p>
    <p>Publicado em <?php echo get_the_date(); ?></p>
    <p><?php the_excerpt(); ?></p>
  </div>
</article>