<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> <?php echo $titulo_head;	?> </title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo base_url(); ?>js/bootstrap.js" ></script>

<!-- scripts para carousel  -->

<!-- Custom styles for this template -->

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url(); ?>css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="<?php echo base_url(); ?>css/carousel.css" rel="stylesheet">

	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
               
                <a class="navbar-brand" href="<?php echo base_url(); ?>">N</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li <?php if ($seccion== "Index") echo "class='active'"; 	    ?> > <a href="<?php echo base_url(); ?>">Inicio</a></li>
					<li <?php if ($seccion== "Nosotros") echo "class='active'"; 	?> > <a href="<?php echo base_url()."index.php/inicio/nosotros"; ?>">Nosotros</a></li>
					<li <?php if ($seccion== "Servicios") echo "class='active'"; 	?> > <a href="<?php echo base_url()."index.php/inicio/servicios"; ?>">Servicios</a></li>
					<li <?php if ($seccion== "Portafolio") echo "class='active'"; 	?> > <a href="<?php echo base_url()."index.php/inicio/portafolio"; ?>">Portafolio</a></li>
					<li <?php if ($seccion== "Contacto") echo "class='active'"; 	?> > <a href="<?php echo base_url()."index.php/inicio/contacto"; ?>">Contacto</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
