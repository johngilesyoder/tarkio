<?php /* Template Name: Press */ get_header(); ?>

<main role="main">

	<!-- Masthead -->
	<!-- =================================== -->
	<?php get_template_part( 'includes/page-masthead' ); ?>

	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-10 col-xl-8">
				<div class="alert alert-light">
					<div>
						<?php the_content(); ?>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-10 col-lg-8">
						<div class="articles">
							<?php while( have_rows('press_article') ): the_row();
								// vars
								$title = get_sub_field('article_title');
								$date = get_sub_field('article_date');
								$link = get_sub_field('article_link');
								?>
								<a href="<?php echo $link; ?>" class="article">
									<i class="material-icons">message</i>
									<div>
										<h3 class="article-title"><?php echo $title; ?></h3>
										<div class="article-info">
											<span class="date"><?php echo $date; ?></span>
											<span class="url"><?php echo $link; ?></span>
										</div>
										<span class="article-link">View the article<i class="material-icons">launch</i></span>
									</div>
								</a>
							<?php endwhile; ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
