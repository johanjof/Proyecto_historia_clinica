<?php


include_once '../model/Estrato/EstratoModel.php';

class EstratoController{

    public function getInsert(){
        include_once '../view/Estrato/insert.php';        
    }

    public function postInsert(){
        $obj=new EstratoModel();

        $estr_id=$obj->autoincrement("estr_id","estratos");
        $estr_nombre=$_POST['estr_nombre'];
        $sql="INSERT INTO estratos VALUES($estr_id,'$estr_nombre')";
        $ejecutar=$obj->insert($sql);
        
        if ($ejecutar){
            ?>
            <script>
	  alert("Se registro correctamente");
	    
	  </script>
      

           <?php 
            echo redirect(getUrl("Estrato","Estrato","consult")); 
            
        }else{
            ?>
             <script>
	  alert("No se efectuo el registro");
	    
	  </script>
      <?php
            echo redirect(getUrl("Estrato","Estrato","consult")); 
            
        }
    }

    public function consult(){
        $obj=new EstratoModel();
        $sql="SELECT * FROM estratos";
        $estratos=$obj->consult($sql);
        include_once '../view/Estrato/consult.php';
    }

    public function getUpdate(){
        $obj=new EstratoModel();
        $estr_id=$_GET['estr_id'];
        $sql="SELECT * FROM estratos WHERE estr_id= $estr_id";
        $estratos=$obj->consult($sql);
        include_once '../view/Estrato/update.php';
    }

    public function postUpdate(){
        $obj=new EstratoModel();
        $estr_id=$_POST['estr_id'];
        $estr_nombre=$_POST['estr_nombre'];
        $sql="UPDATE estratos SET estr_nombre='$estr_nombre' WHERE estr_id = $estr_id";
        $ejecutar=$obj->update($sql);
        if($ejecutar){
            ?>
             <script>
	  alert("Se editó correctamente");
	    
	  </script>
      <?php
            echo redirect(getUrl("Estrato","Estrato","consult"));
        }else{
            
            ?>
            <script>
     alert("No se efectuo el registro");
       
     </script>
     <?php
            echo redirect(getUrl("Estrato","Estrato","consult"));
           
        }
    }

    public function getDelete(){
        $obj=new EstratoModel();
        $estr_id=$_GET['estr_id'];
        $sql="SELECT * FROM estratos WHERE estr_id= $estr_id";
        $estrato=$obj->consult($sql);
        include_once '../view/Estrato/delete.php';
    }

    public function postDelete(){
        $obj=new EstratoModel();
        $estr_id= $_POST['estr_id'];
        $sql="DELETE FROM estratos WHERE estr_id=$estr_id";
        $ejecutar=$obj->delete($sql);
     
        if($ejecutar){
           
            ?>
            <script>
	  alert("Se eliminó correctamente");
	    
	  </script>
      

           <?php 
            echo redirect(getUrl("Estrato","Estrato","consult")); 
        }else{
            ?>
            <script>
     alert("No se efectuo el registro");
       
     </script>
     <?php
            echo redirect(getUrl("Estrato","Estrato","consult")); 

         
        }
    }
}

?>
