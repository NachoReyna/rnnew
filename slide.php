<div class="container">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <?php $int = 1;
      $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
      $args = array(
      'order'   => 'DESC',
      'category_name' => 'noticias',
      'paged' => $paged,
      'posts_per_page' => 4
      );
        $noticiasNew = new WP_Query( $args );?>
        <?php if( $noticiasNew->have_posts() ): ?>
        <?php  while( $noticiasNew->have_posts() ) : $noticiasNew-> the_post(); ?>
        <?php $author = get_the_author();
        $imagen = get_the_post_thumbnail_url();
        $cont = 1;?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $cont; ?>"></li>
      <?php
      $cont++;
      endwhile; ?>
      <?php endif; ?>
    </ol>
  <div class="carousel-inner">
      <?php $int = 1;
        $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
        $args = array(
          'order'   => 'DESC',
          'category_name' => 'slider',
          'paged' => $paged,
          'posts_per_page' => 1
        );
        $noticiasNew = new WP_Query( $args );?>
        <?php if( $noticiasNew->have_posts() ): ?>
        <?php  while( $noticiasNew->have_posts() ) : $noticiasNew-> the_post(); ?>
          <?php $author = get_the_author();
                $imagen = get_the_post_thumbnail_url();?>
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo $imagen; ?>" alt="">
            <div class="carousel-caption d-md-block fondo-largo letras-titulos">
              <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
            </div>
          </div>
        <?php
        endwhile; ?>
      <?php endif; ?>

        <?php $int = 1;
        $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
        $args = array(
          'order'   => 'DESC',
          'category_name' => 'noticias',
          'paged' => $paged,
          'posts_per_page' => 4
        );
        $noticiasNew = new WP_Query( $args );?>
        <?php if( $noticiasNew->have_posts() ): ?>
        <?php  while( $noticiasNew->have_posts() ) : $noticiasNew-> the_post(); ?>
          <?php $author = get_the_author();
                $imagen = get_the_post_thumbnail_url();?>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo $imagen; ?>" alt="">
            <div class="carousel-caption d-md-block fondo-largo">
              <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
            </div>
          </div>
        <?php
        endwhile; ?>
      <?php endif; ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
</div>
