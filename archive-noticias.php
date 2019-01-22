<?php
get_header();?>
<div id="noticias">
  <div class="container album py-4" align="center">
    <div class="imagen-principal">
      <img src="<?php bloginfo('template_url');?>/images/section/noticias.jpg" class="img-fluid" alt="Responsive image">
    </div>
    <div class="row">
      <?php $int = 1;
      $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
      $args = array(
        'order'   => 'DESC',
        'post_type' => 'noticias',
        'paged' => $paged,
        'posts_per_page' => 11
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
            <div class="card-body">
              <h4 class="mb-0 estilo-link-titulo">
                <a class="text-blanco" href=" <?php the_permalink(); ?>"><?php the_title();?></a>
              </h4>
              <p><?php echo $author;?> <br> <?php echo the_date(); ?>  </p>
            </div>
          </div>
        </div>
      <?php
      endwhile; ?>
    <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer();?>
