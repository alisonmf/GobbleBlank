		<div id="footer">
		
				<ul id="footer-menu">			
					<?php wp_nav_menu( array( 'theme_location' => 'menu-footer', 'container' => '', 'items_wrap' => '%3$s' ) ); ?>					
				</ul>
				
				<span id="copyright">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></span>
				
		</div><!-- /#footer -->

	</div><!-- /#wrapper -->

	<?php wp_footer(); ?>
	
	<!-- Analytics, just replace the UA number -->
	
	<script type="text/javascript">
	/*
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-00000000-00']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	*/
	</script>
	
</body>

</html>