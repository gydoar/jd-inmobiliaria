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