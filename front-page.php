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

		<div>
				
				<?php global $wp_query;
				$wp_query = new WP_Query("post_type=portfolio&post_status=publish&p=89");
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

				<?php the_title() ?><br>
				<?php echo $valor; ?><br>
				<?php echo $banos; ?><br>
				<?php echo $habitaciones; ?>

				 
				<?php endwhile; ?>


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

		<div id="casas">
			<?php global $wp_query;
				$wp_query = new WP_Query("post_type=portfolio&post_status=publish&p=89");
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
					<div class="grid">
						<figure class="effect-sarah">
								<img src="<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('font-page' ); ?></a>" alt="img13"/>
								<figcaption>
									<h2><?php echo $tipoinmueble; ?></h2>
									<p>Sarah likes to watch clouds. She's quite depressed.</p>
									<a href="<?php the_permalink(); ?>">View more</a>
								</figcaption>			
						</figure>
					</div>
				</div>

				 
				<?php endwhile; ?>
			

			<div class="three columns">
				<div class="grid">
					<figure class="effect-sarah">
							<img src="<?php bloginfo('template_url' ); ?>/library/img/13.jpg" alt="img13"/>
							<figcaption>
								<h2>Free <span>Sarah</span></h2>
								<p>Sarah likes to watch clouds. She's quite depressed.</p>
								<a href="#">View more</a>
							</figcaption>			
					</figure>
				</div>
			</div>
			<div class="three columns">
				<div class="grid">
					<figure class="effect-sarah">
							<img src="<?php bloginfo('template_url' ); ?>/library/img/13.jpg" alt="img13"/>
							<figcaption>
								<h2>Free <span>Sarah</span></h2>
								<p>Sarah likes to watch clouds. She's quite depressed.</p>
								<a href="#">View more</a>
							</figcaption>			
					</figure>
				</div>
			</div>
			<div class="three columns">
				<div class="grid">
					<figure class="effect-sarah">
							<img src="<?php bloginfo('template_url' ); ?>/library/img/13.jpg" alt="img13"/>
							<figcaption>
								<h2>Free <span>Sarah</span></h2>
								<p>Sarah likes to watch clouds. She's quite depressed.</p>
								<a href="#">View more</a>
							</figcaption>			
					</figure>
				</div>
			</div>
		</div>

		<div id="casas">
			<div class="three columns">
				<div class="grid">
					<figure class="effect-sarah">
							<img src="<?php bloginfo('template_url' ); ?>/library/img/13.jpg" alt="img13"/>
							<figcaption>
								<h2>Free <span>Sarah</span></h2>
								<p>Sarah likes to watch clouds. She's quite depressed.</p>
								<a href="#">View more</a>
							</figcaption>			
					</figure>
				</div>
			</div>
			<div class="three columns">
				<div class="grid">
					<figure class="effect-sarah">
							<img src="<?php bloginfo('template_url' ); ?>/library/img/13.jpg" alt="img13"/>
							<figcaption>
								<h2>Free <span>Sarah</span></h2>
								<p>Sarah likes to watch clouds. She's quite depressed.</p>
								<a href="#">View more</a>
							</figcaption>			
					</figure>
				</div>
			</div>
			<div class="three columns">
				<div class="grid">
					<figure class="effect-sarah">
							<img src="<?php bloginfo('template_url' ); ?>/library/img/13.jpg" alt="img13"/>
							<figcaption>
								<h2>Free <span>Sarah</span></h2>
								<p>Sarah likes to watch clouds. She's quite depressed.</p>
								<a href="#">View more</a>
							</figcaption>			
					</figure>
				</div>
			</div>
			<div class="three columns">
				<div class="grid">
					<figure class="effect-sarah">
							<img src="<?php bloginfo('template_url' ); ?>/library/img/13.jpg" alt="img13"/>
							<figcaption>
								<h2>Free <span>Sarah</span></h2>
								<p>Sarah likes to watch clouds. She's quite depressed.</p>
								<a href="#">View more</a>
							</figcaption>			
					</figure>
				</div>
			</div>
			

		</div>


		
	</section>

	<section id="mapa">
		<iframe width="100%" height="262" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=4.705711,-74.09665&amp;num=1&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll=4.705747,-74.096537&amp;output=embed"></iframe>
	</section>

<?php get_footer(); ?>