<footer class="content-info footer-container">
  <?php
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    $logo_url = $image[0];
  ?>
  <div class="footer-logo">
    <img src="<?= $logo_url ?>" alt="JHS">
  </div>
  <div class="footer-desc">
    <span>&copy; 2017 Jennifer’s Hair Studio & Spa</span><br>
    <span>118 N. Clinton St. Suite 101</span><br>
    <span>Chicago, IL 60661</span>
  </div>
</footer>


<div class="design-watermark">
  Design By Jonah Mandli
</div>

<div class="social-icons">
  <a href="https://www.facebook.com/jennifershairstudio"><i class="socials fa fa-facebook-square fa-2x"></i></a>
  <i class="socials fa fa-twitter-square fa-2x"></i>
  <i class="socials fa fa-instagram fa-2x"></i>
</div>
