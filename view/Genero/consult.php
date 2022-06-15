<div class="mt-5">
    <h3 class="display-4">Consultar Genero</h3>
</div>

<div class="mt-5">

    <table id="lol" class="table">

    <thead>
        <tr>
            <th>Id</th>
            <th>Genero</th>
            <th colspan="2">Acciones</th>
        </tr>
    </thead>
    <tbody>

    <?php
    
     foreach ($generos as $gen) {
        echo "<tr>";
            echo "<td>".$gen['gen_id']."</td>";
            echo "<td>".$gen['gen_nombre']."</td>";



            echo "<td> <a href='".getUrl ("Genero", 
            "Genero", "getUpdate", array("gen_id"=>$gen
            ['gen_id']))."'><button class='btn btn-primary'> Editar </button></a></td>";
            echo "<td><a href='".getUrl ("Genero", 
            "Genero", "getDelete", array("gen_id"=>$gen
            ['gen_id']))."'><button class='btn btn-danger'>Eliminar </button></a> </td>";
            echo "</tr>";
        } 



// esto es un comentario//
 


    
   
    
    ?>

    </tbody>

    </table>


</div>