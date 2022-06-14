<div class="mt-5">
    <h3 class="display-4">Registrar Paciente</h3>
</div>

<div class="mt-5">
    <form action="<?php echo getUrl("Paciente","Paciente","postInsert");?>" method="POST">

    <div class="row">
        <div class="col-md-4">
            <label class="form-label">Paciente</label>
            <input type="text" name="pac_nombre" class="form-control" placeholder="Ingrese el Paciente">
        </div>


        <div class="col md-4 mt-4">
            <input type="submit" value="Enviar" class="btn btn-success mt-2">
        </div>
    </div>





    </form>
</div>