<?php get_header();?>
<section id="section-slide-inicio">
  <div class="container">
    <?php include('include/page-slide.php'); ?>
  </div>
</section>
  <?php include('include/page-publicidad.php'); ?>
<section>
  <div class="container">
    <div class="titulos-index-section">
      <h1 class="verde"><span class="verde"><i class="far fa-newspaper"></i> Noticias</span></h1>
    </div>  
  </div>
</section>
<section id="section-noticias">
    <?php include('include/page-news.php'); ?>
</section>
<section>
  <div class="container">
    <div class="titulos-index-section">
      <h1 class="rosado"><span class="rosado"><i class="fas fa-headphones-alt"></i> Nuevas propuestas</span></h1>
    </div>  
  </div>
</section>
<section id="section-noticias">
    <?php include('include/page-bandas.php'); ?>
</section>
  <?php include('include/page-publicidad.php'); ?>
  <section>
  <div class="container">
    <div class="titulos-index-section">
      <h1 class="morado"><span class="morado"><i class="fas fa-film"></i>  Cine</span></h1>
    </div>
  </div>
</section>
<section id="section-musica">
      <?php include('include/page-cine.php'); ?>
</section>
  <section>
  <div class="container">
    <div class="titulos-index-section">
      <h1 class="azulado"><span class="azulado"><i class="fas fa-hand-holding-heart"></i> Cultura</span></h1>
    </div>
  </div>
</section>
<section id="section-musica">
      <?php include('include/page-cultura.php'); ?>
</section>
<section>
  <div class="container">
    <div class="titulos-index-section">
      <h1 class="rojo"><span class="rojo"><i class="fab fa-blogger-b"></i> Blog</span></h1>
    </div>
  </div>
</section>
<section id="section-musica">
      <?php include('include/page-blog.php'); ?>
</section>
<?php get_footer();?>