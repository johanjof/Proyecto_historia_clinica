
<div class="mt-5">
    <h3 class="display-4">Consultar Usuario</h3>

    <div class="col-md-3 mb-4"> <br>
        <input type="text" name="buscar" id="buscar" class="form-control" placeholder="Buscar..." data-url="<?php echo getUrl("Usuario","Usuario","filtro",false,"ajax");?>"> <br>


    </div>

            
<div id="lol" class="mt-5">
    <table id="lol" class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Documento</th>
                <th>Contraseña</th>
                <th>Nombre</th>
                <th>Rol</th>
                <th>Acciones</th>
                
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

                echo "<td><a href='".getUrl("Usuario","Usuario","getDelete",array
                    ("usu_id"=>$usu['usu_id']))."'><button class='btn btn-danger'>Eliminar</button></a></td>";
                    
                
                echo "</tr>";
            }

            ?>
        </tbody>
    </table>
</div>