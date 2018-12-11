<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/lib/framework.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/generals.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/lib/respond.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/lib/modernizr.js"></script>
<script type="text/javascript">
  Modernizr.load({
    test: Modernizr.geolocation,
    yep : 'geo.js',
    nope: 'geo-polyfill.js'
  });
</script>
<![endif]-->
<?php wp_footer(); ?>
</body>
</html>
