<?php /* Template Name: Home */ get_header(); ?>

<!-- Hero -->
<!-- =================================== -->
<?php get_template_part( 'includes/home/hero' ); ?>

  <main role="main">

    <!-- Fund Overview -->
    <!-- =================================== -->
    <?php get_template_part( 'includes/home/fund-overview' ); ?>

    <!-- FSC -->
    <!-- =================================== -->
    <?php get_template_part( 'includes/home/fund-advisor' ); ?>

    <!-- Performance -->
    <!-- =================================== -->
    <?php get_template_part( 'includes/home/performance' ); ?>

    <!-- Disclaimer -->
    <!-- =================================== -->
    <?php get_template_part( 'includes/home/disclaimer' ); ?>

  </main>

<?php get_footer(); ?>
