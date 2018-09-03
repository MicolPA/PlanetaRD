<div class="row">
	<div class="col-lg-12 bg-dark p-5 text-white text-center">
		Este es un anuncio
	</div>
</div>
<?php foreach ($readNew as $data): ?>
<div class="container-fluid p-5">
	<div class="row">
		<div class="col-lg-9">
			<div class="blog-post">
				<h1 class="blog-post-title"><?php echo $data->titulo ?></h1>
				<p class="blog-post-meta">Por <?php echo $data->autor ?> | <?php echo $data->fecha ?></p>
			</div>

			<img class="mb-4" src="<?php echo base_url('assets/images/') . $data->portada ?>" width='100%	' alt="">

			<?php echo $data->contenido ?>

			<h4 class="mt-5">Últimas noticias</h4>
			<hr>
			<div class="row">
				<?php foreach ($latestNews as $info): ?>
				<div class="col-lg-3 p-2 divNews">
					<a class="link-articles" href="<?php echo base_url() . 'home/noticia/' . $info->url . '?id=' . $info->id?>">
						<img src="<?php echo base_url('assets/images/') . $info->portada ?>" width='100%'>
							<h6 class="text-dark"><?php echo $info->titulo ?></h6>
					</a>
				</div>
			<?php endforeach ?>

			</div>	
		</div>

		<div class="col-lg-3">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <ins class="adsbygoogle"
                     style="display:block; text-align:center;"
                     data-ad-layout="in-article"
                     data-ad-format="fluid"
                     data-ad-client="ca-pub-9702779870024214"
                     data-ad-slot="4896787162"></ins>
                <script>
                     (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
			<div class="list-group">
		  		<?php foreach ($latestNews as $data): ?>
		  			<a href="<?php echo base_url('home/noticia/') . $data->url . '?id=' . $data->id ?>" class="list-group-item list-group-item-action flex-column align-items-start mb-2">
				    <div class="d-flex w-100 justify-content-between">
				      <h5 class="mb-1"><?php echo $data->titulo ?></h5>
				    </div>
				    <p class="mb-1"><?php echo $data->resumen ?></p>
				    <small><?php echo 'Por ' . $data->autor ?></small>
				  </a>
		  		<?php endforeach ?>
		     
			</div>
		</div>
	</div>

	

</div>	
<?php endforeach ?>



<style>

</style>
