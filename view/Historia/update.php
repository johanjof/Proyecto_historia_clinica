<div class="mt-5">
    <center>
    <h3 class="display-16">Editar Historia Clinica</h3>
</div>

<div class="mt-5">
    <?php
       
        foreach($historias as $hist){    
    ?>
    <hr>
<center>
<div class="container">
  <div class="row">
    <div class="col col-4">
       <b>Documento: </b>
    </div>
    <div class="col col-3"> 
    <b> Nombre</b>
    </div>
    <div class="col col-3">
     <b>Apellido </b>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col col-4">
      <?php echo $hist['pac_documento'];?> 
    </div>
    <div class="col col-3">
    <?php echo $hist['pac_nombre'];?>
    </div>
    <div class="col col-3">
    <?php echo $hist['pac_apellido'];?>
    </div>
  </div>
  <div class="container">
  <div class="row">
    <div class="col col-4">
       <b>Telefono </b>
    </div>
    <div class="col col-3"> 
    <b> Genero:</b>
    </div>
    <div class="col col-3">
     <b> Estrato </b>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col col-4">
    <?php echo $hist['pac_telefono'];?>
    </div>
    <div class="col col-3"> 
    <?php
                                foreach ($generos as $gen){
                                    if ($gen['gen_id']==$hist['gen_id']) {
                                        echo $gen['gen_nombre'];
                                    }
                                  
                                    
                                }
                                    
                                
                            ?>
    </div>
    <div class="col col-3">
    <?php
                      foreach ($estratos as $str){
                          if ($str['estr_id']==$hist['estr_id']) {
                            echo $str['estr_nombre'];
                         
                          }
                          
                      }
                          
                      
                  ?>
    </div>
  </div>
</div>


    
       
</div>
<hr>
<center>
<div class="mt-3">
    <form action="<?php echo getUrl("Historia","Historia","postUpdate",array("hist_id"=>$hist['hist_id']));?>" method="post">
    <table>
        <tr>
            <th><font face="Calibri">Motivo de visita </font></th>
            <th><font face="Calibri">Esfera OD </font></th>
            <th><font face="Calibri">Cilindro OD</font></th>
        </tr>
        <tr>
        <input type="hidden" name="hist_id" value="<?php=$hist['hist_id']?>">

        <th><input type="text" name="hist_motv" class="form-control"  value="<?php echo $hist['hist_motv'];?>">
            </th>
            <th> <input type="number" name="hist_esfod" class="form-control"  value="<?php echo $hist['hist_esfod'];?>" >
           </th>
             <th>  <input type="number" name="hist_cilod" class="form-control"  value="<?php echo $hist['hist_cilod'];?>">
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
        <th><input type="number" name="hist_ejeod" class="form-control" value="<?php echo $hist['hist_ejeod'];?>">
            </th>
            <th> <input type="number" name="hist_esfoi"class="form-control" value="<?php echo $hist['hist_esfoi'];?>" >
           </th>
             <th>  <input type="number" name="hist_ciloi" class="form-control" value="<?php echo $hist['hist_ciloi'];?>">
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
        <th><input type="number" name="hist_ejeoi" class="form-control" value="<?php echo $hist['hist_ejeoi'];?>">
            </th>
            <th> <input type="text" name="hist_diaod"class="form-control" value="<?php echo $hist['hist_diaod'];?>" >
           </th>
             <th>  <input type="text" name="hist_diaoi" class="form-control" value="<?php echo $hist['hist_diaoi'];?>">
            </th>
        </tr>
        </table>
        
        <table>
        <div class="col-md-4">
        <th> 

        <font face="Calibri">Recomendaciones:</font>
        <input type="text" name="hist_recom" class="form-control" value="<?php echo $hist['hist_recom'];?>">

        <br>
       

        
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
    <?php
        }
          
 ?>
 



</center>