<br><br>

<div class="container">

    <div class="row">
        <form class="col s12" action="<?php echo base_url('productos/guardar')?>" method="post"
            enctype="multipart/form-data">
            <div class="row">
                <div class="input-field col s12">
                    <input id="icon_prefix" type="text" class="validate" required name="nom">
                    <label for="icon_prefix">Nombre del producto</label>
                </div>
                <div class="input-field col s12">
                    <input id="icon_prefix" type="text" class="validate" required name="marca">
                    <label for="icon_prefix">Marca</label>
                </div>
                <div class="input-field col s12">
                    <select name="cat">
                        <option value="" disabled selected>Escoge la opcion</option>
                        <?php foreach ($categoria as $c):?>
                            <option value="<?php echo $c['id']?>"><?php echo $c['descripcion']?></option>
                        <?php endforeach?>
                    </select>
                    <label>Categoria</label>
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
                Agregar Producto
                <i class="material-icons left">send</i>
            </button>
        </form>
    </div>

</div>