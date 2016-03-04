<?php 
	//imagens
	$images = array(
		'back-cereja.jpg',
		'back-morango.jpg',
		'background-image2.png',
		'back-bolo.jpg',
		'bc-bem-casado.jpg'
	);
	$number = rand(0, count($images) - 1);
	$img = get_template_directory_uri();
	$img .= '/images/';
	$img .= $images[$number];
?>
<section class="content-slide">
	<img src="<?php echo get_template_directory_uri() . '/images/back-bolo.jpg' ;?>" class="img-responsive hide slideimage">
	<img src="<?php echo get_template_directory_uri() . '/images/back-cereja.jpg' ;?>" class="img-responsive hide slideimage">
	<img src="<?php echo get_template_directory_uri() . '/images/back-morango.jpg' ;?>" class="img-responsive hide slideimage">
	<img src="<?php echo get_template_directory_uri() . '/images/background-image2.jpg' ;?>" class="img-responsive hide slideimage">
	<img src="<?php echo get_template_directory_uri() . '/images/bc-bem-casado.jpg' ;?>" class="img-responsive hide slideimage">

	<div class="container-fluid index-background" style="background-image:url(<?php echo $img ?>)">
		<div class="div-center wow fadeInUp text-center"> 
			<img src="<?php echo get_template_directory_uri() . '/images/gilmara-falconi-barra.png' ;?>" class="img-responsive">
		</div>
	</div>

	
</section>
