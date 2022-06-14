<div class="mt-5">
    <h3 class="display-4">Eliminar Paciente</h3>
</div>

<div class="mt-5">
    <?php
        foreach($paciente as $pac){
    ?>

    <form action="<?php echo getUrl("paciente","paciente","postDelete");?>"method="post">
    <label for="">Nombre del Paciente</label>
    <br>
    <input type="hidden" name="pac_id" value="<?php echo $pac['pac_id'];?>">
    <input type="text" name="pac_nombre" class="form-contol" placeholder="Nombre del Paciente" value="<?php echo $pac['pac_nombre'];?>">
</div>

<div class="col-md-4 mt-4">
    <input type="submit" value="Aceptar" class="btn btn-success">
</div>

    </div>
</form>
    <?php
        }
    ?>
</div>