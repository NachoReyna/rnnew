<?php
// Thumbnails Support
add_theme_support( 'post-thumbnails' );

// VIDEO POST TYPE
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
