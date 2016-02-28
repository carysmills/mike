<?php get_header();  ?>

<div class="about_main clearfix">

      <div class="headshot">       
      	      <div class="headshot2" style="background-image: url('<?php the_field('headshot'); ?>'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>     
	 </div>
	 
  <div class="about_container">

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->

<?php get_footer(); ?>