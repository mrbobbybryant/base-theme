<?php

get_header(); ?>

<?php if ( have_posts() ) : ?>
	<section>
		<?php while ( have_posts() ): the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</section>
<?php endif; ?>

<?php get_footer();