<div class="mt-5">
    <h3 class="display-4">Editar Hobbie</h3>
</div>

<div class="mt-5">
    <?php
        foreach($hobbies as $hob){
    ?>

    <form action="<?php echo getUrl("hobbies","hobbies","postUpdate");?>"method="post">
    <label for="">Nombre del Hobbie</label>
    <br>
    <input type="hidden" name="hob_id" value="<?php echo $hob['hob_id'];?>">
    <input type="text" name="hob_nombre" class="form-contol" placeholder="Nombre del Hobbie" value="<?php echo $hob['hob_nombre'];?>">

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