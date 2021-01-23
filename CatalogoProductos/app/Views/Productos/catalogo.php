<br>
<br>

    <div class="row">
        
        <?php if ($producto):?>
            <?php foreach($producto as $pr):?>
                <div class="col l3 m6 s12" id="lista">
                    <div class="col s12 m7">
                        <div class="card">
                            <div class="card-image">
                                <img class="responsive-img" src="<?php echo base_url('public/Imagenes/'. $pr['img']);?>">
                            </div>
                            <div class="card-content">
                                <b>Nombre: </b> <?php echo $pr['nombre']?>
                                <hr>
                                <b>Marca: </b> <?php echo$pr['marca']?>
                                <hr>
                                <b>Categoria: </b> <?php echo $pr['descripcion']?>
                            </div>
                        </div>
                    </div>
                    
                </div>
            <?php endforeach;?>
        <?php else:?>
        <h1 class="center">No hay productos disponibles :(</h1>
        <?php endif;?>
    </div>


<br>