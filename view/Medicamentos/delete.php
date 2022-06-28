<div class="mt-5">
    <h3 class="display-4">Eliminar Medicamento</h3>
</div>

<div class="mt-5">
    <?php
        foreach($medicamentos as $med){
    ?>

    <form action="<?php echo getUrl("medicamentos","medicamentos","postDelete");?>"method="post">
   
    <div class="row">

<div class="col-md-4">
     <label for="">Nombre del Medicamento</label>

    <input type="hidden" name="med_id" value="<?php echo $med['med_id']; ?>">
    <input type="text" class="form-control" name="med_nombre" placeholder="Ingrese el genero" value="<?php echo $med['med_nombre'];?>" readonly>

</div>

<div class="col-md-4 mt-3">
    <input type="submit"   value="Enviar" class="btn btn-success mt-2">
    <input type="submit" value="Cancelar" class="btn btn-danger mt-2" formaction="<?php echo getUrl("Medicamentos","Medicamentos","consult");?>">

</div>


</div>

</form>
    <?php
        }
    ?>
</div>  