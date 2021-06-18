 
 <?php
  
        require_once("conexion.php");
        $id = $_GET["id"];
        $con = Conect();
        $query ="SELECT * FROM `asesores` WHERE id = $id AND id_inmobiliaria = 15";
        $resultado=$con->prepare($query);
        $resultado->execute();
        $res = json_encode($resultado->fetch());
        echo($res);

    ?> 
   
   

    
    
    


 