<?php /* Template Name: Risks */ get_header(); ?>

<main role="main">

	<!-- Masthead -->
	<!-- =================================== -->
	<?php get_template_part( 'includes/page-masthead' ); ?>

	<div class="container-fluid">
		<div class="accordion" id="risksAccordion">
			<?php $i = 0; ?>
			<?php while( have_rows('risks_information') ): the_row();
				// vars
				$panel_title = get_sub_field('panel_title');
				$panel_content = get_sub_field('panel_content');
				?>
				<div class="card">
			    <div class="item-header" id="heading-<?php echo $i; ?>">
			      <h5 class="item-title">
							<?php if( $i == 0 ) : ?>
							<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $i; ?>">
							<?php else : ?>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $i; ?>">
							<?php endif; ?>
								<span><?php echo $panel_title; ?></span>
			        </button>
			      </h5>
			    </div>
					<?php if( $i == 0 ) : ?>
			    <div id="collapse-<?php echo $i; ?>" class="collapse show" aria-labelledby="heading-<?php echo $i; ?>" data-parent="#risksAccordion">
					<?php else : ?>
					<div id="collapse-<?php echo $i; ?>" class="collapse" aria-labelledby="heading-<?php echo $i; ?>" data-parent="#risksAccordion">
					<?php endif; ?>
			      <div class="card-body">
			        <?php echo $panel_content; ?>
			      </div>
			    </div>
			  </div>
				<?php $i++; ?>
			<?php endwhile; ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>
