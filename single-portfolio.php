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
			 			<h4 class="center fondo--red">Infomación General</h4>
			 			<div class="row">
			 				<div class="six columns info__inm_1">
			 					<li><strong>Tipo de inmueble:</strong></li>
								<li><strong>Ubicación:</strong></li>
								<li><strong>Valor de venta:</strong></li>
								<li><strong>Área:</strong></li>
								<li><strong>Habitaciones:</strong></li>
								<li><strong>Baños:</strong></li>
			 				</div>

			 				<div class="six columns info__inm">
			 					<li><?php echo $tipoinmueble; ?></li>
			 					<li><?php echo $ubicacion; ?></li>
			 					<li><?php echo $valor; ?></li>
			 					<li><?php echo $area; ?></li>
			 					<li><?php echo $habitaciones; ?></li>
			 					<li><?php echo $banos; ?></li>
			 				</div>
			 			</div>
			 			<p class="des__inm"><?php echo $descripcion; ?></p>
			 		</div>
			 	</div>
			</div>

			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>


	</article>

<?php get_footer(); ?>