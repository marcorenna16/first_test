<?php get_header(); ?>

<!-- Page Title -->
<div class="section section-breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Our Portfolio</h1>
      </div>
    </div>
  </div>
</div>


<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2>We are leading company</h2>
        <h3>Specializing in Wordpress Theme Development</h3>
        <p>
          Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit
          id. Donec elementum mi vitae enim fermentum lobortis.
        </p>

      </div>
    </div>
  </div>
</div>

<div class="section">
  <div class="container">
    <ul class="grid cs-style-2">
      <div class="row">

        <?php
        while(have_posts()):the_post();
        $vg_thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>

          <div class="col-md-4 col-sm-6">
            <figure>
              <img src="<?php echo $vg_thumb_url[0] ?>" alt="img04">
              <figcaption>
                <h3><?php the_title(); ?></h3>
                <span><?php the_field('developer'); ?></span>
                <a href="<?php the_permalink(); ?>">Scopri di più</a>
              </figcaption>
            </figure>
          </div>

        <?php endwhile; ?>

        <ul class="pager">
          <li><a href="#">Previous</a></li>
          <li><a href="#">Next</a></li>
        </ul>

      </div>
    </ul>
  </div>
</div>

<?php get_footer(); ?>
