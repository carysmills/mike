<?php get_header();  ?>

  <div class="contact_container">

    <div class="contact_content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

   <div class="twitter"><?php the_field('twitter'); ?></div>

  </div> <!-- /.container -->
<?php get_footer(); ?>