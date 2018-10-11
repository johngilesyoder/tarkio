<!doctype html>
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" <?php language_attributes(); ?>>
  <head <?php do_action( 'add_head_attributes' ); ?>>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96122061-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-96122061-2');
    </script>

    <!-- Title -->
    <!-- =================================== -->
    <title><?php wp_title(''); ?></title>

    <!-- Styles -->
    <!-- =================================== -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon.png" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/icons/touch.png" rel="apple-touch-icon-precomposed">

    <!-- Meta -->
    <!-- =================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- Wordpress Generated -->
    <!-- =================================== -->
    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <?php if ( !is_404() ) : ?>
      <!-- Quick Access -->
      <!-- =================================== -->
      <?php get_template_part( 'includes/header-nav' ); ?>

    <?php endif; ?>
