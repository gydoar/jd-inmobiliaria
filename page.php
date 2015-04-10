<?php get_header(); ?>

	<article class="container" id="page">

		<div class="ten columns offset-by-one">
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

		</div>

	</article>

<?php get_footer(); ?>