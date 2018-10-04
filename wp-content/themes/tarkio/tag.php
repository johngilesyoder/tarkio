<?php get_header(); ?>
  
  <main role="main">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h1 class="archive-title">
            Tag archive: <strong>'<?php echo single_tag_title('', false); ?>'</strong>
          </h1>
          <?php get_template_part('loop'); ?>
          <?php get_template_part('pagination'); ?>
        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>