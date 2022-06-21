<h3 class="display-4">¿Quieres eliminar este registro?</h3>
<?php
    while ($usu=mysqli_fetch_assoc($usuario)) {
?>
    <form action="<?php echo getUrl("Usuario","Usuario","postDelete") ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4 mt-4">
                <label>Documento</label>
                <input type="hidden" name="usu_id" value="<?php echo $usu['usu_id']; ?>">
                <input type="number" readonly name="usu_docum" class="form-control" value="<?php
                echo $usu['usu_docum']; ?>" placeholder="Documento">
                <label>Contraseña</label>
                <input type="text" readonly name="usu_clave" class="form-control" value="<?php
                echo $usu['usu_clave']; ?>" placeholder="Contraseña">
            </div>
            <div class="form-group col-md-4 mt-4">
                <label>Rol</label>
                <input type="text" readonly name="rol_nombre" class="form-control" value="<?php echo $usu['rol_nombre']; ?>">
                
                <label>Nombre del usuario</label>
                <input type="text" readonly name="usu_nombre" class="form-control" value="<?php
                echo $usu['usu_nombre']; ?>" placeholder="Nombre">
            </div>
            <div class="col-md-4 mt-5">
               <input type="submit" value="Aceptar" class="btn btn-success"> 
             <input type="submit" value="Cancelar" class="btn btn-danger" formaction="<?php echo getUrl("Usuario","Usuario","consult");?>">

            </div>
        </div>
    </form>
<?php
    }
?>