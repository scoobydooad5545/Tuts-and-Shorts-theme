<?php

		 $ads = new WP_Query([
		 	'post_type'=>'ads',
		 	'orderby' => 'rand',
		 	'posts_per_page' => '2'
		 	]);
		 if ($ads->have_posts()) : while ($ads->have_posts()) : $ads->the_post();?>
			<a href="<?php the_field('link'); ?>" target="_blank">
		 		<img class="ad1" src="<?php the_field('image'); ?>" alt="">
			</a>
		 <?php endwhile; else: ?>
		    <p>Sorry, no ads matched your criteria.</p>
		<?php endif; ?>	







		












