
<?php get_header(); ?>

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <div class="carousel-inner">

              <?php
                $args = array(
                  'post_type' => 'slide',
                  'posts_per_page' => -1,
                  'orderby' => 'date'
                );
                $slides = new WP_Query($args);
                $x=0;
                while($slides->have_posts()):$slides->the_post(); $x++;
              ?>

              <?php $url_slide = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>

                <div class="item <?php if($x==1){echo 'active';} ?>" style="background-image: url(<?php echo $url_slide[0]; ?>)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1"><?php the_title(); ?></h2>
                                    <p class="animation animated-item-2"><?php the_content(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>

            </div><!--/.carousel-inner-->

            <ol class="carousel-indicators">
              <?php
              for ($i=0; $i < $x ; $i++) { ?>
                    <li data-target="#main-slider" data-slide-to="<?php echo $i ?>" class="<?php if($i==0){echo 'active';} ?>"></li>\
              <?php } ?>
            </ol>



        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->


		<!-- Call to Action Bar -->
	    <div class="section section-dark">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="calltoaction-wrapper">
							<h3><?php bloginfo('name'); ?></h3>
              <p><?php bloginfo('description'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Call to Action Bar -->


		<!-- Services -->



        <div class="section section-white">
	        <div class="container">
	        	<div class="row">

              <?php
              $args = array(
                'post_type' => 'servizi',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'DISC'
              );
              $servizi = new WP_Query($args);
              while($servizi->have_posts()):$servizi->the_post();
              ?>

  	        		<div class="col-md-4 col-sm-6">
  	        			<div class="service-wrapper">
  		        			<i class="<?php the_field('service_icon') ?>"></i>
  		        			<h3><?php the_title(); ?></h3>
  		        			<p><?php the_content(); ?></p>
  		        			<a href="<?php the_permalink(); ?>" class="btn">Vai al dettaglio</a>
  		        		</div>
  	        		</div>

              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>

	        	</div>
	        </div>
	    </div>
	    <!-- End Services -->


<hr>

		<!-- Our Portfolio -->

        <div class="section section-white">
	        <div class="container">


				<div class="section-title">
				<h1>Our Recent Works</h1>
				</div>


			<ul class="grid cs-style-3">

        	<div class="row">
	        	<div class="col-md-4 col-sm-6">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/4.jpg" alt="img04">
						<figcaption>
							<h3>Settings</h3>
							<span>Jacob Cummings</span>
							<a href="portfolio-item.html">Take a look</a>
						</figcaption>
					</figure>
	        	</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/1.jpg" alt="img01">
						<figcaption>
							<h3>Camera</h3>
							<span>Jacob Cummings</span>
							<a href="portfolio-item.html">Take a look</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/2.jpg" alt="img02">
						<figcaption>
							<h3>Music</h3>
							<span>Jacob Cummings</span>
							<a href="portfolio-item.html">Take a look</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/5.jpg" alt="img05">
						<figcaption>
							<h3>Safari</h3>
							<span>Jacob Cummings</span>
							<a href="portfolio-item.html">Take a look</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/3.jpg" alt="img03">
						<figcaption>
							<h3>Phone</h3>
							<span>Jacob Cummings</span>
							<a href="portfolio-item.html">Take a look</a>
						</figcaption>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/6.jpg" alt="img06">
						<figcaption>
							<h3>Game Center</h3>
							<span>Jacob Cummings</span>
							<a href="portfolio-item.html">Take a look</a>
						</figcaption>
					</figure>
				</div>
      </div>

			</ul>
	        </div>
	    </div>
		<!-- Our Portfolio -->

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
