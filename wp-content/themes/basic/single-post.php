<?php
if( have_rows('faqs') ):
?>
	<?php while ( have_rows('faqs') ) : the_row(); ?>
		<div id="faq_container"> 
			<div class="faq">
				<div class="faq_question">
					<span class="question"><?php the_sub_field('faq_question'); ?> </span>
					<span class="accordion-button-icon fa fa-plus"></span>
				</div>
				<div class="faq_answer_container">
					<div class="faq_answer">
						<span><?php the_sub_field('faq_answer'); ?></span>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>