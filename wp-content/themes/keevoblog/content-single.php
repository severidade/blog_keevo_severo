<article class="post_single">
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
</article>