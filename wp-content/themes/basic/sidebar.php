<?php
	$ads = new WP_Query([
		'post_type'      =>'ad',
		'orderby'        => 'rand',
		'posts_per_page' => '1'
		]);
		if ($ads->have_posts()) ; while ($ads->have_posts()); $ads->the_post(); ?>
				<a href="<?php the_field('link');?>" target="_blank">
					<img src="<?php the_field('image');?>" alt="">
				</a>

		<?php endwhile; else: ?>
		    <p>Sorry, no pages matched your criteria.</p>
		<?php endif; ?>


?>





