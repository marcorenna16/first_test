<!-- Footer -->
<div class="footer">
  <div class="container">

    <div class="row">

      <div class="col-footer col-md-4 col-xs-6">
        <h3>Contact Us</h3>
        <p class="contact-us-details">
            <b>Address:</b> 123 Downtown Avenue, Manhattan, New York, United States of America<br/>
            <b>Phone:</b> +1 123 45678910<br/>
            <b>Fax:</b> +1 123 45678910<br/>
            <b>Email:</b> <a href="mailto:info@yourcompanydomain.com">info@yourcompanydomain.com</a>
          </p>
      </div>
      <div class="col-footer col-md-4 col-xs-6">
        <h3>Our Social Networks</h3>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.png" width="32" alt="Facebook">
          <img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.png" width="32" alt="Twitter">
          <img src="<?php echo get_template_directory_uri(); ?>/img/icons/linkedin.png" width="32" alt="LinkedIn">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rss.png" width="32" alt="RSS Feed">
      </div>
      </div>
      <div class="col-footer col-md-4 col-xs-6">
        <h3>About Our Company</h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
      </div>

    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="footer-copyright">&copy; 2014 <a href="http://www.vactualart.com/portfolio-item/basica-a-free-html5-template/">Basica</a> Bootstrap HTML Template. By <a href="http://www.vactualart.com">Vactual Art</a>.</div>
      </div>
    </div>
  </div>
</div>

  <!-- Javascripts -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"><\/script>')</script>


<script type="text/javascript">
$(document).ready(function(){
  $(window).scroll(function(){
    if($(document).scrollTop() > 100){
      $('.navbar').addClass('navbar-shrink');
    } else {
      $('.navbar').removeClass('navbar-shrink');
    }
  })
})
</script>

<?php wp_footer(); ?>

</body>
</html>
