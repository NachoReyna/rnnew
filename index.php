<?php get_header();?>
<div id="contentNoticiasHome">
  <?php include('slide.php'); ?>
    <div class="container album py-4" align="center">
      <div class="row">
        <?php $int = 1;
        $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
        $args = array(
          'orderby' => 'desc',
          'order'   => 'DESC',
          'category' => 'noticias',
          'paged' => $paged,
          'posts_per_page' => 12
        );
        $homeProductos = new WP_Query( $args );?>
        <?php if( $homeProductos->have_posts() ): ?>
        <?php  while( $homeProductos->have_posts() ) : $homeProductos-> the_post(); ?>
          <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top maximo-tamano" src="<?php echo get_the_post_thumbnail_url(); ?>">
              <h4 class="mb-0">
                <a class="text-dark" href=" <?php the_permalink(); ?>"><?php the_title();?></a>
              </h4>
              <div class="card-body">
                <p class="card-text"><?php echo excerpt(10); ?> </p>
                  <div class="d-flex justify-content-end">
                    <a href="#">
                      <i class="fas fa-arrow-right fa-1x"></i>
                    </a>
                  </div>
              </div>
            </div>
          </div>
        <?php
        endwhile; ?>
      <?php endif; ?>
      </div>
    </div>
    <div class="slider-youtube">
  <?php include('section-youtube.php'); ?>
  </div>
</div>
<?php get_footer();?>
