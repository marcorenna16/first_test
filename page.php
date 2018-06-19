<?php get_header(); ?>

<!-- Page Title -->
<div class="section section-breadcrumbs">
<div class="container">
<div class="row">
  <div class="col-md-12">
    <h1>This is a Full Width Page</h1>
  </div>
</div>
</div>
</div>

<div class="section">
<div class="container">
<div class="row">
<div class="col-sm-12">

 <?php
  //the_post_thumbnail('full', array(
  //  'class' => 'img-fluid'
  //));
  ?>

  <?php
  //inserire una thumbnail con logica condizionale
  $post_thumbnail = null; //il valore iniziale della variabile è impostato su null in modo che la logica condizionale dichiarata successivamente funzioni
  $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
  $post_thumbnail = $post_thumbnail[0];
  ?>
  <?php
    if(isset($post_thumbnail)) {?>
    <img class="img-fluid" src="<?php echo $post_thumbnail ?>" alt="Full Width Banner Image">
  <?php
    } else {?>
    <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/slides/slide-2.jpg" alt="Full Width Banner Image">
  <?php
    }?>

</div>
<div class="col-sm-12">
    <hr>
    <h2>We are a Graphic Design company</h2>
    <h3>Specializing in Wordpress Theme Development</h3>
    <p>
      Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id. Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id.
    </p>
    <p>
      Donec elementum mi vitae enim fermentum lobortis. In hac habitasse platea dictumst. Ut pellentesque, orci sed mattis consequat, libero ante lacinia arcu, ac porta lacus urna in lorem. Praesent consectetur tristique augue, eget elementum diam suscipit id.
    </p>
    <h3>Wide range of services</h3>
    <p>
      Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam condimentum laoreet sagittis. Duis quis ullamcorper leo. Suspendisse potenti.
      Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam condimentum laoreet sagittis. Duis quis ullamcorper leo. Suspendisse potenti.
    </p>



<div class="clients-logo-wrapper text-center row">
  <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-1.jpg" alt="Client Name"></a></div>
  <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-2.jpg" alt="Client Name"></a></div>
  <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-3.jpg" alt="Client Name"></a></div>
  <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-4.jpg" alt="Client Name"></a></div>
  <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-5.jpg" alt="Client Name"></a></div>
  <div class="col-lg-2 col-md-1 col-sm-3 col-xs-6"><a href="#"><img src="img/logos/logo-6.jpg" alt="Client Name"></a></div>
</div>
  </div>
</div>
</div>
</div>

<?php get_footer(); ?>
