<?php
// Thumbnails Support
add_theme_support( 'post-thumbnails' );

//Limitar con la funcion get_the_excerpt
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
  array_pop($excerpt);
  $excerpt = implode(" ",$excerpt).'...';
  } else {
  $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

// VIDEO POST TYPE
function codex_custom_init() {
    $argsNoticias = array(
      'public' => true,
      'label'  => 'Noticias',
			'has_archive' => true,
			'supports' => array( 'title', 'category', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
			'taxonomies'  => array( 'category', 'post_tag')
    );
    register_post_type( 'noticias', $argsNoticias );

    $argsProducts = array(
      'public' => true,
      'label'  => 'Blog',
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
			'taxonomies'  => array( 'category', 'post_tag')
    );
    register_post_type( 'blog', $argsProducts );

    $argsVideos = array(
      'public' => true,
      'label'  => 'Videos',
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
			'taxonomies'  => array( 'category', 'post_tag')
    );
    register_post_type( 'video', $argsVideos );
}

add_action( 'init', 'codex_custom_init' );

?>
