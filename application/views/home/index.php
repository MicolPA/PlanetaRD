<?php 
			$firstNew = $this->db->query('SELECT * FROM noticia order by id DESC LIMIT 1');
			$secondNew = $this->db->query('SELECT * FROM noticia order by id DESC LIMIT 1,1');
			$thirdNew = $this->db->query('SELECT * FROM noticia order by id DESC LIMIT 2,1');
			$fouthNew = $this->db->query('SELECT * FROM noticia order by id DESC LIMIT 3,1');
			$firstNew = $firstNew->result();
			$secondNew = $secondNew->result();
			$thirdNew = $thirdNew->result();
			$fouthNew = $fouthNew->result();
?>
<div class="row">
	<?php foreach ($firstNew as $firstNew): ?>
		<div class="col-lg-6 p-3">
			<div class=" primeraPlanaDivs" style="background-image: url(<?php echo base_url('assets/images/') . $firstNew->portada; ?>); height: 405px; background-size:100% 405px;background-position: center;">
			<a href="<?php echo $firstNew->url ?>" class="shadow p-3 mb-5 rounded"><?php echo $firstNew->titulo ?></a>
			</div>
		</div>
	<?php endforeach ?>
	<div class="col-lg-6 p-3">
		<?php foreach ($secondNew as $secondNew): ?>
			<div class="row" style="margin-bottom: 5px">
				<div class="col-lg-12 primeraPlanaDivs bg-info" style="background-image: url(<?php echo base_url('assets/images/') . $secondNew->portada; ?>); height: 200px;background-size:100% ;background-position: center;"><a href="#" class="shadow p-3 mb-5 rounded"><?php echo $secondNew->titulo ?></a></div>
			</div>
		<?php endforeach ?>
		<div class="row">
			<?php foreach ($thirdNew as $thirdNew): ?>
				<div class="col-lg-6 primeraPlanaDivs bg-primary" style="background-image: url(<?php echo base_url('assets/images/') . $thirdNew->portada; ?>);height: 200px; background-size: 100% 200px"><a href = "" class="shadow p-3 mb-5 rounded">bottom l</a></div>
			<?php endforeach ?>
			<?php foreach ($fouthNew as $fouthNew): ?>
				<div class="col-lg-6 primeraPlanaDivs bg-primary" style="background-image: url(<?php echo base_url('assets/images/') . $fouthNew->portada; ?>);height: 200px; background-size: 100% 200px"><a href = "" class="shadow p-3 mb-5 rounded">bottom l</a></div>
			<?php endforeach ?>
		</div>
		
	</div>
</div>

<div class="row">
	<div class="col-lg-12 bg-dark p-5 text-white text-center">
		Este es un anuncio
	</div>
</div>



<div class="row">
	<div class="col-lg-9 p-4">
		<div class="row">
			<?php foreach ($displayNewsHome as $news): ?>
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


<style type="text/css">


	
</style>