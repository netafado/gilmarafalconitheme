<section class="novidade">
 <div class="container">
    <div class="row">
    <h1 class="novidades-title">Novidades</h1>


  <?php 
      $queryNo = new WP_Query(array(
        'post_type' => 'novidades',
        'post_count' => 6
  )); ?>

        <?php if($queryNo->have_posts()):
          while($queryNo->have_posts()):
            $queryNo->the_post();
         ?>
           <div class="novidade-post col-sm-4">
            <div class="novidade-wrapper">
              <?php the_post_thumbnail('img-horizontal', array('class' => 'img-responsive')); ?>
               <a href="<?php the_permalink(); ?>">
                  <h1><?php the_title(); ?></h1>
                  <?php the_excerpt(); ?>
                  <p>Leia mais...</p>
               </a>
            </div>
           
       
      </div>
        <?php endwhile;
            endif;
        // Restore original Post Data
      wp_reset_postdata();
      ?>
    </div>


</div>

</section>