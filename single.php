<?php get_header();?>
<div id="contenido-post">
      <?php
      if ( have_posts() ) { 	while ( have_posts() ) { the_post();
        $video = get_field('video');
        $titulo = get_the_title();
        $contenido = get_the_content();
        ?>
        <div class="container">
          <div class="row" align="center">
            <div class="col-md-12 col-sm-12 col-lg-12 py-4">
              <img src="<?php echo get_the_post_thumbnail_url(); ?> " alt="" width="100%">
            </div>
          </div>
          <div class="row no-gutters">
            <!--Contenido del post-->
          <div class="col-12 col-sm-12 col-md-9">
          <h2 align="center">
            <?php echo $titulo; ?>
          </h2>
          <div class="contenedor-texto">
            <?php echo $contenido ?>
          </div>
        <div class="embed-responsive embed-responsive-16by9" align="center">
          <iframe class="embed-responsive-item" src="<?php echo $video; ?>" allowfullscreen></iframe>
        </div>
      	<?php }//endwhile
      }//endif ?>
    </div>
    <!--Contenido extra como secciones de redes sociales etc-->
    <div class="col-12 col-sm-12 col-md-3" align="center">
      <div class="col-md-12 col-sm-12 col-lg-12">
        <h4 class="noticias-letrero">Más Noticias</h4>
      </div>
        <?php $the_query = new WP_Query( array( 'category_name' => 'noticias', 'posts_per_page' => 6 ) );?>
        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>

          <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card mb-4 box-shadow">
              <img class="card-img-right  d-md-block tam-imag" src="<?php the_post_thumbnail_url(); ?>">
              <div class="card-body">
                <a class="text-dark" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
              </div>
            </div>

          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

      <div class="col-md-12 col-sm-12 col-lg-12">
        <h4 class="noticias-letrero instagram">Instagram</h4>
        <?php echo do_shortcode( '[insta-gallery id="1"]' ); ?>
    </div>


          </div>
        </div>
  </div>
</div>


<?php get_footer();?>
