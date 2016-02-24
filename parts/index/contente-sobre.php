<!-- /.Segunda Parte -->
<section class="container-fluid">
  <div class="row">
  <?php $query = new WP_Query(array('page_id' => 6)); 
    if($query->have_posts()):
      while($query->have_posts()):
        $query->the_post();
  ?>
  <div class="sobre col-sm-6">
    <h1><?php the_title(); ?> </h1>
    <p><?php the_excerpt(); ?></p>
    <p><a href="<?php the_permalink(); ?>"> Leia mais</a></p>
  </div>
  <div class="sobre col-sm-6">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail() ; ?></a>
  </div>
  <?php 
    endwhile;
    endif;
  wp_reset_postdata();
  ?>

</section>
