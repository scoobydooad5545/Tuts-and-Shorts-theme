<?php get_header(); ?>




</div>
<div class="row second-nav">
	<div>
	  <!-- Nav tabs -->
	  <ul class="nav nav-tabs nav-justified" role="tablist">
	    <li role="presentation" class=" tabs"><a href="#photoshop" aria-controls="home" role="tab" data-toggle="tab">PHOTOSHOP</a></li>
	    <li role="presentation" class="tabs"><a href="#illustrator" aria-controls="profile" role="tab" data-toggle="tab">ILLUSTRATOR</a></li>
	    <li role="presentation" class="tabs"><a href="#html" aria-controls="messages" role="tab" data-toggle="tab">HTML/CSS</a></li>
	    <li role="presentation" class="tabs"><a href="#shortcut" aria-controls="settings" role="tab" data-toggle="tab">SHORTCUTS</a></li>
	  </ul>

	  <!-- Tab panes -->
	  <div class="tab-content">
	    <div role="tabpanel" class="tab-pane active" id="photoshop">

<div class="container">
	<div class="row ">
	<?php

		// The Query
		$photoshop = new WP_Query( array( 'category_name' => 'photoshop' )  ); ?>


		<?php if ( $photoshop->have_posts() ) : ?>

		<?php while ( $photoshop->have_posts() ) : $photoshop->the_post(); ?>

		<?php 

	if ( get_field('columns') == '1' ){
		echo '<div class="col-md-7 col1">';
	}
	elseif (get_field('columns') == '2'){
		echo '<div class="col-md-4 col2">';
	}
	elseif (get_field('columns') == '3') {
		echo '<div class="col-md-5 col3">';
	}
	elseif (get_field('columns') == '4') {
		echo '<div class="col-md-7 col4">';
	}
	elseif (get_field('columns') == '5') {
		echo '<div class="col-md-6 col5">';
	}
	else {
		echo '<div class="col-md-6 col6">';
	}
	?>
		
		<figure class="cap-bot">
		
			<!-- Thumbnail -->
			<a data-toggle="modal" data-target="#m<?php the_id();?>">
				<img class="star img-responsive " src="<?php the_field('thumbnail'); ?>"/>
				
			</a>

			<!-- hover -->
			<figcaption class="box <?php the_field('size');?>">
				<p class="text-center"><span class="big-img-title"><?php the_title(); ?></span></p>
				<hr class="hidden-xs"/>
				<p class="text-center hidden-xs img-des"><?php 
				if(get_field('size') == 'Small' ||  get_field('size') == 'Medium') {
					echo get_field('caption_summary');
				}
				elseif(get_field('size') == 'Large'){ ?></p>
					<div class="row">
						<div class="col-md-4 mt-10 ml20 hidden-xs">
							<p><span class="time"><?php the_field('time');?> min</span></p>
							<img class="timer-icon" src="<?php bloginfo('template_directory'); ?>/imgs/icons/timer-icon.png"/>
						</div>
						<div class="col-md-4 mt-10 ml35 ml-20 hidden-xs">
							<p><span class="beginner"><?php the_field('difficulty');?></span></p>
							<?php 

							if ( get_field('difficulty') == 'Beginner' ){
								echo '<img class="beginner-icon" src="'.get_bloginfo('template_directory').'/imgs/icons/beginner-icon.png"/>';
							}
							elseif (get_field('difficulty') == 'Medium' ) {
								echo '<img class="beginner-icon" src="'.get_bloginfo('template_directory').'/imgs/icons/medium-icon.png"/>';
							} 
							elseif (get_field('difficulty') == 'Advanced' ){
								echo '<img class="beginner-icon" src="'.get_bloginfo('template_directory').'/imgs/icons/advanced-icon.png"/>';
							}
							?>
						</div>
						<div class="col-md-4 mt-10 ml-40 hidden-xs">
							<p><span class="photoshop">Photoshop</span></p>
							<p><span class="ps">Ps</span></p>
						</div>
					</div>
				<?php } ?>
			</figcaption>


			<!-- modal -->
			<div class="modal fade" id="m<?php the_id();?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
			    <div class="modal-dialog modal-lg">
			        <div class="modal-content">
			            <div class="modal-header">
			            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
			            <h4 class="modal-title" id="myModalLabel"><?php the_title(); ?></h4>
			            </div>
			            <div class="modal-body">
			            	<?php 
			            	if( have_rows('accordion') ): ?>
							 
							 <?php while ( have_rows('accordion') ) : the_row(); ?>
			            	<div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
								  <div class="panel panel-default">
								    <div class="panel-heading" role="tab" id="heading-<?php echo $i; ?>">
								      <h4 class="panel-title">
								        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $i; ?>" aria-expanded="false" aria-controls="collapseOne">
								          <?php the_sub_field('steps') ; ?>
								        </a>
								      </h4>
								    </div>
								    <div id="collapse-<?php echo $i; ?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="heading-<?php echo $i; ?>">
								      <div class="panel-body instructions">
								        <?php the_sub_field('instructions') ; ?>
								      </div>
								    </div>
								  </div>
							</div>
							<?php $i++; endwhile; ?>
						<?php endif; ?>
			            <div class="modal-footer">
			                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        	</div>
			    	</div>
			  </div>
			</div>

		</figure>
		<div class="col-md-1  hidden-xs hidden-sm">
			
		</div>
	</div><!--closes row-->

