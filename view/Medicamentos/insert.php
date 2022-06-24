<div class="mt-5">
    <h3 class="display-4">Registrar Medicamento</h3>
</div>

<div class="mt-5">
    <form action="<?php echo getUrl("Medicamentos","Medicamentos","postInsert");?>" method="POST">

    <div class="row">
        <div class="col-md-4">
            <label class="form-label">Medicamento</label>
            <input type="text" name="med_nombre" class="form-control" placeholder="Ingrese el Medicamento">
        </div>


        <div class="col md-4 mt-4">
            <input type="submit" value="Enviar" class="btn btn-success mt-2">
        </div>
    </div>





    </form>
</div>