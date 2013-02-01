<!DOCTYPE HTML>
<html lang="es-CO">
   	<head>
		<meta charset="utf-8">
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <meta name="googlebot" content="index,follow"/>
        <meta name="author" content="Ing. Jonathan Olier Miranda"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="shortcut icon" type="image/x-ico" href="fav.ico" />
        <link rel="stylesheet" type="text/css" href="themes/css/stylesheet.css" media="all">
        <link rel="stylesheet" type="text/css" href="themes/css/docs/assets/css/bootstrap.css" media="all">
        <link rel="stylesheet" type="text/css" href="themes/css/docs/assets/css/bootstrap-responsive.css" media="all">
		<title>ltiviaOT</title>
   	</head>
    <body class="container-fluid" data-spy="scroll" data-target=".subnav" data-offset="50" data-twttr-rendered="true">
   		<?php if (file_exists("modulos/nav.php")){ include('modulos/nav.php'); } ?>
        <section id="contenido" class="offset1 span9">
            <?php if (file_exists("modulos/home.php")){ include('modulos/home.php'); } ?>
            <?php if (file_exists("modulos/articulos.php")){ include('modulos/articulos.php'); } ?>
            <?php if (file_exists("modulos/videotutoriales.php")){ include('modulos/videotutoriales.php'); } ?>
            <?php if (file_exists("modulos/feed.php")){ include('modulos/feed.php'); } ?>
            <?php if (file_exists("modulos/contacto.php")){ include('modulos/contacto.php'); } ?>
 		</section>
 		<footer></footer>
    </body>
    <script type="text/javascript" src="jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
</html>