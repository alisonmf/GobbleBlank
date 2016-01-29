<?php

// Template Name: Full Width, No Sidebar

get_header(); ?>

<div class="container">

	<article class="span-12">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post-<?php the_ID(); ?>">

			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>

		</div><!-- /.post -->

		<?php endwhile; endif; ?>

	</article><!-- /.span-12 -->

</div>

<?php get_footer(); ?>