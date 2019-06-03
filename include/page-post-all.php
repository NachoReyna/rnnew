<div class="container">
  <div class="row">
    <?php $int = 1;
      $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
      $args = array(
        'order'   => 'DESC',
        'category_name' => 'noticias',
        'post_status'=>'publish',
        'paged' => $paged,
        'posts_per_page' => 9
      );
      $homeProductos = new WP_Query( $args );?>
    <?php if( $homeProductos->have_posts() ): ?>
    <?php  while( $homeProductos->have_posts() ) : $homeProductos-> the_post(); ?>
    <?php $author = get_the_author(); 
          $categories = get_the_category();
if ( ! empty( $categories ) ) {?>
    <div class="col-md-6 col-sm-6 col-lg-4">
      <div class="card mb-4 box-shadow">
        <a href="<?php the_permalink(); ?>">
          <div class="crop" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
        </a>
        <div class="categoria-post-home verde">
            <?php  echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';?>
        </div>
        <div class="card-body card-text">
          <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
          <p><?php echo the_date(); ?></p>
        </div>
      </div>
    </div>
    <?php
    }
      endwhile; ?>
    <?php endif; ?>
  </div>
</div>