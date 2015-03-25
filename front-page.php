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
	</section>

<?php get_footer(); ?>