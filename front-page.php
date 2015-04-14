<?php get_header(); ?>

	<section id="banner">
			<div id="copi">
				<p>"ADMINISTRAMOS <strong>SU INMUEBLE</strong><br>CON SEGURIDAD PARA QUE <br><strong>VIVA CON TRAQUILIDAD"</strong></p>
			</div>
			<div id="form">
				<label for=""></label>
				 <input type="radio" name="inmueble" value="venta" /> Venta<br />
	             <input type="radio" name="inmueble" value="arriendo" /> Arriendo<br />
	             <input type="radio" name="inmueble" value="todos" /> Todos<br />
	             <input type="submit" value="Buscar" />
			</div>
	</section>

	<section class="container" id="body">
		<div class="twelve columns" id="garantia">
			<h2>GARANTIA</h2>
			<p><strong>JDAVID BELTRAN INMOBILIARIA SAS</strong> dentro de su seriedad y responsabilidad social garantiza.</p>
		</div>

		<div class="row">
			
			<div class="four columns">
				<div class="two columns">
					<img width="40" src="<?php bloginfo('template_url' ); ?>/library/img/icon-uno.png" alt="">
				</div>
				<p class="ten columns num">El pago anticipado del canon de arrendamiento de su inmueble una vez haya sido  arrendado.</p>
			</div>
			<div class="four columns">
				<div class="two columns">
					<img width="40" src="<?php bloginfo('template_url' ); ?>/library/img/icon-dos.png" alt="">
				</div>
				<p class="ten columns num">El inmueble se recibe totalmente inventariado.</p>
			</div>
			<div class="four columns">
				<div class="two columns">
					<img width="40" src="<?php bloginfo('template_url' ); ?>/library/img/icon-tres.png" alt="">
				</div>
				<p class="ten columns num">Promocionamos su inmueble a través de nuestra página web, pancartas, afiches, periódicos.</p>
			</div>
		</div>
		
		<!-- Casas bloque 1 -->
		<div id="casas">

				<?php global $wp_query;
				$wp_query = new WP_Query("post_type=portfolio&post_status=publish&posts_per_page=4");
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

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

				<div class="three columns">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('front-page' ); ?></a>
					<h3><?php echo $ubicacion; ?></h3>
					<p>Tipo de inmueble - <?php echo $tipoinmueble; ?></p>
				</div>

				 
				<?php endwhile; ?>

		</div>

		<div id="casas">

				<?php global $wp_query;
				$wp_query = new WP_Query("post_type=portfolio&post_status=publish&posts_per_page=-1&showposts=4&offset=4");
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

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

				<div class="three columns">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('front-page' ); ?></a>
					<h3><?php echo $ubicacion; ?></h3>
					<p>Tipo de inmueble - <?php echo $tipoinmueble; ?></p>
				</div>

				 
				<?php endwhile; ?>

		</div>
	
	



	</section>

	<section id="mapa">
		<iframe width="100%" height="262" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=4.705711,-74.09665&amp;num=1&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll=4.705747,-74.096537&amp;output=embed"></iframe>
	</section>

<?php get_footer(); ?>