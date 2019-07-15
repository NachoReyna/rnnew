   <?php $the_query = new WP_Query(
      array( 'post_type' => 'publicidad',
      'posts_per_page' => 1,
      'orderby' => 'rand'
      ));?>
      <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
      <?php $link_red = get_field('link-red'); ?>
      <div class="container imagen-publicidad">
         <div class="row">
            <div class="col-md-12 text-center mt-4 mb-4">
               <a href="<?php echo $link_red; ?>" target="_blank">
                  <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" class="img-fluid">
               </a>
            </div>
         </div>
      </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else : ?>
      <p><?php esc_html_e( 'No existe nada' ); ?></p>
      <?php endif; ?>
  


