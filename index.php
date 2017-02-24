<?php get_header(); ?>
<section id="home">
	<?php
		if( have_posts() ):

			while( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>

			</h4><?php the_content(); ?></h4>

				<?php endwhile;

		endif;
	?>
</section>
<?php get_footer(); ?>
