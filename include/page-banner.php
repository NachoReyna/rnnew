   <?php $the_query = new WP_Query(
      array( 'post_type' => 'banner',
      'posts_per_page' => 1,
      'orderby' => 'rand'
      ));?>
      <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
      <?php 
         $author = get_the_author();
         $link_red = get_field('link-red');?>
         <a href="<?php echo $link_red; ?>" target="_blank">
            <section id="section-header-banner" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="rocknsidebanner" style="background-image:url('<?php echo get_the_post_thumbnail_url();?>')">
            </section>
         </a> 
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else : ?>
         <p>
            <?php esc_html_e( 'No existe nada' ); ?>
         </p>
      <?php endif; ?>
  


