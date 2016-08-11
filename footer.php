	<div class="container">

		<footer class="footer span-12">

				<ul class="footer-menu span-8" class="print">

					<?php wp_nav_menu( array( 'theme_location' => 'menu-footer', 'container' => '', 'items_wrap' => '%3$s' ) ); ?>

				</ul><!-- /.span-8 -->

				<div class="span-4 omega">

					<span class="copyright">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></span>
					
				</div><!-- /.span-4 -->

		</footer><!-- /.footer -->

	</div><!-- /.container -->

	<?php wp_footer(); ?>

</body>

</html>
