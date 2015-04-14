 <?php


   if(isset($_POST['submitted'])) {
    if(trim($_POST['contactName']) === '') {
        $nameError = 'Por favor ingrese su nombre.';
        $hasError = true;
    } else {
        $name = trim($_POST['contactName']);
    }

    if(trim($_POST['email']) === '')  {
        $emailError = 'Por favor ingrese su email.';
        $hasError = true;
    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
        $emailError = 'Dirreción de email invalida.';
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }

     if(trim($_POST['telefono']) === '') {
        $telError = 'Por favor ingrese su teléfono.';
        $hasError = true;
    } else {
        $telefono = trim($_POST['telefono']);
    }

    if(trim($_POST['comments']) === '') {
        $commentError = 'Por favor ingresa un mensaje.';
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['comments']));
        } else {
            $comments = trim($_POST['comments']);
        }
    }

    if(!isset($hasError)) {
        $emailTo = get_option('tz_email');
        if (!isset($emailTo) || ($emailTo == '') ){
            $emailTo = get_option('admin_email');
        }
        $subject = '[Contacto axemos] From '.$name;
        $body = "Nombre: $name \n\nEmail: $email \n\nTeléfino: $telefono \n\nComments: $comments \n\nInmueble: the_title();";
        $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

        wp_mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    }

} ?>

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

				$tel_fijo     = get_post_meta(get_the_id(), 'tel_inm', TRUE);
				$tel_movil    = get_post_meta(get_the_id(), 'mov_inm', TRUE);
				$direccion    = get_post_meta(get_the_id(), 'dir_inm', TRUE);
			
			 ?>

			 <div class="container" >
			 	
			 	<div id="single__inm">
			 		<h3><?php the_title(); ?> - id <?php the_id(); ?></h3>
			 	
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
			 					<li><?php echo $area; ?> mt2</li>
			 					<li><?php echo $habitaciones; ?></li>
			 					<li><?php echo $banos; ?></li>
			 				</div>
			 			</div>
			 			<p class="des__inm"><?php echo $descripcion; ?></p>
			 		</div>
			 	</div>

			 	<div class="row contact__inm">
			 		<div class="six columns">
			 			<h5><img src="<?php bloginfo('template_url' ); ?>/library/img/icon-contac.png" alt=""> Contacte al vendedor</h5>
			 			<div class="ten columns offset-by-two">
			 				<li><img src="<?php bloginfo('template_url' ); ?>/library/img/icon-tel.png" alt="">&nbsp;&nbsp;<?php echo $tel_fijo; ?></li>
			 				<li><img src="<?php bloginfo('template_url' ); ?>/library/img/icon-whatsapp.png" alt="">&nbsp;&nbsp;<?php echo $tel_movil; ?></li>
			 				<li><img src="<?php bloginfo('template_url' ); ?>/library/img/icon-position.png" alt="">&nbsp;&nbsp;<?php echo $direccion; ?></li>
			 			</div>
			 		</div>
			 		<div class="six columns">
			 			 <?php if(isset($emailSent) && $emailSent == true) { ?>
             <div class="alert alert-success">
                <p>Gracias, su mensaje ha sido bien recibido.</p>
            </div>
            <?php } else { ?>

            <?php if(isset($hasError) || isset($captchaError)) { ?>
            <div class="alert alert-danger alert-dismissable">
                <a class="close" data-dismiss="alert">×</a>
                <h4 class="alert-heading">Disculpe, existen algunos errores.</h4>
                <p class="error">Por favor inténtalo de nuevo!<p>
                </div>
                <?php } ?>

                <form action="<?php the_permalink(); ?>" id="contactForm" method="post">
                    <fieldset>
                        <div class="form-group">

                            <input class="form-control" type="text" name="contactName" id="contactName" value="" placeholder="Nombre" />
                            <span class="input-icon fui-check-inverted"></span>
                            <?php if(isset($nameError)) { ?>
                            <p><span class="error"><?=$nameError;?></span></p>
                            <?php } ?>
                             <br>

                        </div>
                        <div class="form-group">

                            <input class="form-control" type="text" name="email" id="email" value="" placeholder="Email" />
                            <span class="input-icon fui-check-inverted"></span>
                            <?php if(isset($emailError)) { ?>
                            <p><span class="error"><?=$emailError;?></span></p>
                            <?php } ?>

                             <br>
                        </div>
                        <div class="form-group">

                            <input class="form-control" type="text" name="telefono" id="telefono" value="" placeholder="Teléfono" />
                            <span class="input-icon fui-check-inverted"></span>
                            <?php if(isset($telError)) { ?>
                            <p><span class="error"><?=$telError;?></span></p>
                            <?php } ?>

                             <br>
                        </div>
                        <div class="form-group">

                            <textarea class="form-control" name="comments" id="commentsText" rows="100" cols="10" placeholder="Mensaje"></textarea>
                            <?php if(isset($commentError)) { ?>
                            <p><span class="error"><?=$commentError;?></span></p>
                            <?php } ?>
                             <br>
                        </div>
                        <div class="form-actions">
                            <button style="float:right;"type="submit" class="btn btn-success button-primary">Enviar</button>
                        </div>
                        <input type="hidden" name="submitted" id="submitted" value="true" />
                    </fieldset>
                </form>
                <?php } ?>
			 		</div>
			 	</div>
			 	</div>
			</div>

			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>


	</article>

<?php get_footer(); ?>