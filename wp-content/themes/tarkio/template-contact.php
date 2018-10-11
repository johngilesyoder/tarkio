<?php /* Template Name: Contact */
	get_header();
  $advisor_phone = get_field('advisor_phone_number', 'option');
  $advisor_phone_unformatted = preg_replace('/\D+/', '', $advisor_phone);
	$shareholders_phone = get_field('shareholder_phone_number', 'option');
  $shareholders_phone_unformatted = preg_replace('/\D+/', '', $shareholders_phone);
	$distributor_phone = get_field('distributor_phone_number', 'option');
  $distributor_phone_unformatted = preg_replace('/\D+/', '', $distributor_phone);
?>

<main role="main">

	<!-- Masthead -->
	<!-- =================================== -->
	<?php get_template_part( 'includes/page-masthead' ); ?>

	<div class="container-fluid">

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="row">

					<div class="col-md-4">
						<div class="entity">
							<h3 class="card-title">Shareholder Inquiries</h3>
							<strong>Tarkio Fund</strong>
							<address>
								<?php the_field('shareholders_address', 'option'); ?>
							</address>
							<span class="phone-number">Phone: <a href="tel:<?php echo $shareholders_phone_unformatted; ?>"><?php echo $shareholders_phone; ?></a></span>
						</div>
					</div>

					<div class="col-md-4">
						<div class="entity">
							<h3 class="card-title">Distributor</h3>
							<strong>Arbor Court Capital, LLC</strong>
							<address>
								<?php the_field('distributor_address', 'option'); ?>
							</address>
							<span class="phone-number">Phone: <a href="tel:<?php echo $distributor_phone_unformatted; ?>"><?php echo $distributor_phone; ?></a> Ext. 123</span>
						</div>
					</div>

					<div class="col-md-4">
						<div class="entity">
							<h3 class="card-title">Advisor to the Fund</h3>
							<strong>Front Street Capital Management, Inc.</strong>
							<address>
								<?php the_field('advisor_address', 'option'); ?>
							</address>
							<span class="phone-number">​Phone: <a href="tel:<?php echo $advisor_phone_unformatted; ?>"><?php echo $advisor_phone; ?></a></span>
							<span class="website">Website: <a href="https://frontstreetcap.com">frontstreetcap.com</a></span>
						</div>
					</div>

				</div>

			</article>

		<?php endwhile; ?>

		<?php else: ?>

			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>

		<?php endif; ?>

	</div>
</main>

<?php get_footer(); ?>
