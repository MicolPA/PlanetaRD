<?php foreach ($newsPerCategory as $news): ?>
	
<?php endforeach ?>


<div class="row">
	<div class="col-lg-9 p-4">
		<h1 class="mt-3"><?php echo $news->categoria ?></h1>
		<hr>
		<div class="row">
			<?php foreach ($newsPerCategory as $news): ?>
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
	<div class="col-lg-3 p-4">
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
		
	</div>
</div>