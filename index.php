<?php get_header() ?>
<?php 
	//imagens
	$images = array(
		'back-arrumadinho.jpg',
		'back-cereja.jpg',
		'back-morango.jpg',
		'background-image2.png',
		'doces-fino5.jpg',
		'back-bolo.jpg'
	);
	$number = rand(0, count($images) - 1);
	$img = get_template_directory_uri();
	$img .= '/images/';
	$img .= $images[$number];
?>
<section class="container-fluid index-background" style="background-image:url(<?php echo $img ?>)">
	
</section>
<!-- /Sobre a gilmara folder: parts/index -->
<?php get_template_part( 'parts/index/contente', 'sobre' )?>
<!-- /Frase  folder: parts/index -->
<?php get_template_part( 'parts/index/contente', 'frase') ?>

<!-- Galeria folder parts/index-->
<?php get_template_part( 'parts/index/contente', 'galeria' ) ?>

<!-- Novidades folder parts/index -->
<?php get_template_part('parts/index/contente', 'novidades') ?>

<section class="container-fluid">
	<div class="row social-midia">
		<div class="col-sm-4 instagran">
			<a href="#"><img src="<?php echo get_template_directory_uri() . '/images/instagran.jpg' ?>"></a>
		</div>
		<div class="col-sm-4 facebook">
			<a href="https://www.facebook.com/GilmaraFalconi" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/facebook.jpg' ?>"></a>
		</div>
		<div class="col-sm-4 twitter">
			<a href="#"><img src="<?php echo get_template_directory_uri() . '/images/twitter.jpg' ?>"></a>
		</div>
	</div>
</section>

<?php wp_footer(); ?>
</body>
</html>