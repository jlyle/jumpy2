<?php get_header(); ?>
<section class="page-hero">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
    <?php endwhile; endif; ?>
  </div>
</section>
<section class="page-content">
  <div class="container card">
    <?php if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif; ?>
  </div>
</section>
<?php get_footer(); ?>
