<br><br>

<div class="container">

    <div class="row">
        <form class="col s12" action="<?php echo base_url('productos/modificado')?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= esc($producto['id'])?>">
            <input type="hidden" name="imgold" value="<?= esc($producto['img'])?>">
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate" required name="nom" value="<?= esc($producto['nombre'])?>">
                    <label for="icon_prefix" class="active">Nombre del producto</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate" required name="marca" value="<?= esc($producto['marca'])?>">
                    <label for="icon_prefix" class="active">Marca</label>
                </div>
                <div class="input-field col s12">
                    <h5>Imagen Actual: </h5>
                    <img id="imgold" src="<?php echo base_url('public/Imagenes/'.$producto['img']);?>" >
                </div>
                <div class="input-field col s12">
                    <div class="file-field input-field">
                        <div class="btn black">
                            <span>Imagen</span>
                            <input type="file" name="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn waves-effect" type="submit">
                Editar Producto
                <i class="material-icons left">send</i>
            </button>
        </form>
    </div>

</div>