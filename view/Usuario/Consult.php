
<div class="mt-5">
    <h3 class="display-4">Consultar Usuario</h3>

    <div class="col-md-3 mb-4"> Buscar por nombre <br>
        <input type="text" name="buscar" id="buscar" class="form-control" placeholder="Buscar..." data-url="<?php echo getUrl("Usuario","Usuario","filtro",false,"ajax");?>"> <br>

        Buscar por Documento
        <input type="text" name="buscar" id="buscar" class="form-control" placeholder="Buscar..." data-url="<?php echo getUrl("Usuario","Usuario","filtro2",false,"ajax");?>"> <br>
   
        <label for="">Rol</label>
            <select name="rol_id" class="form-control">
            <option value="">Seleccione...</option>
            

            <?php

            foreach ($roles as $rol) {
                echo "<option value='".$rol['rol_id']."'>".$rol['rol_nombre']."</option>";
                echo getUrl("Usuario","Usuario","filtro3",false,"ajax");
            }
            
            ?>
 </select>

    </div>

            
<div class="mt-5">
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Documento</th>
                <th>Contraseña</th>
                <th>Nombre</th>
                <th>Rol</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php

            foreach ($usuarios as $usu) {
                echo "<tr>";
                echo "<td>".$usu['usu_id']."</td>";
                echo "<td>".$usu['usu_docum']."</td>";
                echo "<td>".$usu['usu_clave']."</td>";
                echo "<td>".$usu['usu_nombre']."</td>";
                echo "<td>".$usu['rol_nombre']."</td>";
                

                echo "<td><a href='".getUrl("Usuario","Usuario","getUpdate",array
                    ("usu_id"=>$usu['usu_id']))."'><button class='btn btn-primary'>Editar</button></a></td>";
                echo "<td></td>";

                echo "<td><a href='".getUrl("Usuario","Usuario","getDelete",array
                    ("usu_id"=>$usu['usu_id']))."'><button class='btn btn-danger'>Eliminar</button></a></td>";
                
                echo "</tr>";
            }

            ?>
        </tbody>
    </table>
</div>