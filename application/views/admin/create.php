<form method="post" action="<?php echo base_url('admin/createNew') ?>"  enctype='multipart/form-data' class="mt-5 mb-5 pb-5">
	<div class="form-group">
    	<label for="titulo">Titulo</label>
    	<input type="text" name="titulo" class="form-control" id="titulo" placeholder="Titulo" required autocomplete="off">
  	</div>
  	<div class="form-group">
	    <label for="resumen">Descripción</label>
	    <textarea class="form-control" name="resumen" id="resumen" rows="3" required autocomplete="off"></textarea>
	</div>
  	<div class="row">
  		<div class="form-group col-lg-6">
	    	<label for="Autor">Autor</label>
	    	<input type="text" name="autor" class="form-control" id="Autor" placeholder="Autor" required autocomplete="off">
	  	</div>
	  	<div class="col-lg-6">
	    	<label for="Portada">Portada</label>
	  		<input type="file" name="portada" class="form-control" id="Portada" required>
	  	</div>
  	</div>


  	<div class="row">
  		<div class="col-lg-12">
  			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" id="nacionales" name="categoria" value="Nacionales">
			  <label class="form-check-label" for="nacionales">Nacionales</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" id="Internacionales" name="categoria" value="Internacionales">
			  <label class="form-check-label" for="Internacionales">Internacionales</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" id="Viral" name="categoria" value="Viral">
			  <label class="form-check-label" for="Viral">Viral</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" id="Deportes" name="categoria" value="Deportes">
			  <label class="form-check-label" for="Deportes">Deportes</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" id="Ciencia y Tecnologia" name="categoria" value="Ciencia y Tecnologia">
			  <label class="form-check-label" for="Ciencia y Tecnologia">Ciencia y Tecnologia</label>
			</div>
			<div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" id="Opiniones" name="categoria" value="Opiniones">
			  <label class="form-check-label" for="Opiniones">Opiniones</label>
			</div>
  		</div>
  	</div>

  	<hr>

  	<div class="form-group">
	    <label for="resumen">Contenido</label>
	    <textarea class="form-control" name="contenido" id="contenido" rows="3" required></textarea>
	</div>


  	<button type="submit" class="btn btn-primary">Crear noticia</button>
</form>

 



	