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
	    		<div class="row">
	    			<!-- Product Image & Available Colors -->
	    			<div class="col-sm-6">
	    				<div class="product-image-large">
                <?php $thumbnail_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
                 ?>
	    					<img src="<?php echo $thumbnail_url[0] ?>" alt="Item Name">
	    				</div>
	    				<div class="colors">
							<span class="color-white"></span>
							<span class="color-black"></span>
							<span class="color-blue"></span>
							<span class="color-orange"></span>
							<span class="color-green"></span>
						</div>
	    			</div>
	    			<!-- End Product Image & Available Colors -->
	    			<!-- Product Summary & Options -->
	    			<div class="col-sm-6 product-details">

            <?php if(have_posts()):while(have_posts()):the_post(); ?>

              <h2><?php the_title(); ?></h2>
              <p><?php the_content(); ?></p>
              <hr>
  						<h3>Dettagli del titolo:</h3>
  						<p><strong>Anno: </strong><?php the_field('anno') ?></p>
  						<p><strong>Sviluppatore: </strong><?php the_field('developer') ?></p>
  						<p><strong>Publisher: </strong><?php the_field('publisher') ?></p>

            <?php endwhile;?>

            <?php else: ?>

              <p>Ops! Contenuto non trovato!</p>

            <?php endif; ?>

	    			</div>
	    			<!-- End Product Summary & Options -->

	    		</div>
			</div>
		</div>

		<hr>

    <div class="section">
    	<div class="container">
				<ul class="grid cs-style-2">
					<div class="section-title">
						<h1>Altri titoli</h1>
					</div>
					<div class="row">

		        <?php $args = array(
		          'post_type' => 'videogames',
		          'posts_per_page' => 4,
		          'post__not_in' => array(get_the_id()), //esclude la pagina corrente dal custom loop attraverso l'id
		          'orderby' => 'rand'
		        );

		        $videogames = new WP_Query($args);

		        while($videogames->have_posts()):$videogames->the_post();
		        $vg_thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'full'); ?>

			        	<div class="col-md-3 col-sm-6">
		    					<figure>
		    						<img src="<?php echo $vg_thumb_url[0] ?>" alt="img04">
		    						<figcaption>
		    							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		    							<span><?php the_field('developer') ?></span>
		    						</figcaption>
		    					</figure>
			        	</div>

		        <?php endwhile; ?>

					</div>
				</ul>
			</div>
		</div>

<?php get_footer(); ?>
