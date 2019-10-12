<?php
include_once 'common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="images/Favicon.png" type="image/x-icon" />
    <!-- Theme tittle -->
    <title>Papa.Mono - Grupo de desarrollo creativo independiente</title> 
    
    <!-- Theme style CSS --> 
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link href="css/style.css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/tele.css" >

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    <div id="parallax">
     
	<!-- Banner Area -->   
	<div class="crt">
		<section class="logo_area" onclick="sendEmail();" > 
			<div class="color_verdeglow titulillo">
                /*<br/>&nbsp;&nbsp;&nbsp;Grupo de desarrollo creativo independiente_   
                <br/>&nbsp;&nbsp;&nbsp;nos vemos pronto_ 
                <br/>&nbsp;&nbsp;&nbsp;pincha y escríbenos ;)<br/>*/
                
            </div>
		<!--img src="images/banner-bg-style.png" alt="" class="banner_bg"-->
			<!--div class="container">
				<h2 class="wow fadeInUp">PapaMono</h2>
				<p class="wow fadeInUp" data-wow-delay="0.2s">Grupo de desarrollo creativo independiente</p>
				<a href="#" class="theme_btn wow fedeInUp" data-wow-delay="0.4s">Conócenos</a>
			</div-->
		<!--img src="images/banner-images.png" alt="" class="banner_img wow fadeInRight"-->
		</section>
	</div>
		
	
    
    <!-- Banner Area -->
    
    
	

    
       
       
	</div><!-- Parallax -->
    
    <!-- Scroll Top Button -->
    <button class="scroll-top">
        <i class="fa fa-angle-double-up"></i>
    </button>
    
	<!-- Preloader -->
	<div class="preloader"></div>


    <script>
    function sendEmail() 
    {
        window.location = "mailto:info@papamono.es";
    }
    </script>
    
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
</body>
</html>