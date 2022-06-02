<h3 class="display-4 mt-4">Editar Usuarios</h3>
<?php
    while ($usu=mysqli_fetch_assoc($usuario)) {
?>
    <form action="<?php echo getUrl("Usuario","Usuario","postUpdate") ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4 mt-4">
                <label>Documento</label>
                <input type="hidden" name="usu_id" value="<?php echo $usu['usu_id']; ?>">

                <input type="text" name="usu_docum" class="form-control" value="<?php echo $usu
                ['usu_docum']; ?>" placeholder="Documento">

                <label for="">Contraseña</label>
                <input type="text" name="usu_clave" class="form-control" value="<?php echo $usu
                ['usu_clave']; ?>" placeholder="Contraseña">

                
                
                
            </div>
            
            <div class="form-group col-md-4 mt-4">
                <label>Roles</label>
                <select name="rol_id" class="form-control">
                    <option value="">Seleccione...</option>
                    <?php
                        while ($rol=mysqli_fetch_assoc($roles)) {
                            if ($rol['rol_id']==$usu['rol_id']) {
                                $select="selected";
                            }else{
                                $select="";
                            }
                            echo "<option value='".$rol['rol_id']."'$select>".$rol['rol_nombre']."</option>";
                        }
                    ?>
                </select>
                <label for="">Nombre del usuario</label>
                <input type="text" name="usu_nombre" class="form-control" value="<?php echo $usu
                ['usu_nombre']; ?>" placeholder="Nombre">
            </div>
            <div class="col-md-4 mt-5">
               <input type="submit" value="enviar" class="btn btn-success"> 
            </div>
        </div>
    </form>
<?php
    }
?>