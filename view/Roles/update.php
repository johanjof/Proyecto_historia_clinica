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
    <input type="hidden" name="rol_id" value="<?php echo $rol['rol_id'];?>">
    <input type="text" name="rol_nombre" class="form-contol" placeholder="Nombre del Rol" value="<?php echo $rol['rol_nombre'];?>">

</div>

<div class="col-md-4 mt-4">
    <input type="submit" value="Enviar" class="btn btn-success">
</div>

    </div>
</form>
    <?php
        }
    ?>
</div>