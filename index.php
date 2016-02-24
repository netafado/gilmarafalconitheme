<?php get_header() ?>

<section class="container-fluid index-background">
	
</section>
<!-- /Sobre a gilmara folder: parts/index -->
<?php get_template_part( 'parts/index/contente', 'sobre' )?>
<!-- /Frase  folder: parts/index -->
<?php get_template_part( 'parts/index/contente', 'frase') ?>

<!-- Galeria folder parts/index-->
<?php get_template_part( 'parts/index/contente', 'galeria' ) ?>

<!-- Novidades folder parts/index -->
<?php get_template_part('parts/index/contente', 'novidades') ?>

<?php wp_footer(); ?>
</body>
</html>