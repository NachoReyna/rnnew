<?php get_header();?>
<section id="section-slide-inicio">
  <?php include('slide.php'); ?>
</section>
<section id="" class="container album py-4" align="center">
<hr>
  <div class="letras-titulos">
    <h1>Noticias</h1>
  </div>
  <div class="row">
    <?php $int = 1;
      $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
      $args = array(
        'order'   => 'DESC',
        'category_name' => 'noticias',
        'paged' => $paged,
        'posts_per_page' => 3
      );
      $homeProductos = new WP_Query( $args );?>
    <?php if( $homeProductos->have_posts() ): ?>
    <?php  while( $homeProductos->have_posts() ) : $homeProductos-> the_post(); ?>
    <?php $author = get_the_author(); ?>
    <div class="col-md-6 col-sm-6 col-lg-3">
      <div class="card mb-4 box-shadow sin-boders">
        <a href="<?php the_permalink(); ?>">
          <div class="crop" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
        </a>
        <div class="card-body card-text">
          <a class="text-dark" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
          <p class="text-parr"> <?php echo the_date(); ?> </p>
        </div>
      </div>
    </div>
    <?php
      endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<section class="container album py-4" align="center">
  <hr>
  <div class="letras-titulos">
    <h1>Música</h1>
  </div>
  <div class="row">
    <?php $int = 1;
      $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
      $args = array(
        'order'   => 'DESC',
        'category_name' => 'musica',
        'paged' => $paged,
        'posts_per_page' => 3
      );
      $homeProductos = new WP_Query( $args );?>
    <?php if( $homeProductos->have_posts() ): ?>
    <?php  while( $homeProductos->have_posts() ) : $homeProductos-> the_post(); ?>
    <?php $author = get_the_author(); ?>
    <div class="col-md-6 col-sm-6 col-lg-3">
      <div class="card mb-4 box-shadow sin-boders">
        <a href="<?php the_permalink(); ?>">
          <div class="crop" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
        </a>
        <div class="card-body card-text letras-titulos">
          <a class="text-dark" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
          <p class="text-parr"> <?php echo the_date(); ?> </p>
        </div>
      </div>
    </div>
    <?php
      endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<section class="slider-youtube">
  <?php include('section-youtube.php'); ?>
</section>
<?php get_footer();?>
