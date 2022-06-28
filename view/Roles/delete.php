<div class="mt-5">
<h3 class="display-4">¿Quieres eliminar este registro?</h3>
    
</div>

<div class="mt-5">
    <?php
        foreach($roles as $rol){
    ?>

<div class="row">
            <div class="col-md-4">

    <form action="<?php echo getUrl("roles","roles","postDelete");?>"method="post">
    <label for="">Nombre del Rol</label>
    <br>
    <input type="hidden" name="rol_id" value="<?php echo $rol['rol_id'];?>">
    <input type="text"  class="form-control" name="rol_nombre" placeholder="Ingrese el departamento" value="<?php echo $rol['rol_nombre']; ?>" readonly>
</div>

<div class="col-md-4 mt-4">

    <input type="submit" value="Aceptar" class="btn btn-success">
    <input type="submit" value="Cancelar" class="btn btn-danger" formaction="<?php echo getUrl("Roles","Roles","consult");?>">

</div>

    </div>
</form>
    <?php
        }
    ?>
</div>