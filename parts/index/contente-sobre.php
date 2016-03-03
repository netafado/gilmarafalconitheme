<!-- /.Segunda Parte -->
<section class="container-fluid">
  <div class="row textura">

  <div class="sobre col-sm-6 sobreLeft wow fadeInUp" data-wow-delay='0.2s'>


    <img src="<?php echo get_template_directory_uri() . '/images/logotipo.png'; ?>" class="logo-sobre">

    <?php 
    $query = new WP_Query(array('page_id' => 6)); 
    if($query->have_posts()):
      while($query->have_posts()):
        $query->the_post();

     
        $imgUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  ?>
    
    <p><?php the_excerpt(); ?></p>
    <p><a href="<?php the_permalink(); ?>"> Leia mais</a></p>
  </div>
  <div class="sobre col-sm-6 sobreRight wow fadeInUp" data-wow-delay='0.4s'>
    <a href="<?php the_permalink(); ?>">
      <img src="<?php echo $imgUrl; ?>">
    </a>
  </div>
  <?php 
    endwhile;
    endif;
  wp_reset_postdata();
  ?>

</section>
