<?php get_header() ?>
<main>
  <section class="post">
    <?php
      while(have_posts()): the_post();
        get_template_part('content', 'single');
      endwhile;
    ?>
  </section>
</main>
<?php get_footer() ?>