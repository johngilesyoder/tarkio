<?php /* Template Name: Shareholder Info */ get_header(); ?>

<?php $file = get_field('xbrl_file', 'option'); ?>

<main role="main">

	<!-- Masthead -->
	<!-- =================================== -->
	<?php get_template_part( 'includes/page-masthead' ); ?>

	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-10 col-xl-8">
				<div class="alert alert-light">
					<i class="material-icons">info_outline</i>
					<div>
						<p>Current Shareholder Reports can also be found by leaving this site and going to the Securities & Exchange Commission's Edgar Website by clicking here</p>
						<a href="https://www.sec.gov/cgi-bin/browse-edgar?CIK=tarkx&owner=exclude&action=getcompany" target="_blank" class="btn btn-primary">Visit the SEC Edgar site<i class="material-icons">launch</i></a>
					</div>
				</div>
				<div class="alert alert-warning">
					<i class="material-icons">lightbulb_outline</i>
					<div>
						<p>The Risk/Return Summary information section of the Prospectus and any updated supplements to that section are available in XBRL format as required by the SEC's XBRL rules. These XBRL documents are intended for use in applications which support that format.</p>
						<a href="<?php echo $file['url']; ?>" target="_blank" class="btn btn-primary">Download XBRL_2017.zip<i class="material-icons">file_download</i></a>
					</div>
				</div>
				<div class="shareholder-documents">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="tab">
              <a  class="active" id="reports-tab" data-toggle="tab" href="#reports" role="tab"><span>Shareholder </span>Reports</a>
            </li>
            <li class="tab">
              <a id="letters-tab" data-toggle="tab" href="#letters" role="tab"><span>Shareholder </span>Letters</a>
            </li>
          </ul>
					<div class="tab-content" id="myTabContent">

	          <div class="tab-pane fade show active" id="reports" role="tabpanel" aria-labelledby="reports-tab">
							<?php while( have_rows('shareholder_document') ): the_row();
								// vars
								$title = get_sub_field('shareholder_document_title');
								$description = get_sub_field('shareholder_document_description');
								$date = get_sub_field('shareholder_document_date');
								$file = get_sub_field('shareholder_document_file');
								$type = get_sub_field('shareholder_document_type');
								?>
								<?php if( $type == 'Report') : ?>
									<a href="<?php echo $file; ?>" class="report">
										<div class="icon">
											<i class="material-icons">assignment</i>
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

						<div class="tab-pane fade" id="letters" role="tabpanel" aria-labelledby="letters-tab">
							<?php while( have_rows('shareholder_document') ): the_row();
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
