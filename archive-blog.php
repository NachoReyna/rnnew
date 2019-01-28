<?php
get_header();?>
<div id="blog">
  <div class="container album py-4" align="center">
    <div class="imagen-principal">
      <img src="<?php bloginfo('template_url');?>/images/section/blog.jpg" class="img-fluid" alt="Responsive image">
    </div>
    <div class="row">
      <?php $int = 1;
      $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
      $args = array(
        'order'   => 'DESC',
        'post_type' => 'blog',
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
            <div class="card-body card-text">
              <a class="text-dark" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
              <p class="text-parr"> <?php echo the_date(); ?>  </p>
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
