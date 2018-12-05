<?php /* Template Name: Shareholder Letters */ get_header(); ?>

<main role="main">

	<!-- Masthead -->
	<!-- =================================== -->
	<?php get_template_part( 'includes/page-masthead' ); ?>

	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-10 col-xl-8">
				<div class="shareholder-documents">
					<div class="tab-content" id="myTabContent">

						<div class="tab-pane show active fade" id="letters" role="tabpanel" aria-labelledby="letters-tab">
							<?php while( have_rows('shareholder_document', 153) ): the_row();
								// vars
								$title = get_sub_field('shareholder_document_title');
								$description = get_sub_field('shareholder_document_description');
								$date = get_sub_field('shareholder_document_date');
								$file = get_sub_field('shareholder_document_file');
								$type = get_sub_field('shareholder_document_type');
								?>
								<?php if( $type == 'Letter') : ?>
									<a href="<?php echo $file; ?>" class="report">
										<div class="icon">
											<i class="material-icons">insert_drive_file</i>
										</div>
										<div class="details">
											<h4 class="report-title"><?php echo $title; ?></h4>
											<p class="report-description"><?php echo $description; ?></p>
										</div>
										<div class="download">
											<span class="download-link">
												Download now
												<i class="material-icons">file_download</i>
											</span>
											<span class="date"><?php echo $date; ?></span>
										</div>
									</a>
								<?php endif; ?>
							<?php endwhile; ?>
	          </div>

					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
