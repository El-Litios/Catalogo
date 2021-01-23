<br>

<div class="container">

    <div>
    <a class="btn blue right" href="<?php echo base_url('productos/agregar')?>">Agregar producto</a>
    </div>

    <table class="striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Archivo</th>
                <th>Categoria</th>
                <th>Gestion</th>
            </tr>
        </thead>

        <tbody>
            <?php if ($producto): ?>
                <?php foreach ($producto as $pr):?>
                <tr>
                    <td><?php echo $pr['id'] ?></td>
                    <td><?php echo $pr['nombre'] ?></td>
                    <td><?php echo $pr['marca'] ?></td>
                    <td><a href="<?php echo base_url('public/Imagenes/'.$pr['img'])?>"><?php echo $pr['img']?></a></td>
                    <td><?php echo $pr['descripcion']?></td>
                    <td>
                        <a class="btn orange lighten-1 waves-effect" href="<?php echo base_url('/productos/edicion/'.$pr['id'])?>"><i class="material-icons">edit</i></a>
                        <a class="btn red lighten-1 waves-effect" href="<?php echo base_url('/productos/borrado/'.$pr['id'].'/'.$pr['img'])?>"><i class="material-icons">delete</i></a>
                    </td>
                </tr>
                <?php endforeach; ?> 
            <?php else:?>
            <h2>No hay productos disponibles!!!</h2>
            <?php endif; ?>
        </tbody>
    </table>

</div>
<br>