<section class="galeria container-fluid">
<?php $query2 = new WP_Query(array(
    'post_type' => 'page',
    'post_parent' => 41,
    'post_count' => 9
)); ?>
  <div class="row">
  <?php 
    if($query2->have_posts()):
      while($query2->have_posts()):
        $query2->the_post();
        $imgUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  ?>
   <div class="col-sm-4 img-destaque" style="background-image:url(<?php echo $imgUrl ?>)">
      
      <a href="<?php the_permalink(); ?>">
      <h1><?php the_title() ?></h1></a>
    </div>
    <?php
    endwhile;
    endif;
    wp_reset_postdata();
    ?>
</section>