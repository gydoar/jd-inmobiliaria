

<footer>
	<div class="container">
		<div class="row">
			<div class="one columns offset-by-one">
				<ul id="menu-footer">
					<?php wp_nav_menu(array(
						'theme_location' => 'footer-menu'
					) ); ?>
				</ul>
			</div>
			<div class="five columns offset-by-two">
				<p class="icon-map">&nbsp;&nbsp;Cra 6 No. 12C - 48 Antonio Nariño Ofi 510</p>
				<a class="icon-mail" href="mailto:jdavidbeltraninmobiliria.com">&nbsp;&nbsp;jdavidbeltraninmobiliria.com</a>
				<p class="icon-fax">&nbsp;&nbsp;2813040 Fax: 2812902</p>
				<p class="icon-movil">&nbsp;&nbsp;315 799 5783</p>
			</div>
			<div class="two columns offset-by-one" id="social">
				<a href="#"><img width="28" src="<?php bloginfo('template_url' ); ?>/library/img/icon-fb.png" alt="">&nbsp;&nbsp;FACEBOOK</a><br>
				<a href="#"><img width="27" src="<?php bloginfo('template_url' ); ?>/library/img/icon-tw.png" alt="">&nbsp;&nbsp;TWITTER</a><br>
				<a href="#"><img width="27" src="<?php bloginfo('template_url' ); ?>/library/img/icon-ist.png" alt="">&nbsp;&nbsp;INSTAGRAM</a>
			</div>
		</div>
	</div>
</footer>


<div id="copy">
	<p><strong>&copy; JDAVIDBELTRANINMOBILIARIA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>HECHO CON&nbsp;<img width="11" src="<?php bloginfo('template_url' ); ?>/library/img/corazon.png" alt="">&nbsp;POR <a target="_blank" href="http://suwwweb.com">SUWWWEB</a></p>
</div>




<!-- script -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/library/js/modernizr-custom-min.js"></script>

<!--/ script -->

<!-- Scripts Adiconales -->

	<script>
		// For Demo purposes only (show hover effect on mobile devices)
		[].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
			el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
		} );
	</script>

<!-- Menu responsive -->


<!--/ Menu responsive -->

<script src="<?php bloginfo('template_url' ); ?>/library/js/owl-carousel.js"></script>

<script>
	$(document).ready(function() {
 
	  $("#owl-demo").owlCarousel({
	 
	      navigation : true, // Show next and prev buttons
	      slideSpeed : 300,
	      paginationSpeed : 400,
	      singleItem:true
	 
	      // "singleItem:true" is a shortcut for:
	      // items : 1, 
	      // itemsDesktop : false,
	      // itemsDesktopSmall : false,
	      // itemsTablet: false,
	      // itemsMobile : false
	 
	  });
	 
	});
</script>

<!--/ Scripts Adiconales -->

<?php wp_footer(); ?>

</body>
</html>