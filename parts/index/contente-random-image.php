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

	<div class="container-fluid index-background" style="background-image:url(<?php echo $img ?>)">
		<div class="div-center wow fadeInUp text-center"> 
			<img src="<?php echo get_template_directory_uri() . '/images/gilmara-falconi-barra.png' ;?>" class="img-responsive">
		</div>
	</div>

	
</section>
