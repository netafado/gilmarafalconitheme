<?php get_header() ?>


<!-- Imagem full screen -->
<?php get_template_part( 'parts/index/contente', 'random-image' )?>
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
		<div class="col-sm-4 facebook wow fadeInUp">
			<a href="https://www.facebook.com/GilmaraFalconi" target="_blank"><img src="<?php echo get_template_directory_uri() . '/images/facebook.jpg' ?>"></a>
		</div>
		<div class="col-sm-4 twitter wow fadeInUp">
			<a href="#"><img src="<?php echo get_template_directory_uri() . '/images/twitter.jpg' ?>"></a>
		</div>
	</div>
</section>

<?php wp_footer(); ?>
</body>
</html>