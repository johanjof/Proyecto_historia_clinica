<?php 

    foreach ($usuarios as $usu){
        echo "<tr>";
            echo "<td>".$usu['usu_id']."</td>";
            echo "<td>".$usu['usu_docum']."</td>";
            echo "<td>".$usu['']."</td>";
            echo "<td>".$usu['usu_nombre']."</td>";
            echo "<td>".$usu['rol_nombre']."</td>";
                        //Llamar imagen
            /* echo "<td><img src='".$ciu['ciu_img']."' width='100px'></td>";
 */
                        //Boton de editar
            echo "<td> <a href='".getUrl("Usuario", "Usuario", "getUpdate", 
                                array("usu_id"=>$usu['usu_id']))."'>
                                <button class='btn btn-primary'>Editar</button></a></td>";
                        //Boton de Eliminar
            echo "<td> <a href='".getUrl("Usuario", "Usuario","getDelete",array("usu_id"=>$usu['usu_id']))."'>
                        <button class='btn btn-warning'>Eliminar</button></a></td>";
        echo "</tr>";
                }

?>