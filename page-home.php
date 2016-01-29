<?php get_header(); ?>

<div class="container">

	<div class="span-12">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="post-<?php the_ID(); ?>">

				<?php
				//put your h1 for home page in content area

				the_content();
				?>

			</div>

		<?php endwhile;  else :  endif; ?>

	</div><!-- /.span-12 -->

</div>

<?php get_footer(); ?>