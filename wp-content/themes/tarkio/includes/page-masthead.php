<div class="page-masthead">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 col-lg-6">
        <div class="masthead-content">

          <!-- Page Title -->
          <h1 class="page-title"><?php the_title(); ?></h1>
          <?php if( has_excerpt() ) : ?>
            <div class="subtext"><?php the_excerpt(); ?></div>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</div>
