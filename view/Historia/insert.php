<div class="mt-5">
    <center>
    <h3 class="display-4">Registrar historia medica</h3>
</div>

<div class="mt-5">
    <?php
        foreach($paciente as $pac){
    ?>
    
<center>
<table>
            <tr>
           <th><font face="Calibri">Documento</font></th> 
           <th><font face="Calibri">Nombre</font></th>
           <th><font face="Calibri">Apellido</font></th>
            </tr>

         <tr>
            <input type="hidden" name="pac_id" value="<?=$pac['pac_id']?>">
            <th>   <input type="text" readonly name="pac_documento" class="form-control" readonly value="<?php echo $pac['pac_documento'];?>"></th>
            <th>  <input type="text" readonly name="pac_nombre" class="form-control" value="<?php echo $pac['pac_nombre'];?>" ></th>
            <th> <input type="text" readonly name="pac_apellido" class="form-control" value="<?php echo $pac['pac_apellido'];?>"></th>
            </tr>   
        </table>

        <table>
        <tr>
            <th><font face="Calibri">Direccion</font></th>
            <th><font face="Calibri">Telefono</font></th>
            <th><font face="Calibri">Correo</font></th>
        </tr>
        <tr>
        <th><input type="text" readonly name="pac_direccion" class="form-control" value="<?php echo $pac['pac_direccion'];?>">
            </th>
            <th> <input type="number" readonly name="pac_telefono" class="form-control" required="required" value="<?php echo $pac['pac_telefono'];?>">
           </th>
             <th> <input type="mail" readonly name="pac_correo" class="form-control" required="required" value="<?php echo $pac['pac_correo'];?>">
            </th>
        </tr>
        </table>

        <?php
        }
         ?>
</div>
<center>
<div class="mt-3">
    <form action="<?php echo getUrl("Historia","Historia","postInsert",array("pac_id"=>$pac['pac_id']));?>" method="post">
    <table>
        <tr>
            <th><font face="Calibri">Motivo de visita </font></th>
            <th><font face="Calibri">Esfera ojo derecho</font></th>
            <th><font face="Calibri">Circunferencia ojo derecho</font></th>
        </tr>
        <tr>
        <th><input type="text" name="hist_motv" class="form-control" placeholder="Motivo  de visita " required="required">
            </th>
            <th> <input type="number" name="hist_esfod" class="form-control" >
           </th>
             <th>  <input type="number" name="hist_cilod" class="form-control">
            </th>
        </tr>
        </table>
        <table>
        <tr>
            <th><font face="Calibri">Eje ojo derecho</font></th>
            <th><font face="Calibri">Esfera ojo ziquierdo</font></th>
            <th><font face="Calibri">Circunferencia ojo izquierdo</font></th>
        </tr>
        <tr>
        <th><input type="number" name="hist_ejeod" class="form-control">
            </th>
            <th> <input type="number" name="hist_esfoi"class="form-control" >
           </th>
             <th>  <input type="number" name="hist_ciloi" class="form-control">
            </th>
        </tr>
        </table>
        <table>
        <tr>
            <th><font face="Calibri">Eje ojo izquierdo</font></th>
            <th><font face="Calibri">Diametro ojo derecho</font></th>
            <th><font face="Calibri">Diametro ojo izquierdo</font></th>
        </tr>
        <tr>
        <th><input type="number" name="hist_ejeoi" class="form-control">
            </th>
            <th> <input type="number" name="hist_diaod"class="form-control" >
           </th>
             <th>  <input type="number" name="hist_diaoi" class="form-control">
            </th>
        </tr>
        </table>

            <div class="col-md-4">
                <label class="form-label">Recomendaciones</label>
                <input type="text" name="hist_recom" class="form-control" >
            </div>
           
        </div>
        




        <div class="row">
        <center> 
            <div class="col-md-4 mt-4">
               <input type="submit" value="Enviar" class="btn btn-success mt-2">
            </center>
            </div>


    </form>
 



</center>