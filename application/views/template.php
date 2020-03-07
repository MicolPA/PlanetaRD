<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css') ?>">

</head>
<body>

	<!-- loading view -->
	<div class="container">
		<?php $this->load->view($view);?>
	</div>

	<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/application.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/flat-ui.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js') ?>"></script>

</body>
</html>



