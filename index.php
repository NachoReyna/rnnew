<?php get_header();?>
<section id="section-slide-inicio">
  <div class="container">
    <?php include('include/page-slide.php'); ?>
  </div>
</section>
<section>
  <div class="container">
    <div class="titulos-index-section">
      <h1 class="verde"><span class="verde">Noticias</span></h1>
    </div>  
  </div>
</section>
<section id="section-noticias">
    <?php include('include/page-post-all.php'); ?>
</section>
<section>
  <div class="container">
    <div class="titulos-index-section">
      <h1 class="rojo"><span class="rojo">Nuevas propuestas</span></h1>
    </div>  
  </div>
</section>
<section id="section-noticias">
    <?php include('include/page-news-home.php'); ?>
</section>
<section>
  <div class="container">
    <div class="titulos-index-section">
      <h1 class="negro"><span class="negro">Blog</span></h1>
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