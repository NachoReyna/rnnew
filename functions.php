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
      $argsBanners = array(
      'public' => true,
      'label'  => 'Banners',
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
			'taxonomies'  => array( 'category', 'post_tag')
    );
    register_post_type( 'banners', $argsBanners );
}
add_action( 'init', 'codex_custom_init' );
?>
