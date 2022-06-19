<div class="mt-5">
    <center>
    <h3 class="display-4">Editar Paciente</h3>


<div class="mt-5">
    <?php
        foreach($paciente as $pac){
    ?>

    <form action="<?php echo getUrl("paciente","paciente","postUpdate");?>"method="post">
            
    <table>
            <tr>
           <th><font face="Calibri">Documento</font></th> 
           <input type="hidden" name="usu_id" value="<?php echo $usu['usu_id']; ?>">
           <th><font face="Calibri">Nombre</font></th>
           <th><font face="Calibri">Apellido</font></th>
            </tr>

         <tr>
            <th>   <input type="text" name="pac_id" class="form-control" placeholder="Documento" required="required"></th>
            <th>  <input type="text" name="pac_nombre" class="form-control" placeholder="Nombres" required="required"></th>
            <th> <input type="text" name="pac_apellido" class="form-control" placeholder="Apellidos" required="required"></th>
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
        <th><input type="text" name="pac_direccion" class="form-control" placeholder="Dirección" required="required">
            </th>
            <th> <input type="number" name="pac_telefono" class="form-control" placeholder="Teléfono" required="required">
           </th>
             <th> <input type="mail" name="pac_correo" class="form-control" placeholder="correo" required="required">
            </th>
        </tr>
    
      <tr>
            <td><input type="checkbox" name="hob_nombre" value="1">Ir a cine <br>
            <input type="checkbox" name="hob_nombre" value="2">Playa <br>
            <input type="checkbox" name="hob_nombre" value="3">Comida
        </td>
        <td>
                    <div class="row-md-4">
                    <center><label class="form-label">genero</label></center>
                            <select name="pac_gen" class="form-control" required="required">
                                <option value="">Seleccione....</option>
                            <?php
                                foreach ($generos as $gen){
                                    echo "<option value='".$gen['gen_id']."'>".$gen['gen_nombre']."</option>";
                                }
                            ?>
                            </select>
                    </div>
                </td>
          


         <td>
                <input type="radio" name="estr_id" value="4"> Estrato 1 <br>
                <input type="radio" name="estr_id" value="5"> Estrato 2 <br>
                <input type="radio" name="estr_id" value="6"> Estrato 3
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
  
  
  <!-- <label for="">Nombre del paciente</label>
    <br>
    <input type="hidden" name="pac_id" value="<?php echo $pac['pac_id'];?>">
    <input type="text" name="pac_nombre" class="form-contol" placeholder="Nombre del Paciente" value="<?php echo $hob['hob_nombre'];?>">

</div>

<div class="col-md-4 mt-4">
    <input type="submit" value="Enviar" class="btn btn-success">
</div>

    </div>
</form> -->

</div> 
 <?php 
 }
    ?> 

