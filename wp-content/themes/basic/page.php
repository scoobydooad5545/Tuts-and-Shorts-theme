<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>

<div class="row">
	
	<div class="col-md-4 hvr-grow mt60 ml15 ml20">
		<div class="row box-head ">
			<p class="text-center mt30"><span class="dimensions">217x825</span></p>
		</div>
		<div class="row box-sec ">
			<p class="text-center mb47 mt10"><span class="box-info">Mulitple Pages</span></p>
			
			<p class="text-center mb47"><span class="box-info">Free Cancelation</span></p>
			
			<p class="text-center"><span class="box-info">Multiple Advertisments</span></p>
			
			<p class="text-center"><span class="money">$</span><span class="fifteen">15</span><span class="month">/mo</span></p>
		</div>
		<div class="row box-foot">
			<p class="text-center mt20"><span class="choose">Choose Plan</span></p>
		</div>
	</div>
	<div class="col-md-4 hvr-grow mt60 ml-10">
		<div class="row box-head">
			<p class="text-center mt30"><span class="dimensions">309x195</span></p>
		</div>
		<div class="row box-sec ">
			<p class="text-center mb47 mt10"><span class="box-info">Mulitple Pages</span></p>
			
			<p class="text-center mb47"><span class="box-info">Free Cancelation</span></p>
			
			<p class="text-center"><span class="box-info">Multiple Advertisments</span></p>
			
			<p class="text-center"><span class="money">$</span><span class="fifteen">20</span><span class="month">/mo</span></p>
		</div>
		<div class="row box-foot">
			<p class="text-center mt20"><span class="choose">Choose Plan</span></p>
		</div>
	</div>

	<div class="col-md-4 hvr-grow mt60 ml-10">
		<div class="row box-head">
			<p class="text-center mt30"><span class="dimensions">979x115</span></p>
		</div>
		<div class="row box-sec ">
			<p class="text-center mb47 mt10"><span class="box-info">Mulitple Pages</span></p>
			
			<p class="text-center mb47"><span class="box-info">Free Cancelation</span></p>
			
			<p class="text-center"><span class="box-info">Multiple Advertisments</span></p>
			
			<p class="text-center"><span class="money">$</span><span class="fifteen">30</span><span class="month">/mo</span></p>
		</div>
		<div class="row box-foot">
			<p class="text-center mt20"><span class="choose">Choose Plan</span></p>
		</div>
	</div>
</div>
















<?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>