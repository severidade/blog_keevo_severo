<?php get_header() ?>
<main>
  <section class="blog_posts">
    <h2>Posts do Blog</h2>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php get_template_part('post_list'); ?>
    <?php endwhile;
      else:
    ?>
      <p>Não Há posts</p>
    <?php endif; ?>
  </section>
</main>
<?php get_footer() ?>