<?php get_header(); ?>

<article class="container" id="single__inm--tax">

		<div>

			<h3>Ventas y Arriendos</h3>
			<div class="center fondo--red eleven columns offset-by-one">
				<ul class="eleven columns offset-by-two">
					<li class="three columns">Inmueble</li>
					<li class="two columns">Ubicación</li>
					<li class="three columns">&nbsp;&nbsp;&nbsp;&nbsp;V. Venta</li>
					<li class="three columns">Área</li>
				</ul>
			</div>
				
		
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
					

				<div class="tax__inm offset-by-one eleven columns">
					<div class="two columns">
						<?php the_post_thumbnail('img_item_inm' ); ?>
					</div>
					<div class="ten columns">
						<ul class="des_tax">
							<li class="three columns"><?php echo $tipoinmueble; ?></li>
							<li class="three columns"><?php echo $ubicacion; ?></li>
							<li class="three columns"><?php echo $valor; ?></li>
							<li class="three columns"><?php echo $area; ?></li>
						</ul>
					
					</div>
					<p class="eight columns justify"><?php echo $descripcion; ?></p>
					<a class="two columns btn__tax" href="<?php the_permalink(); ?>">Ver más</a>
				</div>


			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

		</div>

	</article>

<?php get_footer(); ?>