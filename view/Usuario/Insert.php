<div class="mt-5">
    <h3 class="display-4">Registrar Usuario</h3>
</div>
<div class="mt-5">
    <form action="<?php echo getUrl("Usuario","Usuario","postInsert"); ?>" method="post">

    <div class="row">
        <div class="col-md-4">
            <label for="">Documento</label>
            <input type="number" name="usu_docum" class="form-control" placeholder="Documento">
            
            <label for="">Contraseña</label>
            <input type="password" name="usu_clave" class="form-control" placeholder="Contraseña">
            
            
        </div>

        

        <div class="col-md-4">
            <label for="">Rol</label>
            <select name="rol_id" class="form-control">
            <option value="">Seleccione...</option>
            <?php

            foreach ($roles as $rol) {
                echo "<option value='".$rol['rol_id']."'>".$rol['rol_nombre']."</option>";
            }
            
            ?>
            </select>
            <label for="">Nombre del usuario</label>
            <input type="text" name="usu_nombre" class="form-control" placeholder="Nombre">
        </div>
            <div class="col-md-4 mt-4">
                <input type="submit" value="Enviar" class="btn btn-success">
            </div>



    </div>

    </form>
</div>