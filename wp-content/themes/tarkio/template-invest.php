<?php /* Template Name: Invest */
	get_header();
	$shareholders_phone = get_field('shareholder_phone_number', 'option');
  $shareholders_phone_unformatted = preg_replace('/\D+/', '', $shareholders_phone);
?>


<main role="main">

	<!-- Masthead -->
	<!-- =================================== -->
	<?php get_template_part( 'includes/page-masthead' ); ?>

	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-10 col-xl-8">
				<section class="platforms-card section">
					<div class="platforms-card-header">
						<img class="tarkio-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/tarkio-fund-logo.jpg" alt="Tarkio Fund Logo">
						<div class="platforms-summary">
							<?php the_field('brokers_summary'); ?>
						</div>
					</div>
					<div class="platforms">
						<?php while( have_rows('brokers') ): the_row();
							// vars
							$name = get_sub_field('broker_name');
							$logo = get_sub_field('broker_logo');
							?>
							<div class="platform">
								<img src="<?php echo $logo['url']; ?>">
								<span class="broker-name"><?php echo $name; ?></span>
							</div>
						<?php endwhile; ?>
					</div>
				</section>
				<section class="managed-by">
					<h2 class="section-title"><?php the_field('managed_by_title'); ?></h2>
					<p class="section-summary">
						<?php the_field('managed_by_summary'); ?>
					</p>
					<div class="how-to-apply">
						<div class="applications">
							<?php while( have_rows('application_buttons') ): the_row();
								// vars
								$button_text = get_sub_field('application_button_title');
								$button_link = get_sub_field('application_button_link');
								?>
								<a href="<?php echo $button_link; ?>" target="_blank" class="btn btn-primary btn-lg"><?php echo $button_text; ?><i class="material-icons">picture_as_pdf</i></a>
							<?php endwhile; ?>
						</div>
						<div class="form-address">
							<address>
								<?php the_field('shareholders_address', 'option'); ?>
							</address>
							<span class="phone-number">Phone: <a href="tel:<?php echo $shareholders_phone_unformatted; ?>"><?php echo $shareholders_phone; ?></a></span>
						</div>
					</div>
					<small class="disclaimer"><?php the_field('managed_by_disclaimer'); ?></small>
					<div class="section-follow-up">
						<p><?php the_field('managed_by_follow_up'); ?></p>
					</div>
				</section>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
