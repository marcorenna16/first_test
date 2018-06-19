<?php get_header(); ?>

<!-- Page Title -->
<div class="section section-breadcrumbs">
<div class="container">
<div class="row">
  <div class="col-md-12">
    <h1>Our Services </h1>
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
      Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id. Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id.
    </p>
    <p>
      Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id.
    </p>
  </div>
</div>
</div>
</div>

<hr>

<div class="section">
  <div class="container">
    <div class="row">

      <?php while(have_posts()):the_post() ?>

        <div class="col-md-4 col-sm-6">
          <div class="service-wrapper">
            <i class="<?php the_field('service_icon') ?>"></i>
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn">Scopri di più</a>
          </div>
        </div>

      <?php endwhile; ?>

    </div>
  </div>
</div>


<hr>

<!-- Our Clients -->
  <div class="section">
    <div class="container">

    <div class="section-title">
    <h1>Our Success Stories</h1>
    </div>

    <ul class="clients-logo-wrapper">

      <?php

      $args = array(
        'post_type' => 'clienti',
        // 'posts_per_page' => -1
      );
      $clienti = new WP_Query($args);
      while($clienti->have_posts()):$clienti->the_post();
      ?>

      <li><a href="#"><?php the_post_thumbnail('client_logo');?></a></li>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>

    </ul>
  </div>
  </div>
  <!-- End Our Clients -->


<?php get_footer(); ?>
