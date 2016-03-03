<?php
//adiciona os spripts CSS e JS na página
function addScripts(){
	wp_enqueue_style("Bootstrap", get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0');
	wp_enqueue_style( "Estilo", get_template_directory_uri() . '/css/app.css', array(), '1.0');
  wp_enqueue_style( "animate", get_template_directory_uri() . '/css/animate.css', $ver = false );


	wp_enqueue_script('jquery');
	wp_enqueue_script("bootstrap", get_template_directory_uri() . '/js/bootstrap.min.js', '1.0',array('jquery'), true);
  wp_enqueue_script("wow", get_template_directory_uri() . '/js/wow.min.js', '1.0',array('jquery'), true);

  if(is_home()){
    wp_enqueue_script("slideshow", get_template_directory_uri() . '/js/slideshow.js', '1.0', true);
  }

	wp_enqueue_script("app", get_template_directory_uri() . '/js/app.js', '1.0', array('jquery'), true);

}
add_action( 'wp_enqueue_scripts', 'addScripts' );


// arruma a navbar do bootstrap para trabalhar com o wordpress
require_once('wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'menu-principal' => __( 'menu-principal', 'Gilmara Falconi' ),
) );

add_theme_support( 'post-thumbnails' );
add_image_size ( 'img-horizontal',  370, 400, $crop = true );


function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'my_add_excerpts_to_pages' );


//função para adicionar novos tipos de post ao painel admin
function new_post_type(){
	//adicona novidades
	register_post_type( 'novidades',
    array(
      'labels' => array(
        'name' => __( 'novidades' ),
        'singular_name' => __( 'Product' ),
         'rewrite' => array('slug' => 'novidades'),
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt')
    )
  );
	//adicona serviços
	register_post_type( 'servicos', 
		array(
			'labels' => array(
        	'name' => __( 'Serviços' ),
        	'singular_name' => __( 'Serviço' ),
         	'rewrite' => array('slug' => 'servico'),
      	),
     	 'public' => true,
      	'has_archive' => true,
      	'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt')
		) );
}
add_action( 'init', 'new_post_type' );
if ( ! isset( $content_width ) ) {
    $content_width = 1100;
}
?>