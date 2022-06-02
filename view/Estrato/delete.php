<div class="mt-5">
    <h3 class="display-4">Seguro que quieres eliminar este Estrato</h3>
</div>
<div class="mt-5">
    <?php
        foreach ($estrato as $estr){
    ?>
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <label class="form-label">Nombre</label>
                <input type="hidden" name="estr_id" value="<?php echo $estr['estr_id']; ?>">
                <input type="text"  class="form-control" name="estr_nombre" placeholder="Ingrese el departamento" value="<?php echo $estr['estr_nombre']; ?>" readonly>
            </div>
            <div class="col-md-4 mt-4">
                <input type="submit" value="Aceptar" class="btn btn-success mt-2" formaction="<?php echo getUrl("Estrato","Estrato","postDelete") ?>">
                <input type="submit" value="Cancelar" class="btn btn-danger mt-2" formaction="<?php echo getUrl("Estrato","Estrato","consult");?>">
            </div>
        </div>
    </form>
    <?php
        }
    ?>
</div>