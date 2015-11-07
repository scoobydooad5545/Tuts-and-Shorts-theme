<?php
	$ads = new WP_Query(['post_type'=>'ad']);
		if ($ads->have_posts()) ; while ($ads->have_posts()) ; $ads->the_post(); ?>
				<?php the_field('image');?>

		<?php endwhile; else: ?>
		    <p>Sorry, no pages matched your criteria.</p>
		<?php endif; ?>


?>





