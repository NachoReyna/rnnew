<?php
// Thumbnails Support
add_theme_support( 'post-thumbnails' );
 
//Funcion login logo
function my_login_logo() { ?>
  <style type="text/css">
        #login h1 a, .login h1 a {
        width:100%;
        background-repeat: no-repeat;
        background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/logos/favicon.png');
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
 
function my_login_logo_url_title() {
    return 'Nombre del sitio web';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// Post Type
function codex_custom_init() {
    $argsVideos = array(
      'public' => true,
      'label'  => 'Videos',
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
			'taxonomies'  => array( 'category', 'post_tag')
    );
    register_post_type( 'video', $argsVideos );

      $argsBanner = array(
      'public' => true,
      'label'  => 'Banner',
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
			'taxonomies'  => array( 'category', 'post_tag')
    );
    register_post_type( 'banner', $argsBanner );

     $argsPublicidad = array(
      'public' => true,
      'label'  => 'Publicidad',
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
			'taxonomies'  => array( 'category', 'post_tag')
    );
    register_post_type( 'publicidad', $argsPublicidad );
}
add_action( 'init', 'codex_custom_init' );
?>
