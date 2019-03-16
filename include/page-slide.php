<div class=" mt-3">
<div class="owl-carousel owl-theme">
    <?php $int = 1;
        $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
        $args = array(
          'order'   => 'DESC',
          'category_name' => 'musica',
          'paged' => $paged,
          'posts_per_page' => 5
        );
        $noticiasNew = new WP_Query( $args );?>
        <?php if( $noticiasNew->have_posts() ): ?>
        <?php  while( $noticiasNew->have_posts() ) : $noticiasNew-> the_post(); ?>
          <?php $author = get_the_author();
                $imagen = get_the_post_thumbnail_url();?>
          <div class="item">
                <img class="d-block w-100" src="<?php echo $imagen; ?>" alt="" class="img-fluid">
            <div class="titulos-banner">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>            
          </div>
        <?php
        endwhile; ?>
      <?php endif; ?> 
  </div>
</div>

