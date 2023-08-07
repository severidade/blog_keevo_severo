<?php get_header(); ?>
<main>
  <section class="container_home">
    <section class="hero">hero</section>
    <section class="home_blog_posts">
      <h1>Esta é a home</h1>
      <div class="destaque">
        <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
          );
          $destaque = new WP_Query($args);

          if ($destaque->have_posts()):
            while ($destaque->have_posts()):
              $destaque->the_post();
        ?>
              <?php get_template_part('content', 'destaque'); ?>
        <?php
            endwhile;
          endif;
        ?>
      </div>
    </section>
  </section>
</main>
<?php get_footer(); ?>
