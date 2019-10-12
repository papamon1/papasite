<?php
include_once 'common.php';
$pag=str_replace("/test/","", $_POST['pag']);
?>

    <nav class="navbar navbar-expand-lg"> 
        <!-- <div class="linea-inferior"></div> -->
        <a class="navbar-brand" href="index.php">
            <img src="images/Icono.svg" alt="">  
            <!--span class="mail_nav"><img src="images/favicon.png" alt="">info@papamono.es</span-->
        </a> 
        <!-- Small Divice Menu-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar_supported"> 
            <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse navbar_supported">
            <ul class="navbar-nav"> 
                <li><a href="qs.php">Quiénes Somos</a></li>                                   
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown">Qué Hacemos</a>
                    <ul class="dropdown-menu">
                        <li><a href="soluciones.php">Soluciones</a></li>
                        <li><a href="procesos.php">Auditoría de procesos</a></li>
                        <li><a href="startups.php">Startups</a></li>                       
                        <!-- <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown">Desarrollo</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog.html">Aplicaciones</a></li>  
                                <li><a href="blog.html">Aplicaciones móviles</a></li>  
                                <li><a href="blog-details.html">Soluciones web</a></li>   
                            </ul>
                        </li>      
                        <li><a href="protfolio-4.html">Trabajos</a></li>                               -->
                    </ul>
                </li>    
                <li><a href="ch.php">Cómo lo hacemos</a></li>                  
                <li><a href="contact.php">Contacto</a></li>  
                <!--li><a href="#" class="theme_btn">Sign in</a></li-->  
            </ul>   
        </div>        
    </nav>   