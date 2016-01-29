<?php get_header(); ?>

<div class="container">

	<article class="span-8">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post-<?php the_ID(); ?>">

			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>

		</div><!-- /.post -->

		<?php endwhile; endif; ?>

	</article><!-- /.content -->

	<aside class="sidebar span-4 omega">

		<?php get_sidebar(); ?>

	</aside>

</div>

<?php get_footer(); ?>