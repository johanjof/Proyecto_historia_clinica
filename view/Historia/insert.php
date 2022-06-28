<div class="mt-5">
    <center>
    <h3 class="display-16">Historia Clinica</h3>
</div>

<div class="mt-5">
    <?php
        foreach($paciente as $pac){
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
      <?php echo $pac['pac_documento'];?> 
    </div>
    <div class="col col-3">
    <?php echo $pac['pac_nombre'];?>
    </div>
    <div class="col col-3">
    <?php echo $pac['pac_apellido'];?>
    </div>
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
    <?php echo $pac['pac_telefono'];?>
    </div>
    <div class="col col-3"> 
    <?php
                                foreach ($generos as $gen){
                                    if ($gen['gen_id']==$pac['gen_id']) {
                                        echo $gen['gen_nombre'];
                                    }
                                  
                                    
                                }
                                    
                                
                            ?>
    </div>
    <div class="col col-3">
    <?php
                      foreach ($estratos as $str){
                          if ($str['estr_id']==$pac['estr_id']) {
                            echo $str['estr_nombre'];
                         
                          }
                          
                      }
                          
                      
                  ?>
    </div>
  </div>
</div>


        <?php
        }
         ?>
</div>
<hr>


<center>

<div class="mt-3">
    <form action="<?php echo getUrl("Historia","Historia","postInsert",array("pac_id"=>$pac['pac_id']));?>" method="post">
    <table>
        <div class="col-md-10">
        <th> 

        <font face="Calibri">Motivo de visita:</font>
        <br>
        <textarea placeholder=" Motivo de visita" name="hist_motv" rows=3 cols=80></textarea>

        
    </th>
    <table>
        <tr>
            <th><font face="Calibri">Esfera OD </font></th>
            <th><font face="Calibri">Cilindro OD</font></th>
            <th><font face="Calibri">Eje OD</font></th>
        </tr>
        <tr>
        <th><input type="text" placeholder="Esfera ojo derecho" name="hist_esfod" class="form-control">
            </th>
            <th> <input type="number"  placeholder= "Cilindro ojo derecho" name="hist_cilod" class="form-control" >
           </th>
             <th>  <input type="number"  placeholder="Eje ojo derecho"  name="hist_ejeod" class="form-control">
            </th>
        </tr>
        </table>
        <table>
        <tr>
            <th><font face="Calibri">Esfera OI</font></th>
            <th><font face="Calibri">Cilindro OI</font></th>
            <th><font face="Calibri">Eje OI</font></th>
        </tr>
        <tr>
        <th><input type="number" placeholder="Esfera Ojo izquierdo" name="hist_esfoi" class="form-control">
            </th>
            <th> <input type="number"  placeholder= "Cilindro ojo izquierdo" name="hist_ciloi"class="form-control" >
           </th>
             <th>  <input type="number" placeholder="Eje ojo izquierdo" name="hist_ejeoi" class="form-control">
            </th>
        </tr>
        </table>
        <table>
        <tr>
            
            <th><font face="Calibri">Diagnostico Ojo Derecho </font></th>
            <th><font face="Calibri">Diagnostico  ojo izquierdo</font></th>
        </tr>
        <tr>
        
            <th> <input type="text" placeholder="Diagnostico ojo derecho" name="hist_diaod"class="form-control" >
           </th>
             <th>  <input type="text"  placeholder="Diagnostico ojo izquierdo" name="hist_diaoi" class="form-control">
            </th>
        </tr>
        </table>
        
        <table>

        
        <div class="col-md-4">
        <th> 

        <font face="Calibri">Recomendaciones:</font>
        <br>
        <textarea  placeholder="Digite las recomendaciones..." name="hist_recom" rows=3 cols=80></textarea> 

        
    </th>

            
           
            
           
        </div>
    </table>
        




        <div class="row">
       
        <center> 
            <div class="col-md-4 mt-4">
               <input type="submit"  value="Registrar historia medica" class="btn btn-info mt-2">
            </center>
            </div>


    </form>
 



</center>