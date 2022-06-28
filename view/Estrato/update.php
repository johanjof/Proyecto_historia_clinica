<div class="mt-5">
    <h3 class="display-4">Editar Estrato</h3>
</div>
<div class="mt-5">
    <?php
        foreach($estratos as $estr){
    ?>
    <form action="<?php echo getUrl("Estrato","Estrato","postUpdate") ?>" method="post">
        <div class="row">
            <div class="col-md-4">
                <label class="form-label">Nombre</label>
                <input type="hidden" name="estr_id" value="<?php echo $estr['estr_id']; ?>">
                <input type="text" class="form-control" name="estr_nombre" placeholder="Ingrese el nombre del paciente" value="<?php echo $estr['estr_nombre']; ?>">
            </div>
      
            <div class="col-md-4 mt-4">
                <input type="submit" value="Enviar" class="btn btn-success mt-2">
            </div>
        </div>
    </form>
    <?php
        }
    ?>
</div>