<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?> | PlanetaRD</title>
  
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <?php $image = isset($image)?$image:'logo.png' ?>
  <!-- META TAGS -->
  <meta property="og:locale" content="es_ES" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?php echo $title ?> | PlanetaRD" />
  <meta property="og:site_name" content="PlanetaRD" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="<?php echo $title ?> | PlanetaRD" />
  <meta property="og:image" content="<?php echo base_url('assets/images/') . $image ?>" />
  <meta property="og:image:secure_url" content="<?php echo base_url('assets/images/') . $image ?>" />
  <meta name="twitter:image" content="<?php echo base_url('assets/images/') . $image ?>" />
  
  <link rel='icon' type='img/png' href="<?php echo base_url('assets/images/logo.png') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css') ?>">
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107712974-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-107712974-1');
    </script>
	
	<script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-9702779870024214",
        enable_page_level_ads: true
      });
    </script>
    
    
</head>
<body>
    
    <div class="col-lg-12">
      <div class="row" style="background:#00346b">
        <div class="col-lg-3 mt-1 mb-1">
          <a href="<?php echo base_url() ?>"><img src="<?php echo base_url('assets/images/logo-nombre.png') ?>" width='100%' alt="PlanetaRD"></a>
        </div>
        
        <div class="col-lg-6 mt-1 mb-1">
           <marquee behavior="" direction="">
            <img src="<?php echo base_url('assets/images/slogan.jpg') ?>" height="75px">
            <img src="<?php echo base_url('assets/images/all.jpg') ?>" height="75px">
          </marquee>
        </div>
       
        <div class="col-lg-3 mt-1 mb-1">
          <form action="<?php echo base_url('home/buscar/') ?>" method = 'GET'>
            <div class="input-group text-right">
              <input type="text" class="form-control" name="busqueda" placeholder="Buscar noticia" aria-label="Buscar noticia" aria-describedby="basic-addon2">
              <div class="input-group-append">
              <input type="submit" class="input-group-text btn btn-primary" value="Buscar">
              </div>
            </div>
           
            <p class="text-right text-white mt-2"><?php $fecha = getdate(); echo "Hoy es $fecha[weekday], $fecha[mday] de $fecha[month] del $fecha[year]";?></p>
          </form>
        </div>
      </div>
      
    </div>
 <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
          <ul class="navbar-nav">

            <li class="nav-item pl-4">
              <a class="nav-link text-white" href="<?php echo base_url('home/categoria/Nacionales') ?>">Nacionales</a>
            </li>
            <li class="nav-item pl-4">
              <a class="nav-link text-white" href="<?php echo base_url('home/categoria/Internacionales') ?>">Internacionales</a>
            </li>
            <li class="nav-item pl-4">
              <a class="nav-link text-white" href="<?php echo base_url('home/categoria/Viral') ?>">Viral</a>
            </li>
            <li class="nav-item pl-4">
              <a class="nav-link text-white" href="<?php echo base_url('home/categoria/Nacionales') ?>">Educación y Tecnologia</a>
            </li>
            <li class="nav-item pl-4">
              <a class="nav-link text-white" href="<?php echo base_url('home/categoria/Deportes') ?>">Deportes</a>
            </li>
            <li class="nav-item pl-4">
              <a class="nav-link text-white" href="<?php echo base_url('home/categoria/Opinion') ?>">Opinión</a>
            </li>
            <li class="nav-item pl-4">
              <a class="nav-link text-muted" href="<?php echo base_url('auth') ?>">Iniciar Sesion</a>
            </li>

          </ul>
        </div>
      </nav>

	<!-- loading view -->
	<div class="container-fluid">
		<?php $this->load->view($view);?>
	</div>

  <footer class="bg-dark pt-4 pb-4">
    <p class="text-white text-center">
      PlanetaRD 
    </p>
  </footer>

	<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.mask.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/application.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/flat-ui.min.js') ?>"></script>
	<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59cb2cb35598c551"></script> 
<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59cb2cb35598c551"></script> 
</body>
</html>
