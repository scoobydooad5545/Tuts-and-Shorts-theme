	<div class="row footer hidden-xs">
		<div id="footer">
			<?php wp_footer(); ?>
			<div class="col-md-4">
				<p class="footer-titles">Pages</p>
				<ul class="footer-links">
					<li><a href="http://localhost/blog2">Home</a></li>
					<li><a href="http://localhost/blog2/about/">About</a></li>
					<li><a href="http://localhost/blog2/contact/">Contact</a></li>
					<li><a href="http://localhost/blog2/advertise-with-us/">Advertise with Us</a></li>
				</ul>
			</div>
			
			<div class="col-md-4">
				<p class="footer-titles">Archives</p>
				<ul class="footer-links">
					<li><a href="">October 2015</a></li>
				</ul>
			</div>
			<div class="col-md-4">
				<p class="footer-titles">Get In Touch</p>
			</div>
		</div>
	</div>
	<div class="row visible-xs footer">
		<div id="footer">
			<?php wp_footer(); ?>
				<div class="col-xs-12">
					<p class="footer-titles">Pages</p>
						<ul class="footer-links">
							<li><a href="http://localhost/blog2">Home</a></li>
							<li><a href="http://localhost/blog2/about/">About</a></li>
							<li><a href="http://localhost/blog2/contact/">Contact</a></li>
							<li><a href="http://localhost/blog2/advertise-with-us/">Advertise with Us</a></li>
						</ul>
					<p><span class="footer-copy">&copy;Tuts & Shorts, created by Alyssa Davis</span></p>
				</div>

				<script type="text/javascript">
		        jQuery(document).ready(function() {
		            var hash = document.location.hash;
		            var prefix = "tab_";
		            if (hash) {
		                var tab = jQuery(hash.replace(prefix,"")).attr('href');
		                jQuery('.nav-tabs a[href='+tab+']').tab('show');
		            }
		        });
		        </script>
		        <script>
		        $(function(){
				  var hash = window.location.hash;
				  hash && $('ul.nav a[href="' + hash + '"]').tab('show');

				  $('.nav-tabs a').click(function (e) {
				    $(this).tab('show');
				    var scrollmem = $('body').scrollTop();
				    window.location.hash = this.hash;
				    $('html,body').scrollTop(scrollmem);
				  });
				});
				</script>
      
</div><!-- x content -->
</body>
</html>