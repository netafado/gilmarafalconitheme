<section class="container-fluid">

<!-- Query post -->
<?php $query2 = new WP_Query(array(
    'post_type' => 'page',
    'post_parent' => 41,
    'post_count' => 9
)); ?>

<!-- Post que tem a template destaque como "parent" -->
  <div class="row">

  <?php 
    $delay = 0.4;
    if($query2->have_posts()):
      while($query2->have_posts()):
        $query2->the_post();
        $imgUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  ?>

   <div class="col-sm-4 img-destaque wow fadeInUp" style="background-image:url(<?php echo $imgUrl ?>)" data-wow-delay="<?php echo $delay . 's'; $delay += 0.4; ?>">
      
      <a href="<?php the_permalink(); ?>">
      <h1><?php the_title() ?></h1></a>
  </div>
  
    <?php
    endwhile;
    endif;
    wp_reset_postdata();
    ?>
</section>