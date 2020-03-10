
<div class="row">
	<div class="col-lg-9 p-4">
		<h1 class="mt-3">Resultados de la búsqueda</h1>
		<hr>
		<div class="row">
			<?php foreach ($busqueda as $news): ?>
				<div class="col-lg-4 p-2 divNews">
					<a class="link-articles" href="<?php echo base_url() . 'home/noticia/' . $news->url . '?id=' . $news->id?>">
						<div class="divimg" style="background:url(<?php echo base_url('assets/images/') . $news->portada ?>); ">
						imagen here	
						</div>
						<h4 class="pt-2"><?php echo $news->titulo ?></h4>
						<p class="h6"><?php echo substr($news->resumen, 0, 90) ?>...</p>
						<span class="h6 badge bg-primary text-white"><?php echo $news->categoria ?></span>
					</a>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	
</div>
