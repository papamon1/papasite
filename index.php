<?php
include_once 'common.php';
?>
<?php include_once 'header.php' ?>

    
    <div id="parallax">
     
	<!-- Banner Area -->   
	<div id="crt" class="crt">
		<div id="logo" class="logo_area" > 
			<div class="logo_float"></div>
			<div class="color_verdeglow titulillo">/></div>
		<!--img src="images/banner-bg-style.png" alt="" class="banner_bg"-->
			<!--div class="container">
				<h2 class="wow fadeInUp">PapaMono</h2>
				<p class="wow fadeInUp" data-wow-delay="0.2s">Grupo de desarrollo creativo independiente</p>
				<a href="#" class="theme_btn wow fedeInUp" data-wow-delay="0.4s">Conócenos</a>
			</div-->
		<!--img src="images/banner-images.png" alt="" class="banner_img wow fadeInRight"-->		
		<div class="floating_intro color_verdeglow"><a href="#comienzo" class="color_verdeglow">|<br/>|<br/>|<br/>v</a></div>
		</div>				
		
	</div>
		
	
    
    <!-- Banner Area -->


   <!-- Agency Task Are Start -->
	
		<div class="agency_task row" id="comienzo">		
			<div class="col-lg-6 p-0 wow fadeInRight">
				<div class="agency_contant_right">
					<h5>//¿Quiénes somos?</span></h5>
					<h2>Comunicación y eficiencia, <br/> sin corbatas<span class="blink">_</span></h2>
					<p>Somos un equipo de experimentados profesionales, amantes del desarrollo, la tecnología y todas las formas de creatividad, que tras más de 15 años de experiencia en el sector decidimos
						iniciar este proyecto enfocando el trabajo desde una filosofía diferente.</p>				
					<a class='boton' href="qs.php">Leer más</a>
					
				</div>
			</div>
			<div class="col-lg-6 p-0 agency_task_img_right wow fadeInLeft">
				<img src="images/Ilustraciones/QuienesSomos.png" alt="">			
			</div>
		</div>





	<div class="agency_task row">
		<div class="col-lg-6 p-0 agency_task_img wow fadeInLeft">
			<img src="images/Ilustraciones/NosIncorporas.png" alt="">			
		</div>
		<div class="col-lg-6 p-0 wow fadeInRight">
			<div class="agency_contant">
				<h5>//¿Cómo lo hacemos?</span></h5>
				<h2>No nos contratas,<br/>nos incorporas<span class="blink">_</span></h2>
				<p>Esto nos permite conocernos y conectar mejor con nuestros clientes, sabiendo exactamente lo que necesitan. Además pensamos en soluciones robustas. Apostamos por relaciones largas que den como resultado herramientas sólidas
					y potentes. Hacemos que tu software crezca, evolucione y dure. Cuantos más años mejor. </p>	
				<a class='boton' href="ch.php">Leer más</a>			
			</div>
		</div>
	</div>

	
    <!-- Agency Task Area End -->
    
	
	

	    <!-- Testimonial -->
	<section class="testimonial_area">
		<div class="row">
			<div class="col-lg-5 user_img">
				<div class="agency_contant">
					<h5>//¿Cómo lo hacemos?</span></h5>
					<h2>Lo que haremos,<br/>juntos<span class="blink">_</span></h2>
					<p>Esto nos permite conocernos y conectar mejor con nuestros clientes, sabiendo exactamente lo que necesitan. Además pensamos en soluciones robustas. Apostamos por relaciones largas que den como resultado herramientas sólidas
						y potentes. Hacemos que tu software crezca, evolucione y dure. Cuantos más años mejor. </p>								
				</div>
			</div>
			<div class="col-lg-7 testimonial">
				<!-- <div class="tittle">
					<h4> >_ De dónde venimos??</h4>
					<h2>-==@ Nuestros trabajos @==-</h2>
				</div> -->
				<div class="owl-carousel testimonial_carousel">
					<div class="item">						
						<div class="testimonial_item">						
							<div class="titulo_caja" style="margin-left:222px;">Startups</div>
							<p> Pocas cosas puede haber más atractivas e ilusionantes que comenzar un proyecto, trabajar en él y verlo crecer y desarrollarse.
							</p>
							<div class="media">
								<img src="images/Ilustracion_Startups.svg" alt="">
								<div class="media-body">									
									<div class="caja_boton">
										<a href="startups.php">Leer más</a> 
									</div>
								</div>
							</div>
						</div> 
					</div>  
					<div class="item">
						<div class="testimonial_item">
						<div class="titulo_caja" style="margin-left:166px;">Auditoría de procesos</div>
							<p>En la práctica totalidad de los casos, un correcto análisis de nuestro trabajo puede mejorar la productividad de la empresa y eliminar además errores.</p>
							<div class="media">
								<img src="images/Ilustracion_AuditoriaProcesos.svg" alt="">
								<div class="media-body">									
									<div class="caja_boton">
										<a href="procesos.php">Leer más</a> 
									</div>
								</div>
							</div>
						</div> 
					</div> 
					<div class="item">
						<div class="testimonial_item">
						<div class="titulo_caja" style="margin-left:206px;">Soluciones</div>
							<p>Debes dar por supuesto que tendrás una herramienta elegante, agradable y cómoda de utilizar, y que hará todo lo que pensabas.</p>
							<div class="media">
								<img src="images/Ilustracion_Soluciones.svg" alt="">
								<div class="media-body">									
									<div class="caja_boton">
										<a href="soluciones.php" >Leer más</a> 
									</div>
								</div>
							</div>
						</div> 
					</div> 					 
				</div> 
			</div>
		</div>
	</section>
	<!-- End Testimonial -->


    <?php include_once 'footer.php' ?>
       
       
	</div><!-- Parallax -->
    
    <!-- Scroll Top Button -->
    <button class="scroll-top">
        <i class="fa fa-angle-double-up"></i>
    </button>
    
	<!-- Preloader -->
	<div class="preloader"><div class="preloader_img"></div></div>



    <!-- jQuery v3.3.1 -->
    <script src="js/jquery-3.3.1.min.js"></script>    
    <!-- Bootstrap v4.0.0 -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>  
    <!-- Extra Plugin -->
    <script src="vendors/animate-css/wow.min.js"></script> 
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>     
    <script src="vendors/parallaxmouse/parallax.min.js"></script>   
    <script src="vendors/counterup/jquery.waypoints.min.js"></script>   
    <script src="vendors/counterup/jquery.counterup.min.js"></script>
    <script src="vendors/bootstrap-selector/jquery.nice-select.min.js"></script>    
    <!-- Theme js / Custom js -->
    <script src="js/theme.js"></script> 
	<script>

		//$(document).ready(function(){

			// var $height = $(window).height();
			// alert($height);			
			// $('#crt').height(window.innerHeight);
			// alert('primer paso')
			// // $('#logo').style.padding-bottom(height);
			// // $('#logo').style.paddingTop = window.innerHeight;
			// document.getElementById("logo").style.paddingTop = window.innerHeight; 
			// alert('fin');
		//

		// $(function() {
		// $('a[href*=#]').on('click', function(e) {
		// 	e.preventDefault();
		// 	$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
		// });
		// });
	</script>
		
</body>
</html>