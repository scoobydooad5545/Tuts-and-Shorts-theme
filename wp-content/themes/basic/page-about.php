<?php get_header();
/*
Template Name: About Page
*/
?>


<div class="row">


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="col-md-9">
			
	  	<h1><?php the_title(); ?></h1>
	 	<?php the_content(); ?>
	</div>
	
	<div class="col-md-3 hidden-sm hidden-xs">
		<?php get_sidebar(); ?>	
	</div>
		
</div>

	

  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>