<div class="mt-5">
    <center>
    <h3 class="display-4">Historia Clinica</h3>
</div>

<div class="mt-5">
    <?php
        foreach($paciente as $pac){
    ?>
    <hr>
<center>
<table table style="border: hidden">
            <tr>
           <th><font face="Calibri">Documento</font></th> 
           <th><font face="Calibri">Nombre</font></th>
           <th><font face="Calibri">Apellido</font></th>
            </tr>

         <tr>
            <input type="hidden" name="pac_id" value="<?=$pac['pac_id']?>">
            <th><?php echo $pac['pac_documento'];?></th>
            <th><?php echo $pac['pac_nombre'];?></th>
            <th><?php echo $pac['pac_apellido'];?></th>
            </tr>   
        </table>

        <table table style="border: hidden">
        <tr>
            <th><font face="Calibri">Telefono:</font></th>
            <th><font face="Calibri">Genero:</font></th>
            <th><font face="Calibri">Estrato:</font></th>
        </tr>
        <tr>
        <th><?php echo $pac['pac_telefono'];?>
            </th>
            <td>
                    <div class="row-md-4">
                   
                           
                               
                            <?php
                                foreach ($generos as $gen){
                                    if ($gen['gen_id']==$pac['gen_id']) {
                                        echo $gen['gen_nombre'];
                                    }
                                  
                                    
                                }
                                    
                                
                            ?>
                          
                    </div>
                </td>
                <th> <div class="row-md-4">
                  
                  
                     
                  <?php
                      foreach ($estratos as $str){
                          if ($str['estr_id']==$pac['estr_id']) {
                            echo $str['estr_nombre'];
                         
                          }
                          
                      }
                          
                      
                  ?>
                  </select>
          </div>
                  </th>
              
  </tr>   
</table>

           
            
        </tr>
        </table>
        

        <?php
        }
         ?>
</div>
<hr>
<center>
<div class="mt-3">
    <form action="<?php echo getUrl("Historia","Historia","postInsert",array("pac_id"=>$pac['pac_id']));?>" method="post">
    <table>
        <tr>
            <th><font face="Calibri">Motivo de visita </font></th>
            <th><font face="Calibri">Esfera OD </font></th>
            <th><font face="Calibri">Cilindro OD</font></th>
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
            <th><font face="Calibri">Eje OD</font></th>
            <th><font face="Calibri">Esfera OI</font></th>
            <th><font face="Calibri">Cilindro OI</font></th>
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
            <th><font face="Calibri">Eje OI</font></th>
            <th><font face="Calibri">Diagnostico Ojo Derecho </font></th>
            <th><font face="Calibri">Diagnostico  ojo izquierdo</font></th>
        </tr>
        <tr>
        <th><input type="number" name="hist_ejeoi" class="form-control">
            </th>
            <th> <input type="text" name="hist_diaod"class="form-control" >
           </th>
             <th>  <input type="text" name="hist_diaoi" class="form-control">
            </th>
        </tr>
        </table>
        
        <table>
        <div class="col-md-4">
        <th> 

        <font face="Calibri">Recomendaciones:</font>
        <br>
        <textarea  name="hist_recom"> </textarea> 

        
    </th>

            
           
            
           
        </div>
    </table>
        




        <div class="row">
        <center> 
            <div class="col-md-4 mt-4">
               <input type="submit" value="Enviar" class="btn btn-success mt-2">
            </center>
            </div>


    </form>
 



</center>