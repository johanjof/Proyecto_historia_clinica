<div class="mt-5">
<h3 class="display-4">¿Quieres eliminar este registro?</h3>
    
</div>

<div class="mt-5">
    <?php
        foreach($hobbies as $hob){
    ?>
<div class="row">
            <div class="col-md-4">
    <form action="<?php echo getUrl("hobbies","hobbies","postDelete");?>"method="post">
    <label for="">Nombre del Hobbies</label>
    <br>
    <input type="hidden" name="hob_id" value="<?php echo $hob['hob_id'];?>">
    <input type="text"  class="form-control" name="hob_nombre" placeholder="Ingrese el departamento" value="<?php echo $hob['hob_nombre']; ?>" readonly>
</div>

<div class="col-md-4 mt-4">

  
    <input type="submit"  value="Aceptar" class="btn btn-success">
    <input type="submit" value="Cancelar" class="btn btn-danger" formaction="<?php echo getUrl("Hobbies","Hobbies","consult");?>">

</div>

    </div>
</form>
    <?php
        }
    ?>
</div>