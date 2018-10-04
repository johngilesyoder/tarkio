<?php get_header(); ?>

<main role="main" aria-label="Content">
	<!-- Masthead -->
	<!-- =================================== -->
	<?php get_template_part( 'includes/page-masthead' ); ?>

	<div class="container-fluid">
		<div class="row justify-content-between">
			<div class="col-8">

				<h1><?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?></h1>

				<div class="article-loop">
					<?php get_template_part( 'loop' ); ?>
				</div>

				<?php bootstrap_pagination(); ?>

			</div>
			<div class="col-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>
