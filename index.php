<?php include "navbar.php"; ?>
	
    <div id="heading" class="text-center">
        <div id="txtoverimg">
            <h1>MEJORAMOS TU ADMINISTRACIÓN Y DESARROLLAMOS TUS SOLUCIONES</h1>
            <p>Crecemos contigo</p>
        </div>
    </div>

    <div id="Nosotros" class="container">
        <p>Somos una empresa joven dedicada a la explotación de recursos tecnológicos integrándolos a proyectos innovadores que brindan soluciones confiables.</p>
    </div>
	
	<div id="gps">
		<div class="container">
			<h3>Encuentranos aquí</h3>
		</div>
		<div id="location">
		
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
			<script type="text/javascript">
				google.maps.event.addDomListener(window, 'load', init);
			
				function init() {
					var mapOptions = {
						zoom: 17,
						center: new google.maps.LatLng(25.6643797,-100.3307758),
						styles:[{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#165c64"},{"saturation":34},{"lightness":-69},{"visibility":"on"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"hue":"#b7caaa"},{"saturation":-14},{"lightness":-18},{"visibility":"on"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"hue":"#cbdac1"},{"saturation":-6},{"lightness":-9},{"visibility":"on"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#8d9b83"},{"saturation":-89},{"lightness":-12},{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#d4dad0"},{"saturation":-88},{"lightness":54},{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"hue":"#bdc5b6"},{"saturation":-89},{"lightness":-3},{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"hue":"#bdc5b6"},{"saturation":-89},{"lightness":-26},{"visibility":"on"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"hue":"#c17118"},{"saturation":61},{"lightness":-45},{"visibility":"on"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"hue":"#8ba975"},{"saturation":-46},{"lightness":-28},{"visibility":"on"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"hue":"#a43218"},{"saturation":74},{"lightness":-51},{"visibility":"simplified"}]},{"featureType":"administrative.province","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":0},{"lightness":100},{"visibility":"simplified"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":0},{"lightness":100},{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"labels","stylers":[{"hue":"#ffffff"},{"saturation":0},{"lightness":100},{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":0},{"lightness":100},{"visibility":"off"}]},{"featureType":"administrative","elementType":"all","stylers":[{"hue":"#3a3935"},{"saturation":5},{"lightness":-57},{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"hue":"#cba923"},{"saturation":50},{"lightness":-46},{"visibility":"on"}]}]};					
					var mapElement = document.getElementById('location');
					var map = new google.maps.Map(mapElement, mapOptions);
					var marker = new google.maps.Marker({
						position: new google.maps.LatLng(25.6643797,-100.3307758),
						map: map,
						title: 'Snazzy!'
					});
				}
			</script>
		</div>
	</div>

	<div id="tecnologia">
		<div class="container">
			<h3>Aplicaciones</h3>
			<p>Contamos con diversas aplicaciones en el mercado que cubren diferentes rubros:</p><br>
			<div class="row">
				<ul>
					<li class="col-md-4"><i class="fa fa-heart-o" aria-hidden="true"></i> Prevención y control de sobre peso</li>
					<li class="col-md-4"><i class="fa fa-pie-chart" aria-hidden="true"></i> Gestoría de incidente</li>
					<li class="col-md-4"><i class="fa fa-money" aria-hidden="true"></i> Gestoría de cobranza</li>
				</ul>
			</div>
			<br />
			<div class="row">
				<ul>
					<li class="col-md-4"><i class="fa fa-medkit" aria-hidden="true"></i> Atención médica</li>
					<li class="col-md-4"><i class="fa fa-motorcycle" aria-hidden="true"></i> Gestoría de reparto</li>
				</ul>
			</div>	
		</div>
	 </div>
	 
	 <div id="servicios">
	 	<div class="container">
		 	<h3>Servicios</h3><br>
		 	<div class="row">
				<ul>
					<li class="col-md-4"><i class="fa fa-check-square-o" aria-hidden="true"></i> Desarrollo de aplicaciones a la medida.</li>
					<li class="col-md-4"><i class="fa fa-barcode" aria-hidden="true"></i> Automatización de procesos.</li>
					<li class="col-md-4"><i class="fa fa-cloud" aria-hidden="true"></i> Sistemas SAAS (Software as a Service).</li>
				</ul>
			</div>
			<br />
			<div class="row">
				<ul>
					<li class="col-md-4"><i class="fa fa-desktop" aria-hidden="true"></i> Consultoría Tecnológica e Informática.</li>
				</ul>
			</div>
		</div>
	</div>
     <div id="contactanos">
     <hr>
	     <div class="row">
			<div class="col-md-4">
				<h3>Nuestras oficinas</h3>
				<small>Teatro Convex, 5to piso<br /></small>
				<small>Ave. Morones Prieto 1500, Nuevas Colonias<br /></small>
				<small>C.P. 64710 Monterrey, NL<br /></small>
				<small>Telefono: 01 81 8122 5800</small>
			</div>
			<div class="col-md-4">
				<br />
				<small>Correo: tando@tandotek.com</small><br/>
				<small>Visitanos en: </small>
				<a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com"><span class="fa fa-facebook"></span></a>
				<a class="btn btn-social-icon btn-twitter" href="http://www.twitter.com"><span class="fa fa-twitter"></span></a>
			</div>
	  	</div>
		<footer id="foot">
             <p>
             <span class="pull-left">&copy; Tandotek Solutions 2016</span>
             <img src="Logo Tandotek Chico.png" class="pull-right" style="height: 35px" /><span class="pull-right">Powered by &copy; </span>
             </p>
        </footer>
     </div>
</body>
</html>

<script type="text/javascript">
$(document).ready( function() {
	$("#Nosotros, #tecnologia ul li, #servicios ul li").hide();
	$('#txtoverimg').hide().slideDown("slow");
	var topOfOthDiv = $("#heading").offset().top;
	var topOfTecDiv = $("#tecnologia").offset().top;
	var topOfSerDiv = $("#servicios").offset().top;
	var delay = 0;
	$(window).scroll(function() {
		if($(window).scrollTop() > topOfOthDiv) { 
			$("#Nosotros").fadeIn("slow");
		}
		
		if($(window).scrollTop() > topOfTecDiv) {
			for(var i = 0; i < 5; i++) {
				delay += 300;
				$('#tecnologia li:nth-child(' + (i + 1) +')').fadeIn(delay);
			}
		}
		if($(window).scrollTop() > topOfTecDiv) {
			for(var i = 0; i < 4; i++) {
				$('#servicios li:nth-child(' + (i + 1) + ')').fadeIn(delay);
			}
		}
	});
});
</script>