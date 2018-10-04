<?php
$investor_masthead = get_field('insights_hero_background', 'option');
$blog_masthead = get_field('blog_header_background', 'option');
?>

<!-- Account for Investor Insights -->
<?php if ( is_post_type_archive('investor_insight') || (is_tax() && is_taxonomy('insight_type')) || is_singular('investor_insight') ) : ?>
<div class="page-masthead" style="background-image:url('<?php echo $investor_masthead['url']; ?>');">
<!-- Blog pages -->
<?php elseif ( is_home() || is_singular('post') || is_date() || is_tag() || is_author() ) : ?>
  <?php if ( get_field('blog_header_background', 'option') ) : ?>
    <div class="page-masthead" style="background-image:url('<?php echo $blog_masthead['url']; ?>');">
  <?php else : ?>
    <div class="page-masthead">
  <?php endif; ?>
<!-- All others use featured image in WP -->
<?php else : ?>
<div class="page-masthead" style="background-image:url('<?php the_post_thumbnail_url( 'full' ); ?>');">
<?php endif; ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-6">
        <div class="masthead-content">

          <!-- Investor Insights -->
          <?php if ( is_post_type_archive('investor_insight') ) : ?>
            <h1 class="page-title"><?php the_archive_title();?></h1>
            <?php the_archive_description( '<div class="subtext"', '</div>' ); ?>

          <!-- Insight -->
          <?php elseif ( (is_tax() && is_taxonomy('insight_type')) || is_singular('investor_insight') ) : ?>
            <?php $parent_type = get_post_type_object( 'investor_insight' ); ?>
            <h1 class="page-title"><?php echo $parent_type->labels->name; ?></h1>
            <div class="subtext"><?php echo $parent_type->description; ?></div>

          <!-- Blog posts/archives -->
        <?php elseif (is_singular('post') || is_date() || is_tag() || is_author() ) : ?>
            <h2 class="page-title"><a href="/blog/"><i class="material-icons">chevron_left</i>Blog</a></h2>
            <div class="subtext">Read on for information to help you lead a smarter financial life.</div>

          <!-- Blog page -->
          <?php elseif ( is_home() ) : ?>
            <h1 class="page-title">Blog</h1>
            <div class="subtext">Read on for information to help you lead a smarter financial life.</div>

          <!-- Page Title -->
          <?php else : ?>
            <h1 class="page-title"><?php the_title(); ?></h1>
            <?php if( has_excerpt() ) : ?>
              <div class="subtext"><?php the_excerpt(); ?></div>
            <?php endif; ?>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</div>
