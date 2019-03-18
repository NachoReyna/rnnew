<?php
/* Template Name: Cultura */
get_header();?>
<section id="noticias">
  <div class="container mt-3">
    <div class="col-sm-12 col-md-12 col-lg-12">
      <div class="col-sm-12 col-md-12 col-lg-12 titulos-secciones">
        <h1 class="tipo-letra"><?php the_title();?></h1>
      </div>
          <div class="imagen-principal" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <?php $int = 1;
      $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
      $args = array(
        'order'   => 'DESC',
        'category_name' => 'cultura',
        'paged' => $paged,
        'posts_per_page' => -1
      );
      $homeProductos = new WP_Query( $args );?>
      <?php if( $homeProductos->have_posts() ): ?>
      <?php  while( $homeProductos->have_posts() ) : $homeProductos-> the_post(); ?>
        <?php $author = get_the_author(); ?>
        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="card mb-4 mt-4 box-shadow">
            <a href="<?php the_permalink(); ?>">
              <div class="crop" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
            </a>
            <div class="card-body card-text estilos-texto letras-titulos">
              <a class="text-titulo-notas" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
              <p class="text-parr"> <?php echo the_date(); ?>  </p>
            </div>
          </div>
        </div>
      <?php
      endwhile; ?>
    <?php endif; ?>
    </div>
  </div>
</section>
<?php get_footer();?>
