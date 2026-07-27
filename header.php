<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="container header-inner">
    <div class="branding">
      <a href="<?php echo esc_url(home_url('/')); ?>">Jumpymouse IT Career Services</a>
      <span>IT resumes, LinkedIn optimization, and career positioning</span>
    </div>
    <nav class="main-nav" aria-label="Primary navigation">
      <?php
      wp_nav_menu(array(
          'theme_location' => 'primary',
          'container' => false,
          'fallback_cb' => function() {
              echo '<ul>';
              echo '<li><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
              echo '<li><a href="' . esc_url(home_url('/whoami')) . '">whoami</a></li>';
              echo '<li><a href="' . esc_url(home_url('/services')) . '">Services</a></li>';
              echo '</ul>';
          }
      ));
      ?>
    </nav>
  </div>
</header>
<main>
