<article class="noticia_destaque">
  <div class="img_container_destaque">
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('tumbnail'); ?>
    </a>
  </div>
  <div class="text_container_destaque_principal">
    <h1 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <p>por <samp><?php the_author_posts_link() ?></samp> em <span><?php the_category(' '); ?></span> Tags: <span><?php the_tags('Tags: ', ', '); ?></span> </p>
    <p>Publicado em <?php echo get_the_date(); ?></p>
    <p><?php the_excerpt(); ?></p>
  </div>
</article>