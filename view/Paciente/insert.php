
<div class="mt-5">
    <center>
    <h3 class="display-4">Registrar Paciente</h3>

    <div class="mt-5">

        <form action="<?php echo getUrl("Paciente","Paciente","postInsert");?>" method="POST">
    
        
        
        <table>
            <tr>
           <th><font face="Calibri">Documento</font></th> 
           <th><font face="Calibri">Nombre</font></th>
           <th><font face="Calibri">Apellido</font></th>
            </tr>

         <tr>
            <th> <input type="number"></label></th>
            <th> <input type="text"></label></th>
            <th> <input type="text"></label></th>
            </tr>   
        </table>
        <br>
        <table>
        <tr>
            <th><font face="Calibri">Direccion</font></th>
            <th><font face="Calibri">Telefono</font></th>
            <th><font face="Calibri">Correo</font></th>
        </tr>
        <tr>
            <th> <input type="text"></label></th>
            <th> <input type="number"></label></th>
            <th> <input type="mail"></label></th>
        </tr>
    
        <tr>
        <div class="col-md-4">
            <label for="">Rol</label>
            <select name="rol_id" class="form-control">
            <option value="">Seleccione...</option>
            <?php

            foreach ($hobbies as $hob) {
                echo "<option value='".$rol['rol_id']."'>".$rol['rol_nombre']."</option>";
            }
            
            ?>
        </div>
        </tr>
        <tr>
            <td><input type="checkbox" name="hobbies" value="1">Ir a cine <br>
            <input type="checkbox" name="hobbies" value="2">Playa <br>
            <input type="checkbox" name="hobbies" value="3">Comida
        </td>
            <th><select name="Genero">
                <option>Masculino</option>
                <option>Femenino</option>
            </select></th>
            <td>
                <input type="radio" name="hobbies" value="4">Estrato 1 <br>
                <input type="radio" name="hobbies" value="5">Estrato 2 <br>
                <input type="radio" name="hobbies" value="6">Estrato 3
            </td>
        </tr>
        </table> 
        <br>

        </div>


        <div>
            <input type="submit" value="Enviar" class="btn btn-success mt-2">
        </div>
    </div>




    
    </form>
    </center>
</div>  