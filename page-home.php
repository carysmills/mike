<?php get_header();  ?>

  <div class="container">

    <div class="content1">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <?php endwhile; // end the loop?>
      <h1><?php bloginfo( 'name' ); ?></h1>
      <h2><?php bloginfo( 'description' ); ?></h2>

      <div class="bio">
        <?php the_content(); ?>
      </div>

    </div> <!-- /,content -->

  <a href="#"><div class="content2 clearfix"> 
    <div class="paper" style="background-image: url('<?php the_field('paper_image'); ?>'); background-repeat: no-repeat; background-size: contain; background-position: center;"></div>
    <div class="paper" style="background-image: url('<?php the_field('paper_image_2'); ?>'); background-repeat: no-repeat; background-size: contain; background-position: center;"></div>
    <div class="paper" style="background-image: url('<?php the_field('paper_image_3'); ?>'); background-repeat: no-repeat; background-size: contain; background-position: center;"></div>
    <div class="paper" style="background-image: url('<?php the_field('paper_image_4'); ?>'); background-repeat: no-repeat; background-size: contain; background-position: center;"></div>
    <div class="paper" style="background-image: url('<?php the_field('paper_image_5'); ?>'); background-repeat: no-repeat; background-size: contain; background-position: center;"></div>
    <div class="paper" style="background-image: url('<?php the_field('paper_image_6'); ?>'); background-repeat: no-repeat; background-size: contain; background-position: center;"></div>
  </div></a> <!-- /,content2 -->

  </div> <!-- /.container -->

<?php get_footer(); ?>