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
                <h5><?php echo $data->titulo ?></h5>
                <p><?php echo $data->resumen ?>...</p>
                <a href="<?php echo base_url('admin/edit/') . $data->id ?>" class="font-weight-bold linkB" style="">Editar</a>
                <a href="javascript:deleteNews(<?php echo $data->id ?>)" class="font-weight-bold linkR">Borrar</a>
            </div> 
        <?php endforeach ?>
        



    <style>
        .linkB{
            border-bottom: 2px solid #0072FF;
            color: black;
        }

        .linkB:hover{
            background: #0072FF;
            color:white;
            text-decoration: none;
            padding: 4px;
        }

        .linkR{
            border-bottom: 2px solid red;
            color: black;
        }

        .linkR:hover{
            background: red;
            color:white;
            text-decoration: none;
            padding: 4px;
        }
    </style>

    </div>
    
    <div class="col-lg-4">3</div>
</div>