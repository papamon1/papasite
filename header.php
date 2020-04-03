
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Theme tittle -->
    <title>Papa.Mono - Grupo de desarrollo creativo independiente</title> 
    
    <!-- Theme style CSS --> 
    <link rel="stylesheet" href="css/bootstrap-select.min.css">    
    <link href="css/layout.css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="./css/tele.css" >
    <link rel="stylesheet" type="text/css" href="./css/style.css" >
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    <!-- Header Area -->
    <header class="main_header_area">   
        <!--/Portfolio Filters -->
      <?php 
      $_POST['pag']=$_SERVER['PHP_SELF'];
      include_once 'menu_superior.php';

    ?>
    
    </header>
    <!-- Header Area -->  