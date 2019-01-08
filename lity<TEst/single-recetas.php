<?php get_header();?>
<article class="single-recipe">
  <div class="container">
    <?php if( have_posts() ) :
      while( have_posts() ) : the_post();
      $thumbID = get_post_thumbnail_id(get_the_ID());
      $imageThumb = wp_get_attachment_image_src( $thumbID, 'full' );
      $video = get_field('video');?>


      <div class="single-recipe-header" style="background-image:url('<?php echo $imageThumb[0]?>');">

        <div class="single-recipe-information">
          <?php if($video){?>
                  <div class="recipe-video-overlay">
                    <a href="<?php echo $video; ?>" data-lity>
                      <div class="player-button">
                        <i class="fas fa-play"></i>
                      </div>
                    </a>
                  </div>
                <?php } ?>
          <?php include ( TEMPLATEPATH . '/breadcrumbs.php'); ?>
          <h1><?php the_title();?></h1>
          <p><?php the_content();?></p>
          <p>
            <span>Tiempo de Preparación: <?php echo get_field('tiempo_preparacion');?></span><br/>
            <span>Porciones: <?php echo get_field('porciones');?></span><br/>
          </p>
        </div>
      </div>
      <div class="single-recipe-content row">
        <div class="col-lg-4  col-md-4  col-sm-6  col-xs-12 single-recipe-ingredients">
          <h4>Ingredientes</h4>
          <?php echo get_field('ingredientes');?>
        </div>
        <div class="col-lg-8  col-md-8  col-sm-6  col-xs-12 single-recipe-process">
          <?php echo get_field('preparacion');?>
        </div>
      </div>

      <?php endwhile;

    endif;?>
  </div>
</article>
<?php get_footer();?>
<style media="screen">
.recipe-video-overlay{
    background: rgba(255,255,255,0.5);
    position: absolute;
    top:0;
    left:0;
    right: 0;
    bottom: 0;
    .player-button{
      position: absolute;
      top: 50%;
      text-align: center;
      width: 100%;
      margin-top: -13px;
      .fas{
        font-size: 36px;
      }
    }
  }
</style>
