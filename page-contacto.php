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
        $body = "Nombre: $name \n\nEmail: $email \n\nTeléfino: $telefono \n\nComments: $comments";
        $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

        wp_mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    }

} ?>
<?php get_header(); ?>

	<div class="container" id="page--ext">

		<h2>CONTACTO</h2>

		<div class="row">

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
                    	<div class="six columns">
                    		<div class="form-group">
								<label for="">Nombre
									<input class="form-control" type="text" name="contactName" id="contactName" value="" />
								</label>
	                            
	                            <span class="input-icon fui-check-inverted"></span>
	                            <?php if(isset($nameError)) { ?>
	                            <p><span class="error"><?=$nameError;?></span></p>
	                            <?php } ?>
	                             <br>

	                        </div>
	                         <div class="form-group">
								<label for="">Teléfono
									<input class="form-control" type="text" name="telefono" id="telefono" value="" />
								</label>
	                            
	                            <span class="input-icon fui-check-inverted"></span>
	                            <?php if(isset($telError)) { ?>
	                            <p><span class="error"><?=$telError;?></span></p>
	                            <?php } ?>

	                             <br>
	                        </div>
                    	</div>
                        
                        <!-- columna 2 -->
                        <div class="six columns">
                        	<div class="form-group">
								<label for="">Email
									<input class="form-control" type="text" name="email" id="email" value="" />
								</label>
	                            
	                            <span class="input-icon fui-check-inverted"></span>
	                            <?php if(isset($emailError)) { ?>
	                            <p><span class="error"><?=$emailError;?></span></p>
	                            <?php } ?>

	                             <br>
	                        </div>
							 <div class="form-group">
								<label for="">Mensaje
									<textarea class="form-control" name="comments" id="commentsText" rows="100" cols="10" placeholder="Mensaje"></textarea>
								</label>
	                            
	                            <?php if(isset($commentError)) { ?>
	                            <p><span class="error"><?=$commentError;?></span></p>
	                            <?php } ?>
	                             <br>
	                        </div>
	                        <div class="form-actions">
	                            <button style="float:right;"type="submit" class="btn btn-success button-primary">Enviar</button>
	                        </div>
	                        <input type="hidden" name="submitted" id="submitted" value="true" />
	                    </div>
                        
                      
                       
                    </fieldset>
                </form>
                <?php } ?>
		</div>
	
	</div>

	<!-- mapa -->
	<section id="mapa">
		<iframe width="100%" height="262" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=4.705711,-74.09665&amp;num=1&amp;ie=UTF8&amp;t=m&amp;z=14&amp;ll=4.705747,-74.096537&amp;output=embed"></iframe>
	</section>
<?php get_footer(); ?>