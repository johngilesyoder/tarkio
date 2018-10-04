<?php get_header(); ?>

	<body <?php body_class(); ?>>
    <!-- Google Analytics -->
    <!-- =================================== -->
    <?php get_template_part( 'includes/analyticstracking' ); ?>

    <div class="container-fluid">
			<div class="error-message">
				<h1>404</h1>
				<h2>Page not found</h2>
				<p>Unfortunately, we were unable to find that page or it does not exist.<br />Please <a href="/">return</a> to the home page.</p>
			</div>
			<div class="site-logo-wrapper">
				<!-- ==== Site Logo ==== -->
				<div class="site-logo">
					<a href="/">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/site-logo-full.png" alt="The Tarkio Fund">
          </a>
				</div>
			</div>
		</div>

		<?php wp_footer(); ?>

	</body>
</html>
