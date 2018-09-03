<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?> | PlanetaRD</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css') ?>">
</head>
<body>
  <div class="col-lg-12">
    <h1 class="text-center text-primary mt-4">PlanetaRD </h1>
  <span class="text-center"><?php $fecha = getdate(); echo "Hoy es: $fecha[weekday], $fecha[mday] de $fecha[month] de $fecha[year]";?></span>
  </div>
 <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
          <ul class="navbar-nav">
            
            <li class="nav-item pl-4">
              <a class="nav-link text-white" href="#">Nacionales</a>
            </li>
            <li class="nav-item pl-4">
              <a class="nav-link text-white" href="#">Internacionales</a>
            </li>
            <li class="nav-item pl-4">
              <a class="nav-link text-white" href="#">viral</a>
            </li>
            <li class="nav-item pl-4">
              <a class="nav-link text-white" href="#">Educación y Tecnologia</a>
            </li>
            <li class="nav-item pl-4">
              <a class="nav-link text-white" href="#">Deportes</a>
            </li>
            <li class="nav-item pl-4">
              <a class="nav-link text-white" href="#">Opinión</a>
            </li>
           
          </ul>
        </div>
      </nav>

	<!-- loading view -->
	<div class="container-fluid">
		<?php $this->load->view($view);?>
	</div>

	<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/application.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/flat-ui.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js') ?>"></script>

</body>
</html>
