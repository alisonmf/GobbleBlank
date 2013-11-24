		<div class="footer">
		
				<ul class="footer-menu" class="print">			
					<?php wp_nav_menu( array( 'theme_location' => 'menu-footer', 'container' => '', 'items_wrap' => '%3$s' ) ); ?>					
				</ul>
				
				<span class="copyright">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></span>
				
		</div><!-- /#footer -->

	</div><!-- /#wrapper -->

	<?php
	
		//needed for plugins to hook into
		wp_footer();
	
	?>
	
</body>

</html>