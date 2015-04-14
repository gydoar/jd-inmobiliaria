<?php get_header(); ?>

<article class="container" id="single__inm--tax">

		<div>

			<h3>Ventas y Arriendos</h3>

			<ul class="center fondo--red">
				<li>Inmueble</li>
				<li>Ubicación</li>
				<li>V. Venta</li>
				<li>Área</li>
			</ul>
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php 

					$tipoinmueble = get_post_meta(get_the_id(), 'tipo_inm', TRUE);
					$ubicacion    = get_post_meta(get_the_id(), 'ubi_inm', TRUE);
					$valor        = get_post_meta(get_the_id(), 'vlr_inm', TRUE);
					$area         = get_post_meta(get_the_id(), 'area_inm', TRUE);
					$habitaciones = get_post_meta(get_the_id(), 'habita_inm', TRUE);
					$banos        = get_post_meta(get_the_id(), 'bano_inm', TRUE);
					$descripcion  = get_post_meta(get_the_id(), 'descrip_inm', TRUE);

					$tel_fijo     = get_post_meta(get_the_id(), 'tel_inm', TRUE);
					$tel_movil    = get_post_meta(get_the_id(), 'mov_inm', TRUE);
					$direccion    = get_post_meta(get_the_id(), 'dir_inm', TRUE);
				
				 ?>	
					

				<div class="tax__inm">
					<div class="two columns">
						<?php the_post_thumbnail('img_item_inm' ); ?>
					</div>
					<div class="ten columns">
						<ul class="des_tax">
							<li><?php echo $tipoinmueble; ?></li>
							<li><?php echo $ubicacion; ?></li>
							<li><?php echo $valor; ?></li>
							<li><?php echo $area; ?></li>
						</ul>
					<p><?php echo $descripcion; ?></p>
					</div>
				</div>


			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

		</div>

	</article>

<?php get_footer(); ?>