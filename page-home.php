<?php get_header(); ?>

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

	<?php
		// you can get creative here, make custom fields, etc
	?>

	<div class="span-4">
		content 1 <i class="fa fa-eye"></i>
	</div>

	<div class="span-4">
		content 2 <i class="fa fa-heart"></i>
	</div>

	<div class="span-4 omega">
		content 3 <i class="fa fa-globe"></i>
	</div>

<?php get_footer(); ?>