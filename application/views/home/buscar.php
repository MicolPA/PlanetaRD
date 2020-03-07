
<div class="row">
	<div class="col-lg-9 p-4">
		<h1 class="mt-3"></h1>
		<hr>
		<div class="row">
			<?php foreach ($busqueda as $news): ?>
				<div class="col-lg-4 p-2 divNews">
					<a class="link-articles" href="<?php echo base_url() . 'home/noticia/' . $news->url . '?id=' . $news->id?>">
						<img src="<?php echo base_url('assets/images/') . $news->portada ?>" width='100%'>
						<h4 class="text-primary"><?php echo $news->titulo ?></h4>
						<p><?php echo $news->resumen ?></p>
					</a>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	
</div>
