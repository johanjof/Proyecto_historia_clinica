<div class="mt-5">
    <h3 class="display-4">Editar Roles</h3>
</div>

<div class="mt-5">
    <?php
        foreach($roles as $rol){
    ?>

    <form action="<?php echo getUrl("roles","roles","postUpdate");?>"method="post">
    <label for="">Nombre del Rol</label>
    <br>
    <div class="row">
    <div class="col-md-4">

    <input type="hidden" name="rol_id" value="<?php echo $rol['rol_id'];?>">
    <input type="text" class="form-control" name="rol_nombre" placeholder="Ingrese el rol del paciente" value="<?php echo $rol['rol_nombre']; ?>">
</div>
    
<div class="col-md-4 ">
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>
    </div>

    
</form>
    <?php
        }
    ?>
</div>