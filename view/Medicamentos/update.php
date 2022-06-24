<div class="mt-5">
    <h3 class="display-4">Editar Medicamento</h3>
</div>

<div class="mt-5">
    <?php
        foreach($medicamentos as $med){
    ?>

    <form action="<?php echo getUrl("Medicamentos","Medicamentos","postUpdate");?>"method="post">
    <label for="">Nombre del Medicamento</label>
    <br>
    <input type="hidden" name="med_id" value="<?php echo $med['med_id'];?>">
    <input type="text" name="med_nombre" class="form-contol" placeholder="Nombre del Medicamento" value="<?php echo $med['med_nombre'];?>">

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