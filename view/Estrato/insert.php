<div class="mt-5">
    <h3 class="display-4">Registrar Estrato</h3>
</div>
<div class="mt-5">
    <form action="<?php echo getUrl("Estrato","Estrato","postInsert") ?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="estr_nombre" placeholder="Ingrese el nombre del estrato" required>
            </div>
            <div class="col-md-4 mt-4">
                <input type="submit" value="Enviar" class="btn btn-success mt-2">
            </div>
        </div>
    </form>
</div>