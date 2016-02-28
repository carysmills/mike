<?php get_header();  ?>

<div class="main_portfolio">
  <div class="container">


    <div class= "portfolio_items"> 

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>

      <button class="filter" data-filter="all">View all publications</button>
      <button class="filter citizen_button" data-filter=".category-1">The Ottawa Citizen</button>
      <button class="filter metro_button" data-filter=".category-2">Metro Ottawa</button>
      <button class="filter star_button" data-filter=".category-3">The Toronto Star</button>
      <button class="filter post_button" data-filter=".category-4">The National Post</button>
      <button class="filter whig_button" data-filter=".category-5">The Kingston Whig-Standard</button>

      <div id="Container">

      <?php if( have_rows('citizen') ): ?>

        <?php while( have_rows('citizen') ): the_row(); 

          // vars
          $citizen_link = get_sub_field('citizen_link');
          $citizen_headline = get_sub_field('citizen_headline');
          $citizen_date = get_sub_field('citizen_date');
          $citizen_lede = get_sub_field('citizen_lede');
          ?>

          <div class="mix citizen category-1">
            <h3> <?php echo $citizen_headline; ?></h3>
            <p> <?php echo $citizen_lede; ?><a target="_blank" href="<?php echo $citizen_link; ?>">
            <span class="read">Read more</span></a></p>
            <p class="date">The Ottawa Citizen / <?php echo $citizen_date; ?></p>
          </div>

        <?php endwhile; ?>
      <?php endif; ?>



      <?php if( have_rows('metro') ): ?>

        <?php while( have_rows('metro') ): the_row(); 

          // vars
          $metro_link = get_sub_field('metro_link');
          $metro_headline = get_sub_field('metro_headline');
          $metro_date = get_sub_field('metro_date');
          $metro_lede = get_sub_field('metro_lede');
          ?>

          <div class="mix metro category-2">
            <h3> <?php echo $metro_headline; ?></h3>
            <p> <?php echo $metro_lede; ?><a target="_blank" href="<?php echo $metro_link; ?>">
            <span class="read">Read more</span></a></p>
            <p class="date">Metro Ottawa / <?php echo $metro_date; ?></p>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>


      <?php if( have_rows('star') ): ?>

        <?php while( have_rows('star') ): the_row(); 

          // vars
          $star_link = get_sub_field('star_link');
          $star_headline = get_sub_field('star_headline');
          $star_date = get_sub_field('star_date');
          $star_lede = get_sub_field('star_lede');
          ?>

          <div class="mix star category-3">
            <h3> <?php echo $star_headline; ?></h3>
            <p> <?php echo $star_lede; ?><a target="_blank" href="<?php echo $star_link; ?>">
            <span class="read">Read more</span></a></p>
            <p class="date">The Toronto Star / <?php echo $star_date; ?></p>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>



      <?php if( have_rows('post') ): ?>

        <?php while( have_rows('post') ): the_row(); 

          // vars
          $post_link = get_sub_field('post_link');
          $post_headline = get_sub_field('post_headline');
          $post_date = get_sub_field('post_date');
          $post_lede = get_sub_field('post_lede');
          ?>

          <div class="mix post category-4">
            <h3> <?php echo $post_headline; ?></h3>
            <p> <?php echo $post_lede; ?><a target="_blank" href="<?php echo $post_link; ?>">
            <span class="read">Read more</span></a></p>
            <p class="date">The National Post / <?php echo $post_date; ?></p>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

      <?php if( have_rows('whig') ): ?>

        <?php while( have_rows('whig') ): the_row(); 

          // vars
          $whig_link = get_sub_field('whig_link');
          $whig_headline = get_sub_field('whig_headline');
          $whig_date = get_sub_field('whig_date');
          $whig_lede = get_sub_field('whig_lede');
          ?>

          <div class="mix whig category-5">
            <h3> <?php echo $whig_headline; ?></h3>
            <p> <?php echo $whig_lede; ?><a target="_blank" href="<?php echo $whig_link; ?>">
            <span class="read">Read more</span></a></p>
            <p class="date">Kingston Whig-Standard / <?php echo $whig_date; ?></p>
          </div>

        </div>  
        <?php endwhile; ?>
      <?php endif; ?>

  </div>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>