<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css') ?>">

	<!-- VEX -->
	<link rel="stylesheet" href="<?php echo base_url('assets/vex/dist/css/vex.css') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/vex/dist/css/vex-theme-plain.css') ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/vex/dist/css/vex-theme-os.css') ?>" />
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid pl-4">
        <a class="navbar-brand" href="<?php echo base_url('admin') ?>">PlanetaRD | <small>Admin</small></a>
        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav">
            <li class="nav-item text-right">
              <a class="btn btn-primary mr-2" href="<?php echo base_url('admin/create') ?>">Nueva noticia <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  

	<div class="container-fluid pl-5 pr-5">
		<!-- loading view -->
		<?php $this->load->view($view);?>
	</div>

	<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="https://cloud.tinymce.com/stable/bootstrap.min.js"></script>
	<script src="//cdn.ckeditor.com/4.10.1/full/ckeditor.js"></script>
	
	<script src="<?php echo base_url('assets/vex/dist/js/vex.combined.min.js') ?>"></script>\

	<script type="text/javascript">

		CKEDITOR.replace( 'contenido' );
		
		function deleteNews(id){
			vex.dialog.confirm({
		    message: '¿Está seguro de que desea borrar la noticia?',
		    className: 'vex-theme-plain',
		    
			    callback: function (value) {
			        if (value) {

			        	document.body.style.cursor = "wait";
			        	window.location = "<?php echo base_url('admin/deleteNews/')?>" +id;

			        }
			    }
			});
		}		
	</script>

</body>
</html>