<?php endwhile; endif; ?>

</div>
</div>
   </div>	


			<!--SECOND TAB-->
		    
		    <div role="tabpanel" class="tab-pane" id="illustrator">
		    	
	<div class="container">

			<div class="row ">
			<?php

				// The Query
				$illustrator = new WP_Query( array( 'category_name' => 'illustrator' )  ); ?>


				<?php if ( $illustrator->have_posts() ) : ?>

				<?php while ( $illustrator->have_posts() ) : $illustrator->the_post(); ?>

		<?php 

			if ( get_field('columns') == '1' ){
				echo '<div class="col-md-7 col1">';
			}
			elseif (get_field('columns') == '2'){
				echo '<div class="col-md-5 col2">';
			}
			elseif (get_field('columns') == '3') {
				echo '<div class="col-md-5 col3">';
			}
			elseif (get_field('columns') == '4') {
				echo '<div class="col-md-7 col4">';
			}
			elseif (get_field('columns') == '5') {
				echo '<div class="col-md-6 col5">';
			}
			else {
				echo '<div class="col-md-6 col6">';
			}
		?>
	
		<figure class="cap-bot">
		
			<!-- Thumbnail -->
			<a data-toggle="modal" data-target="#m<?php the_id();?>">
				<img class="star img-responsive " src="<?php the_field('thumbnail'); ?>"/>
				
			</a>

			<!-- hover -->
			<figcaption class="box <?php the_field('size');?>">
				<p class="text-center"><span class="big-img-title"><?php the_title(); ?></span></p>
				<hr class="hidden-xs"/>
				<p class="text-center hidden-xs img-des"><?php 
				if(get_field('size') == 'Small' ||  get_field('size') == 'Medium') {
					echo get_field('caption_summary');
				}
				elseif(get_field('size') == 'Large'){ ?></p>
					<div class="row">
						<div class="col-md-4 mt-10 ml20 hidden-xs">
							<p><span class="time"><?php the_field('time');?> min</span></p>
							<img class="timer-icon" src="<?php bloginfo('template_directory'); ?>/imgs/icons/timer-icon.png"/>
						</div>
						<div class="col-md-4 mt-10 ml35 ml-20 hidden-xs">
							<p><span class="beginner"><?php the_field('difficulty');?></span></p>
							<?php 

							if ( get_field('difficulty') == 'Beginner' ){
								echo '<img class="beginner-icon" src="'.get_bloginfo('template_directory').'/imgs/icons/beginner-icon.png"/>';
							}
							elseif (get_field('difficulty') == 'Medium' ) {
								echo '<img class="beginner-icon" src="'.get_bloginfo('template_directory').'/imgs/icons/medium-icon.png"/>';
							} 
							elseif (get_field('difficulty') == 'Advanced' ){
								echo '<img class="beginner-icon" src="'.get_bloginfo('template_directory').'/imgs/icons/advanced-icon.png"/>';
							}
							?>
						</div>
						<div class="col-md-4 mt-10 ml-40 hidden-xs">
							<p><span class="photoshop">Illustrator</span></p>
							<p><span class="ps">Ai</span></p>
						</div>
					</div>
				<?php } ?>
			</figcaption>

			<!-- modal -->
			<div class="modal fade" id="m<?php the_id();?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
			    <div class="modal-dialog modal-lg">
			        <div class="modal-content">
			            <div class="modal-header">
			            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&amp;times;</button>
			            <h4 class="modal-title" id="myModalLabel"><?php the_title(); ?></h4>
			            </div>
			            <div class="modal-body">
			                <h3>Coming Soon!</h3>
			            </div>
			            <div class="modal-footer">
			                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        	</div>
			    	</div>
			  </div>
			</div>

		</figure>

	</div><!--closes row-->

