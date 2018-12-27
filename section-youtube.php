<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<div class="section-youtube">
  <h1 class=""><span><i class="fab fa-youtube"></i> Videos nuestro canal</span></h1>
  <div class="carouseles">
    <div class="carousel-cell">
      <a target="_blank" href="http://bit.ly/2CxpFuE">
        <img src="<?php bloginfo('template_url');?>/images/youtube/fobia.jpg" alt="Especiales" />
      </a>
    </div>
    <div class="carousel-cell">
      <a target="_blank" href="http://bit.ly/2AgcNqX">
        <img src="<?php bloginfo('template_url');?>/images/youtube/mejores.jpg" alt="Mejores Discos" />
      </a>
    </div>
    <div class="carousel-cell">
      <a target="_blank" href="http://bit.ly/2V6kbOt">
        <img src="<?php bloginfo('template_url');?>/images/youtube/mensajes.jpg" alt="Curiosidades" />
      </a>
    </div>
    <div class="carousel-cell">
      <a target="_blank" href="http://bit.ly/2GDNTr9">
        <img src="<?php bloginfo('template_url');?>/images/youtube/club27.jpg" alt="El Club de los 27" />
      </a>
    </div>
    <div class="carousel-cell">
      <a target="_blank" href="http://bit.ly/2V4Mn4x">
        <img src="<?php bloginfo('template_url');?>/images/youtube/pachuca.jpg" alt="Experiencias" />
      </a>
    </div>
    <div class="carousel-cell">
      <a target="_blank" href="http://bit.ly/2Sk9PbY">
        <img src="<?php bloginfo('template_url');?>/images/youtube/rockstar.jpg" alt="Peliculas" />
      </a>
    </div>
  </div>
</div>


<script type="text/javascript">
// external js: flickity.pkgd.js

var carousel = document.querySelector('.carouseles');
var flkty = new Flickity( carousel, {
  imagesLoaded: true,
  percentPosition: false,
});

var imgs = carousel.querySelectorAll('.carousel-cell img');
// get transform property
var docStyle = document.documentElement.style;
var transformProp = typeof docStyle.transform == 'string' ?
  'transform' : 'WebkitTransform';

flkty.on( 'scroll', function() {
  flkty.slides.forEach( function( slide, i ) {
    var img = imgs[i];
    var x = ( slide.target + flkty.x ) * -1/3;
    img.style[ transformProp ] = 'translateX(' + x  + 'px)';
  });
});
</script>
<style media="screen">
/* external css: flickity.css */

* { box-sizing: border-box; }

body { font-family: sans-serif; }

.carousel {
background: #EEE;
}

.carousel-cell {
margin-right: 20px;
overflow: hidden;
}

.carousel-cell img {
display: block;
height: 200px;
}

@media screen and ( min-width: 768px ) {
.carousel-cell img {
  height: 400px;
}
}
</style>
