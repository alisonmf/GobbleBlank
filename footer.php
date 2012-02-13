		<div id="footer">
				<ul id="footer-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'menu-footer', 'container' => '', 'items_wrap' => '%3$s' ) ); ?>
				</ul>
			&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>
		</div>

	</div>

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
