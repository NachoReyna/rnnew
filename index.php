<?php get_header();?>
<section id="section-slide-inicio">
  <?php include('include/page-slide.php'); ?>
</section>
<section id="section-noticias">
    <?php include('include/page-post-all.php'); ?>
</section>
<section>
  <div class="container">
    <div class="titulos-index-section">
      Noticias<hr>
    </div>  
  </div>
</section>
<section id="section-noticias">
    <?php include('include/page-news-home.php'); ?>
</section>
<section>
  <div class="container">
    <div class="titulos-index-section">
      Música<hr>
    </div>
  </div>
</section>
<section id="section-musica">
      <?php include('include/page-music-home.php'); ?>
</section>
<!--section class="slider-youtube">
  <?php //include('section-youtube.php'); ?>
</section-->
<?php get_footer();?>