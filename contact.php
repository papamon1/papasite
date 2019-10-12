<?php
include_once 'common.php';
?>
<?php include_once 'header.php' ?>

    
    <div id="parallax">
     
	<!-- Banner Area -->   
	<div class="crt">
		<section class="banner_area" style="text-align: center;" > 
			<div class="color_verdeglow titulillo"> >_ </div>		
			<div class="container">
            <h2 class="color_verdeglow wow fadeInUp" style="display: inline-block;">Contacta con nosotros<span class="blink">_</span></h2>											
			</div		
		</section>
	</div>
		
	
    
    <!-- Banner Area -->
    
    
    

       <!-- Agency Task Are Start -->
        <section class="agency_task row">
            <div class="col-lg-6 p-0 agency_task_img wow fadeInLeft">
                <img src="images/Ilustraciones/Contacto.png" alt="">			
            </div>
            <div class="col-lg-6 p-0 wow fadeInRight">             
                <div class="agency_form">
                    <h2 class="titulo_seccion" style="text-align:left !important;">Hola</h2>
                    <p>Escríbenos un correo para cualquier cosa que necesites. Te contestaremos o te llamaremos lo antes posible!</p>
                    <form class="from_main" action="php/contact.php" method="post" id="phpcontactform" novalidate="novalidate"> 
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                        </div>                         
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico"> 
                        </div>
                        <div class="form-group">   
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Teléfono"> 
                        </div>                        
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" placeholder="Mensaje" rows="4"></textarea>
                        </div>
                        <div class="form-group m-0 btn_g">
                            <button class="theme_btn btn" id="js-contact-btn" type="submit">Enviar</button> 
                            <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Messages Successfully"></div>
                        </div> 
                    </form>
                </div>
            </div>
        </section>
        <!-- Agency Task Area End -->




    <?php include_once 'footer.php' ?>
       
       
	</div><!-- Parallax -->
    
    <!-- Scroll Top Button -->
    <button class="scroll-top">
        <i class="fa fa-angle-double-up"></i>
    </button>
    
	<!-- Preloader -->
	<div class="preloader"></div>



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
    <!-- Contact From js -->
    <script src="js/contact.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <!-- Theme js / Custom js -->
    <script src="js/theme.js"></script> 
</body>
</html>