<div class="row">
    <div class="col-lg-12 mt-5">
        <h2>Noticias publicadas</h2>
        <hr>
    </div>
</div>

<div class="row mt-3">
    <div class="col-lg-8">
        <?php foreach ($news as $data): ?>
           <div class="col-lg-12 p-3 mb-3 border">
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo base_url('assets/images/') . $data->portada ?>" width='100%' height ='190px'>
                    </div>
                    <div class="col-md-8">
                        <h5 class="font-weight-bold"><?php echo $data->titulo ?></h5>
                        <p class="h6 mb-4"><?php echo substr($data->resumen, 0, 250) ?>...</p>
                        <a href="<?php echo base_url('admin/edit/') . $data->id ?>" class="font-weight-bold btn btn-primary btn-sm" style="">Editar</a>
                         <a href="javascript:deleteNews(<?php echo $data->id ?>)" class="font-weight-bold btn btn-danger btn-sm">Borrar</a>
                    </div>
                </div>
                
            </div> 
        <?php endforeach ?>
        
    </div>
    
    <div class="col-lg-4"></div>
</div>