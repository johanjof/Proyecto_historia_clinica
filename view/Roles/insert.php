<div class="mt-5">
    <h3 class="display-4">Registrar Rol</h3>
</div>

<div class="mt-5">
    <form action="<?php echo getUrl("Roles","Roles","postInsert");?>" method="POST">

    <div class="row">
        <div class="col-md-4">
            <label class="form-label">Rol</label>
            <input type="text" name="rol_nombre" class="form-control" placeholder="Ingrese el Rol">
        </div>


        <div class="col md-4 mt-4">
            <input type="submit" value="Enviar" class="btn btn-success mt-2">
        </div>
    </div>





    </form>
</div>