<?php get_header(); ?>
<main>
  <section class="container_home">
    <section class="home_blog_posts">
      <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3, // Lista os tres último posts
        );
        $destaque = new WP_Query($args);

        if ($destaque->have_posts()):
          $count = 1;
          while ($destaque->have_posts()):
            $destaque->the_post();
            
            if ($count === 1) {
              // Use um template diferente para o post mais recente (destaque principal)
              get_template_part('content', 'destaque-principal');
            } else {
              // Use o template padrão para os outros posts
              get_template_part('content', 'destaque');
            }
            
            $count++;
          endwhile;
        endif;
      ?>
    </section>
  </section>
</main>
<?php get_footer(); ?>
