<?php get_header();?>
<div id="contenido-post">
      <?php
      if ( have_posts() ) { 	while ( have_posts() ) { the_post();
        $video = get_field('video');
        $videoy = get_field('videoy');
        $video_dos = get_field('video_dos');
        $video_tres = get_field('video_tres');
        $spotify = get_field('spotify');
        $spotify_texto = get_field('spotify_texto');
        $titulo = get_the_title();
        $author = get_the_author();
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
      <h1 align="center"><?php echo $titulo; ?></h1>
      <div class="contenedor-texto">
        <div class="autor-nota">
          <p>Por <?php echo $author; ?> <span>|</span>  <?php echo the_date(); ?> </p>
        </div>
        <div class="links-contenido">
          <?php the_content(); ?>
        </div>
        <?php if($video){?>
          <div class="embed-responsive embed-responsive-16by9 my-4" align="center">
            <?php echo $video; ?>
          </div>
          <?php } ?>
          <?php if($video_dos){?>
          <div class="embed-responsive embed-responsive-16by9 my-4" align="center">
            <?php echo $video_dos; ?>
          </div>
          <?php } ?>
          <?php if($video_tres){?>
          <div class="embed-responsive embed-responsive-16by9 my-4" align="center">
            <?php echo $video_tres; ?>
          </div>
          <?php } ?>
          <?php if($spotify){?>
              <p><?php echo $spotify_texto; ?></p>
              <div class="col-md-12 col-sm-12 col-lg-12 my-4" class="elemnto-spotify-post" align="center">
                <?php echo $spotify; ?>
              </div>
            <?php } ?>
            <div class="col-md-12 col-sm-12 col-lg-12" align="center">
              <h4 class="noticias-letrero">TAGS</h4>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12" align="center">
              <?php
              $posttags = get_the_tags();
              if ($posttags) {
                foreach($posttags as $tag) {
                  ?>
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

    </div>
    <!--Contenido extra como secciones de redes sociales etc-->
    <div class="col-12 col-sm-12 col-md-3" align="center">
      <div class="col-md-12 col-sm-12 col-lg-12">
        <h4 class="noticias-letrero">Escucha RockNside en Spotify</h4>
      </div>
      <div class="col-md-12 col-sm-12 col-lg-12">
        <iframe src="https://open.spotify.com/embed/user/bye83q42d2u9vooxycaswwd2w/playlist/4dA8OfAU1nnLJUPeXWSSKI" class="spotify-elemento"  frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
      </div>
      <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="recipe-video-youtube">
          <div class="player-button">
              <i class="fas fa-play"></i>
              <a href="https://www.youtube.com/watch?v=C9WtBo9b3WI" data-lity>
              <img src="http://localhost:8888/test/wp-content/uploads/2018/12/1.jpg" alt="" width="100%">
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-lg-12">
        <h4 class="noticias-letrero">Más Noticias</h4>
      </div>
        <?php $the_query = new WP_Query( array( 'category_name' => 'noticias', 'posts_per_page' => 3 ) );?>
        <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
          <?php $author = get_the_author(); ?>
          <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card box-shadow estilo-noticias" style="background-image:url('<?php the_post_thumbnail_url(); ?>')"></div>
            <div class="card-body card-text">
              <a class="text-dark" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
              <p class="text-parr"><?php echo $author;?> <br> <?php echo the_date(); ?>  </p>
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
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/lity.js"></script>
