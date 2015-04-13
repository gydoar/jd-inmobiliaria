<?php get_header(); ?>

<article>


			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php 

				$tipoinmueble = get_post_meta(get_the_id(), 'tipo_inm', TRUE);
				$ubicacion    = get_post_meta(get_the_id(), 'ubi_inm', TRUE);
				$valor        = get_post_meta(get_the_id(), 'vlr_inm', TRUE);
				$area         = get_post_meta(get_the_id(), 'area_inm', TRUE);
				$habitaciones = get_post_meta(get_the_id(), 'habita_inm', TRUE);
				$banos        = get_post_meta(get_the_id(), 'bano_inm', TRUE);
				$descripcion  = get_post_meta(get_the_id(), 'descrip_inm', TRUE);
			
			 ?>

			 <div class="container" >
			 	
			 	<div id="single__inm">
			 		<h3><?php the_title(); ?></h3>
			 	</div>
			 	<div class="row">
			 		<div class="five columns offset-by-one">
			 			<?php if (has_post_thumbnail()) {the_post_thumbnail('post-thumbnails', 351, 348, true);} ?>
			 		</div>
			 		<div class="six columns">
			 			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos quaerat incidunt culpa fuga. Consectetur veritatis reiciendis nisi neque, iure nobis tenetur, quaerat possimus. Iste veniam quae, molestiae, perferendis sed sunt.
			 		</div>
			 	</div>
			</div>

			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>


	</article>

<?php get_footer(); ?>