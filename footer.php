<div id="footer">
  <div class="imagen-parallax" style="background-image: url(' <?php bloginfo('template_url');?>/images/footer/guitarr_play.jpg');"></div>
  <footer class="footer estilo-footer">
    <div class="container">
      <div class="row" align="center">
      <div class="col-md-12 col-sm-12 col-lg-4 margen-footer estilo-footer-izquierdo">
      <a href="#"><img src="<?php bloginfo('template_url');?>/images/logos/logo_nuevo.png" width="40%" alt=""></a>
      </div>
      <div class="col-md-12 col-sm-12 col-lg-4 margen-footer estilo-footer-centro">
      <a href="https://www.facebook.com/RockNside/"><i class="fab fa-facebook-square fa-2x"></i></a>
      <a href="https://www.instagram.com/rocknside/"><i class="fab fa-instagram fa-2x"></i></a>
      <a href="https://www.youtube.com/rocknside"><i class="fab fa-youtube fa-2x"></i></a>
      <a href="https://twitter.com/rocknside"><i class="fab fa-twitter-square fa-2x"></i></a>
      <p>2019 © copyright | RockNside.com</p>
      </div>
        <div class="col-md-12 col-sm-12 col-lg-4 margen-footer estilo-footer-derecho">
          <!-- <div class="col-md-12 col-sm-12 col-lg-12">
          <h4 class="noticias-letrero">Facebook</h4>
          <?php echo do_shortcode( '[custom-facebook-feed]' ); ?>
          </div> -->
        <a href="#">Contacto</a>  | <a href="#">¿Quienes somos?</a><br>
        <a href="mailto:rockandrollinside@gmail.com">rockandrollinside@gmail.com</a>
        </div>
      </div>
    </div>
  </footer>
</div>

<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/lib/framework.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/generals.js"></script>

<!--[if lt IE 9]>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/lib/respond.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/lib/modernizr.js"></script>
<script type="text/javascript">
  Modernizr.load({
    test: Modernizr.geolocation,
    yep : 'geo.js',
    nope: 'geo-polyfill.js'
  });
</script>
<![endif]-->
<?php wp_footer(); ?>
</body>
</html>
