<?php get_header();?>
<?php include('include/page-publicidad.php'); ?>
<section id="section-noticias">
    <?php include('include/page-news.php'); ?>
</section>
<section>
  <div class="container">
    <div class="titulos-index-section">
      <h1 class="rosado"><span class="rosado"> Nuevas propuestas</span></h1>
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
      <h1 class="rojo"><span class="rojo"> Blog</span></h1>
    </div>
  </div>
</section>
<section id="section-musica">
  <?php include('include/page-blog.php'); ?>
</section>
<section>
  <div class="container">
    <div class="titulos-index-section">
      <h1 class="morado"><span class="morado"> Cine</span></h1>
    </div>
  </div>
</section>
<section id="section-musica">
  <?php include('include/page-cine.php'); ?>
</section>
<?php include('include/page-publicidad.php'); ?>
  <section>
  <div class="container">
    <div class="titulos-index-section">
      <h1 class="azulado"><span class="azulado"> Cultura</span></h1>
    </div>
  </div>
</section>
<section id="section-musica">
  <?php include('include/page-cultura.php'); ?>
</section>
<section>
  <div class="container">
    <div class="titulos-index-section">
      <h1 class="rosado"><span class="rosado"> Videos</span></h1>
    </div>  
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8 mb-4">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/WdUgJpje03E?rel=0" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-12">
            <section id="section-musica">
              <?php include('include/page-post.php'); ?>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();?>