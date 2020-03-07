<div class="row mt-4 mb-4" style="max-width: 900px;margin:auto">
	<div class="col-md-6 mt-4 pt-4 mb-4 pb-4">
		<img src="<?php echo base_url('assets/images/rafael-castillo.jpg') ?>" width='100%'>
	</div>
	<div class="col-md-6 mt-4 pt-4 mb-4 pb-4">
		<span  class=" text-primary">Regístrate para votar el 6 de octubre por</span>
		<h1 class="text-primary display-4">Rafael Castillo</h1>
		<span class="font-weight-bold">Diputado 2020</span>

		<form action="<?php echo base_url('home/votar') ?>" method='post' id="formulario" style="margin-top: 7rem">
			<div class="form-group mt-4">
				<label style="font-weight-bold">Número de Cédula</label>
				<input type="text" name='cedula' class="form-control" id="cedula" placeholder="Cédula" autocomplete="off" minlength="11">
			</div>

			<div class="form-group mt-4">
				<input type="text" name='celular' class="form-control" id="celular" placeholder="Telefono célular" autocomplete="off" minlength="10">
			</div>

			<input type="submit" class="btn btn-primary btn-block" value="Registrarse">
		</form>
	</div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<div class="mt-4 mb-5"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php if(isset($_SESSION['result'])):?>
    <?php
    if ($_SESSION['result']==1) {
    	$msg = "Persona Registrada Correctamente";
    	$status = 'success';
    	$header = 'Correcto';
    }else{
    	$msg = 'Persona registrada previamente';
    	$status = 'warning';
    	$header = 'Error';
    }

    ?>
    <script>
    	setTimeout(function(){
			swal("<?php echo $header ?>", "<?php echo $msg ?>","<?php echo $status ?>");
		},1000);
    </script>
<?php endif; ?>  

<script>
	

	setTimeout(function(){
		 $('#cedula').mask('000-0000000000-0');
		 $('#celular').mask('000-000-0000');
	},1000);
	//document.getElementById("formulario").submit();
</script>