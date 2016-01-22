<?php get_header(); ?>

	<div class="span-8">

			<?php if ( have_posts() ): ?>
				<h2>Search Results for '<?php echo get_search_query(); ?>'</h2>
				<ol>
				<?php while ( have_posts() ) : the_post(); ?>
					<li>
						<article>
							<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
							<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
							<?php the_content(); ?>
						</article>
					</li>
				<?php endwhile; ?>
				</ol>
				<?php else: ?>
				<h2>No results found for '<?php echo get_search_query(); ?>'</h2>
			<?php endif; ?>

		</div><!-- /.span-8 -->

	<div class="sidebar span-4 omega">

		<?php get_sidebar(); ?>

	</div><!-- /.span-4 -->

<?php get_footer(); ?>
