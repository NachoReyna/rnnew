<?php get_header();?>
<!--Contenido del post-->
<section id="contenido-post">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-9">
         <?php if ( have_posts() ) { 	while ( have_posts() ) { the_post();
                $titulo = get_the_title();
                $author = get_the_author(); ?>
      <div class="col-12 mt-3">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>"
        title="La noticias actuales en la música rock"
        alt="RockNside" class="img-fluid imagen-estilo-singles">
      </div>
      <div class="estilo-titulo-principal">
        <h1>
          <?php echo $titulo;?>
        </h1>
      </div>
      <?php include('include/page-publicidad.php'); ?>
        <div class="contenedor-texto">
          <div class="autor-nota">
            <p>Por <?php echo $author; ?><span> | </span><?php echo the_date();?></p>
          </div>
          <div class="links-contenido videos-youtube">
            <?php the_content(); ?>
          </div>
          <div class="tags-estilos">
            <p>HABLANDO DE:</p>
            <?php
              $posttags = get_the_tags();
              if ($posttags) {
              foreach($posttags as $tag) {?>
              <a class="estilo-tags-single" href="<?php echo get_tag_link($tag->term_id); ?>">
              <?php echo $tag->name; ?>
              </a>
            <?php
              }
            }
          ?>
          </div>
        <?php }//endwhile
        }//endif ?>
        </div>
        <?php include('include/page-publicidad.php'); ?>
      </div>
      <div class="col-12 col-sm-12 col-md-3 mt-3">
        <div class="estilo-titulos-single">
          <div class="col-md-12 col-sm-12 col-lg-12">
            <h4 class="noticias-letrero">Más Noticias</h4>
          </div>
        </div>
      <?php $int = 1;
      $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
      $args = array(
        'order'   => 'DESC',
        'category_name' => 'noticias',
        'paged' => $paged,
        'posts_per_page' => 3
      );
      $homeProductos = new WP_Query( $args );?>
    <?php if( $homeProductos->have_posts() ): ?>
    <?php  while( $homeProductos->have_posts() ) : $homeProductos-> the_post(); ?>
    <?php $author = get_the_author(); 
          $categories = get_the_category();
if ( ! empty( $categories ) ) {?>
    <div class="col-md-12 col-sm-12 col-lg-12">
      <div class="card mb-4 box-shadow ">
        <a href="<?php the_permalink(); ?>">
          <div class="crop crop-single" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
        </a>
        <div class="categoria-post-home azulado">
          <?php  echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';?>
        </div>
        <div class="card-body card-text-alternado card-text-singles">
          <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
          <p class="sinborde-single"><?php echo the_date(); ?></p>
        </div>
      </div>
    </div>
    <?php
    }
      endwhile; ?>
    <?php endif; ?>
        <div class="estilo-titulos-single mt-2">
          <div class="col-12 col-sm-12 col-md-12">
            <h4 class="noticias-letrero">Escucha RockNside en Spotify</h4>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12">
          <iframe src="https://open.spotify.com/embed/user/bye83q42d2u9vooxycaswwd2w/playlist/1Q70QztkLY1xmvOJKBcyvz" class="spotify-elemento" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        </div>
        <div class="estilo-titulos-single">
          <div class="col-md-12 col-sm-12 col-lg-12">
            <h4 class="noticias-letrero">Lo Nuevo</h4>
          </div>
        </div>
      <?php $int = 1;
      $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
      $args = array(
        'order'   => 'DESC',
        'category_name' => 'blog',
        'paged' => $paged,
        'posts_per_page' => 4
      );
      $homeProductos = new WP_Query( $args );?>
    <?php if( $homeProductos->have_posts() ): ?>
    <?php  while( $homeProductos->have_posts() ) : $homeProductos-> the_post(); ?>
    <?php $author = get_the_author(); 
          $categories = get_the_category();
if ( ! empty( $categories ) ) {?>
    <div class="col-md-12 col-sm-12 col-lg-12">
      <div class="card mb-4 box-shadow ">
        <a href="<?php the_permalink(); ?>">
          <div class="crop crop-single" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
        </a>
        <div class="categoria-post-home rosado">
          <?php  echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';?>
        </div>
        <div class="card-body card-text-alternado card-text-singles">
          <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
          <p class="sinborde-single"><?php echo the_date(); ?></p>
        </div>
      </div>
    </div>
    <?php
    }endwhile; ?>
    <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<!--Contenido del post-->
<?php get_footer();?>
