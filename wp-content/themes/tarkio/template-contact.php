<?php /* Template Name: Contact */ get_header(); ?>

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
								c/o Mutual Shareholder Services<br>
								8000 Town Centre Drive, Suite 400<br>
								Broadview Heights, OH 44147<br>
							</address>
							<span class="phone-number">Phone: <a href="tel:8667383629">(866) 738-3629</a></span>
						</div>
					</div>

					<div class="col-md-4">
						<div class="entity">
							<h3 class="card-title">Distributor</h3>
							<strong>Arbor Court Capital, LLC</strong>
							<address>
								8000 Town Centre Drive, Suite 400<br>
								Broadview Heights, OH 44147
							</address>
							<span class="phone-number">Phone: <a href="tel:4409220066">440-922-0066</a> Ext. 123</span>
						</div>
					</div>

					<div class="col-md-4">
						<div class="entity">
							<h3 class="card-title">Advisor to the Fund</h3>
							<strong>Front Street Capital Management, Inc.</strong>
							<address>
								218 East Front Street, Suite 205<br>
								Missoula, MT 59802
							</address>
							<span class="phone-number">​Phone: <a href="tel:4065410130">(406) 541-0130</a></span>
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
