<?php get_header(); ?>

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Product Details</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">
	    		<div class="row justify-content-center">
	    			<!-- Product Summary & Options -->
	    			<div class="col-8 product-details text-center">

            <?php if(have_posts()):while(have_posts()):the_post(); ?>

              <i class="<?php the_field('service_icon') ?>"></i>

              <h2><?php the_title(); ?></h2>
              <p><?php the_content(); ?></p>
              <hr>
  						<!-- <h3>Dettagli del titolo:</h3>
  						<p><strong>Anno: </strong><?php the_field('anno') ?></p>
  						<p><strong>Sviluppatore: </strong><?php the_field('developer') ?></p>
  						<p><strong>Publisher: </strong><?php the_field('publisher') ?></p> -->

            <?php endwhile;?>

            <?php else: ?>

              <p>Ops! Contenuto non trovato!</p>

            <?php endif; ?>

	    			</div>
	    			<!-- End Product Summary & Options -->

	    		</div>
			</div>
		</div>


<?php get_footer(); ?>
