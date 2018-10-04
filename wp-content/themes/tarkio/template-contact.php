<?php /* Template Name: Contact */ get_header(); ?>

	<main role="main">
		<div class="container-fluid">
			<h1 class="page-title"><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<div class="row">
				<div class="col-md-4">
					<div class="contact-info">
						<h4>CLUNEY PHOTO</h4>
						<span class="contact-name">Mark Cluney</span>
						<address>
							717 W Spruce Ave.<br>
							Missoula, MT 59802
						</address>
						<a class="email-address" href="mailto:mark@cluneyphoto.com">mark@cluneyphoto.com</a>
						<a class="phone-number" href="tel:14065403199">(406) 540-3199</a>
					</div>
				</div>
				<div class="col-md-8">

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php the_content(); ?>

						<div class="form-wrapper">
							<?php gravity_form( 1, false, false, false, '', false ); ?>
						</div>
					</article>

				<?php endwhile; ?>

				<?php else: ?>

					<article>

						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

					</article>

				</div>
			</div>

		<?php endif; ?>

		</div>
	</main>

<?php get_footer(); ?>
