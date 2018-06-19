<?php get_header(); ?>

<!-- Page Title -->
<div class="section section-breadcrumbs">
<div class="container">
<div class="row">
  <div class="col-md-12">
    <h1>Our Blog</h1>
  </div>
</div>
</div>
</div>

<div class="section">
<div class="container">
<div class="row">

  <?php

  if(have_posts()):while(have_posts()):the_post(); ?>

  <!-- Blog Post Excerpt -->
  <div class="col-sm-6">
    <div class="blog-post blog-single-post">
      <div class="single-post-title">
        <h2><?php the_title(); ?></h2>
      </div>

      <div class="single-post-image">
        <?php $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(),'full'); ?>
        <img src="<?php echo $post_thumbnail[0]; ?>" alt="Preview img">
      </div>

      <div class="single-post-info">
        <i class="fas fa-clock"></i><?php the_time(get_option('date_format'));?> alle ore <?php the_time('g:i')?> <a href="#" title="Show Comments"><i class="fas fa-comments"></i>11</a>
      </div>

      <div class="single-post-content">
        <p>
          <?php the_content(); ?>
        </p>
      <a href="<?php the_permalink(); ?>" class="btn">Leggi tutto</a>
      </div>
    </div>
  </div>
  <!-- End Blog Post Excerpt -->


  <?php endwhile; ?>

  <!-- Pagination -->

  <?php else: ?>

    <?php echo 'Non sono presenti articoli!' ?>

  <?php endif; ?>



</div>

<nav aria-label="Page navigation" class="pagination-nav">
  <ul class="pagination justify-content-center">
    <?php
    echo paginate_links();?>
  </ul>
</nav>

</div>
</div>

<?php get_footer(); ?>
