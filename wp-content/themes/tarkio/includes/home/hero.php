<?php $file = get_field('fact_sheet_file'); ?>
<section class="home-hero">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-10 col-xl-8">
        <div class="hero-content">
          <h2 class="title"><?php the_field('hero_title'); ?></h2>
          <p class="subtext"><?php the_field('hero_subtext'); ?></p>
          <div class="row justify-content-center">
            <div class="col-6">
              <div class="actions">
                <a href="<?php the_field('primary_action_link'); ?>" class="btn btn-lg btn-primary"><?php the_field('primary_action_text'); ?></a>
                <a href="<?php the_field('secondary_action_link'); ?>" class="btn btn-lg btn-outline-light"><?php the_field('secondary_action_text'); ?></a>
                <a href="<?php echo $file['url']; ?>" target="_blank" class="link-fact-sheet">View the Fact Sheet (pdf)<i class="material-icons">picture_as_pdf</i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
