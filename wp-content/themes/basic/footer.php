	<div class="row footer hidden-xs">
		<div id="footer">
			<?php wp_footer(); ?>
			<div class="col-md-4">
				<p class="footer-titles">Pages</p>
				<ul class="footer-links">
					<li><a href="<?php bloginfo('url');?>/">Home</a></li>
					<li><a href="<?php bloginfo('url');?>/about/">About</a></li>
					<li><a href="<?php bloginfo('url');?>/contact/">Contact</a></li>
					<li><a href="<?php bloginfo('url');?>/advertise-with-us/">Advertise with Us</a></li>
				</ul>
			</div>
			
			<div class="col-md-4">
				<p class="footer-titles">Contact Me</p>
				<ul class="footer-links">
					<li>Alyssa Davis</li>
					<li><a href="mailto:alyssa.davis@viscomcenter.com">alyssa.davis@viscomcenter.com</a></li>
					<li><a href="http://alyssadavisdesign.com/" target="_blank">alyssadavisdesign.com</a></li>
				</ul>
			</div>
			<div class="col-md-4">
				
			</div>
		</div>
	</div>
	<div class="row visible-xs footer">
		<div id="footer">
			<?php wp_footer(); ?>
				<div class="col-xs-12">
					<p class="footer-titles">Pages</p>
						<ul class="footer-links">
							<li><a href="<?php bloginfo('url');?>/">Home</a></li>
							<li><a href="<?php bloginfo('url');?>/about/">About</a></li>
							<li><a href="<?php bloginfo('url');?>/contact/">Contact</a></li>
							<li><a href="<?php bloginfo('url');?>/advertise-with-us/">Advertise with Us</a></li>
						</ul>
					<p><span class="footer-copy">&copy;Tuts & Shorts, created by Alyssa Davis</span></p>
				</div>


	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	


				<script type="text/javascript">

		       // Javascript to enable link to tab
				var url = document.location.toString();
				if (url.match('#')) {

				    $('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;
				} 

				// Change hash for page-reload
				$('.nav-tabs a').on('shown.bs.tab', function (e) {
				    window.location.hash = e.target.hash;
				})

		        </script>
		       
      
</div><!-- x content -->
</body>
</html>