<?php endwhile; endif; ?>

</div>
</div>
   </div>	
		    
			<!--THIRD TAB-->
		    <div role="tabpanel" class="tab-pane" id="html">
	<div class="container">

			<div class="row ">
			<?php

				// The Query
				$web = new WP_Query( array( 'category_name' => 'web' )  ); ?>


				<?php if ( $web->have_posts() ) : ?>

				<?php while ( $web->have_posts() ) : $web->the_post(); ?>

		<?php 

			if ( get_field('columns') == '1' ){
				echo '<div class="col-md-7 col1">';
			}
			elseif (get_field('columns') == '2'){
				echo '<div class="col-md-5 col2">';
			}
			elseif (get_field('columns') == '3') {
				echo '<div class="col-md-5 col3">';
			}
			elseif (get_field('columns') == '4') {
				echo '<div class="col-md-7 col4">';
			}
			elseif (get_field('columns') == '5') {
				echo '<div class="col-md-6 col5">';
			}
			else {
				echo '<div class="col-md-6 col6">';
			}
		?>
	
		<figure class="cap-bot">
		
			<!-- Thumbnail -->
			<a data-toggle="modal" data-target="#m<?php the_id();?>">
				<img class="star img-responsive " src="<?php the_field('thumbnail'); ?>"/>
				
			</a>

			<!-- hover -->
			<figcaption class="box <?php the_field('size');?>">
				<p class="text-center"><span class="big-img-title"><?php the_title(); ?></span></p>
				<hr class="hidden-xs"/>
				<p class="text-center hidden-xs img-des"><?php 
				if(get_field('size') == 'Small' ||  get_field('size') == 'Medium') {
					echo get_field('caption_summary');
				}
				elseif(get_field('size') == 'Large'){ ?></p>
					<div class="row">
						<div class="col-md-4 mt-10 ml20 hidden-xs">
							<p><span class="time"><?php the_field('time');?> min</span></p>
							<img class="timer-icon" src="<?php bloginfo('template_directory'); ?>/imgs/icons/timer-icon.png"/>
						</div>
						<div class="col-md-4 mt-10 ml35 ml-20 hidden-xs">
							<p><span class="beginner"><?php the_field('difficulty');?></span></p>
							<?php 

							if ( get_field('difficulty') == 'Beginner' ){
								echo '<img class="beginner-icon" src="'.get_bloginfo('template_directory').'/imgs/icons/beginner-icon.png"/>';
							}
							elseif (get_field('difficulty') == 'Medium' ) {
								echo '<img class="beginner-icon" src="'.get_bloginfo('template_directory').'/imgs/icons/medium-icon.png"/>';
							} 
							elseif (get_field('difficulty') == 'Advanced' ){
								echo '<img class="beginner-icon" src="'.get_bloginfo('template_directory').'/imgs/icons/advanced-icon.png"/>';
							}
							?>
						</div>
						<div class="col-md-4 mt-10 ml-40 hidden-xs">
							<p><span class="photoshop">HTML/CSS</span></p>
							<p><span class="ps">Web</span></p>
						</div>
					</div>
				<?php } ?>
			</figcaption>

			<!-- modal -->
			<div class="modal fade" id="m<?php the_id();?>" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
			    <div class="modal-dialog modal-lg">
			        <div class="modal-content">
			            <div class="modal-header">
			            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&amp;times;</button>
			            <h4 class="modal-title" id="myModalLabel"><?php the_title(); ?></h4>
			            </div>
			            <div class="modal-body">
			                <h3>Coming Soon!</h3>
			            </div>
			            <div class="modal-footer">
			                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        	</div>
			    	</div>
			  </div>
			</div>

		</figure>

	</div><!--closes row-->

<?php endwhile; endif; ?>

