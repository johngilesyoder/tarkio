<?php /* Template Name: Invest */ get_header(); ?>

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
							Tarkio Fund (TARKX) is available on the following platforms with a minimum investment of $1,000 IRA or 2,500 non-retirement (brokerage trade fees apply).
						</div>
					</div>
					<div class="platforms">
						<a href="#" target="_blank" class="platform">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/broker-charles-schwab.jpg">
							<span class="broker-name">Charles Schwab<i class="material-icons">launch</i></span>
						</a>
						<a href="#" target="_blank" class="platform">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/broker-td-ameritrade.jpg">
							<span class="broker-name">TD Ameritrade<i class="material-icons">launch</i></span>
						</a>
						<a href="#" target="_blank" class="platform">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/broker-vanguard.jpg">
							<span class="broker-name">Vanguard<i class="material-icons">launch</i></span>
						</a>
						<a href="#" target="_blank" class="platform">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/broker-scottrade.jpg">
							<span class="broker-name">Scottrade<i class="material-icons">launch</i></span>
						</a>
						<a href="#" target="_blank" class="platform">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/broker-etrade.jpg">
							<span class="broker-name">E*Trade<i class="material-icons">launch</i></span>
						</a>
					</div>
				</section>
				<section class="managed-by">
					<h2 class="section-title">Managed by Front Street Capital Management, Inc.</h2>
					<p class="section-summary">
						TARKX can be purchased directly with no minimum (and no brokerage fees) by completing the applicable form below and returning it by mail to Tarkio Fund's third party administrator.
					</p>
					<div class="how-to-apply">
						<div class="applications">
							<a href="#" target="_blank" class="btn btn-primary btn-lg">Non-IRA Application<i class="material-icons">picture_as_pdf</i></a>
							<a href="#" target="_blank" class="btn btn-primary btn-lg">IRA Application<i class="material-icons">picture_as_pdf</i></a>
							<a href="#" target="_blank" class="btn btn-primary btn-lg">IRA Transfer<i class="material-icons">picture_as_pdf</i></a>
						</div>
						<div class="form-address">
							<address>
								<strong>c/o Mutual Shareholder Services</strong><br>
								8000 Town Centre Drive, Suite 400<br>
								Broadview Heights, OH 44147<br>
							</address>
							<span class="phone-number">Phone: <a href="tel:8667383629">(866) 738-3629</a></span>
						</div>
					</div>
					<small class="disclaimer">
						Please consider the investment objectives, risks, charges and expenses of the fund carefully before investing.  The investment return and principal value of an investment will fluctuate so that an investor’s shares, when redeemed, may be worth more or less than their original cost.
					</small>
					<div class="section-follow-up">
						<p>For a prospectus containing this and other information, please click here or call (866) 738-3629.  Please read the prospectus containing this and other information carefully before investing.</p>
					</div>
				</section>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
