   <?php $the_query = new WP_Query(
      array( 'post_type' => 'banners',
      'posts_per_page' => 2,
      'orderby' => 'rand'
      ));?>
      <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
      <?php $author = get_the_author();
      $link_video_youtube = get_field('link_video_youtube');
      ?>
      <section id="section-header-banner" class="rocknsidebanner" style="background-image:url('<?php echo get_the_post_thumbnail_url();?>')">
      </section>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else : ?>
      <p><?php esc_html_e( 'No existe nada' ); ?></p>
      <?php endif; ?>
  