</div>
</div>
   </div>	


		    <!--FOURTH TAB-->
		    <div role="tabpanel" class="tab-pane" id="shortcut">
		    	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingOne">
					      <h4 class="panel-title">
					        <a class="collapsed"role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
					          Photoshop
					        </a>
					      </h4>
					    </div>
					    <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
					      <div class="panel-body">
					        <div class="table-responsive">
					        	<table class="table table-bordered">
					        		<tr class="">
					        			<td class="table-title">Result</td>
					        			<td class="table-title" width="5">Windows</td>
					        			<td class="table-title">Mac</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Move Tool</td>
					        			<td class="table-info">V</td>
					        			<td class="table-info">V</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Marquee Tool</td>
					        			<td class="table-info">M</td>
					        			<td class="table-info">M</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Lasso Tool</td>
					        			<td class="table-info">L</td>
					        			<td class="table-info">L</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Quick Selection Tool</td>
					        			<td class="table-info">W</td>
					        			<td class="table-info">W</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Crop Tool</td>
					        			<td class="table-info">C</td>
					        			<td class="table-info">C</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Eyedropper Tool</td>
					        			<td class="table-info">I</td>
					        			<td class="table-info">I</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Spot Healing Brush Tool</td>
					        			<td class="table-info">J</td>
					        			<td class="table-info">J</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Brush Tool</td>
					        			<td class="table-info">B</td>
					        			<td class="table-info">B</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Clone Stamp Tool</td>
					        			<td class="table-info">S</td>
					        			<td class="table-info">S</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">History Brush Tool</td>
					        			<td class="table-info">Y</td>
					        			<td class="table-info">Y</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Eraser Tool</td>
					        			<td class="table-info">E</td>
					        			<td class="table-info">E</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Gradient Tool</td>
					        			<td class="table-info">G</td>
					        			<td class="table-info">G</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Dodge Tool</td>
					        			<td class="table-info">O</td>
					        			<td class="table-info">O</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Pen Tool</td>
					        			<td class="table-info">P</td>
					        			<td class="table-info">P</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Type Tool</td>
					        			<td class="table-info">T</td>
					        			<td class="table-info">T</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Path Selection Tool</td>
					        			<td class="table-info">A</td>
					        			<td class="table-info">A</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Rectangle Tool</td>
					        			<td class="table-info">U</td>
					        			<td class="table-info">U</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Hand Tool</td>
					        			<td class="table-info">H</td>
					        			<td class="table-info">H</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Zoom In</td>
					        			<td class="table-info">Ctrl & +</td>
					        			<td class="table-info">Cmnd & +</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Zoom Out</td>
					        			<td class="table-info">Ctrl & -</td>
					        			<td class="table-info">Cmnd & -</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Save</td>
					        			<td class="table-info">Ctrl + S</td>
					        			<td class="table-info">Cmnd + S</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Save As</td>
					        			<td class="table-info"></td>
					        			<td class="table-info"></td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Open</td>
					        			<td class="table-info">Ctrl + O</td>
					        			<td class="table-info">Cmnd + O</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Copy</td>
					        			<td class="table-info">Ctrl + C</td>
					        			<td class="table-info">Cmnd + C</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Paste</td>
					        			<td class="table-info">Ctrl + V</td>
					        			<td class="table-info">Cmnd + V</td>
					        		</tr>
					        		<tr>
					        			<td class="table-info">Cut</td>
					        			<td class="table-info">Ctrl + X</td>
					        			<td class="table-info">Cmnd + X</td>
					        		</tr>
					        	</table>

					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingTwo">
						      <h4 class="panel-title">
						        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          Illustrator
						        </a>
						      </h4>
						    </div>
						    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="panel-body">
						        Coming Soon!!
						      </div>
						    </div>
						  </div>
						  <div class="panel panel-default ">
						    <div class="panel-heading mt-5" role="tab" id="headingThree">
						      <h4 class="panel-title">
						        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          InDesign
						        </a>
						      </h4>
						    </div>
						    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						      <div class="panel-body">
						        Coming Soon!
						      </div>
						    </div>
						  </div>
						</div>

		    </div>
		  </div>

		</div>

<?php if(have_posts()): while (have_posts()) : the_post(); ?>      
	
<?php endwhile; endif; ?>
<div class="row hidden-sm hidden-xs">
		<?php 

		 $longads = new WP_Query([
		 	'post_type'=>'longads',
		 	'orderby' => 'rand',
		 	'posts_per_page' => '1'
		 	]);
		 if ($longads->have_posts()) : while ($longads->have_posts()) : $longads->the_post();?>
			<a href="<?php the_field('long_link'); ?>" target="_blank">
		 		<img class="ad2" src="<?php the_field('long_image'); ?>" alt="">
			</a>
		 <?php endwhile; else: ?>
		    <p>Sorry, no ads matched your criteria.</p>
		<?php endif; ?>
	</div>
		<script>
		
		  </script>
<?php get_footer(); ?>