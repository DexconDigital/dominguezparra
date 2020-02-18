 
 <?php




    require("seguridad.php");
    require_once("conexion.php");
    $id = $_GET["id"];
    $con = Conect();
    $qry = "SELECT * FROM asesores where id ='$id' and id_inmobiliaria = 15";
    $sql = mysqli_query($con, $qry);
    $res =  mysqli_fetch_array($sql);
    // if (is_array($res)) {
    //     echo "<pre>";
    //     print_r($res);
    //     echo "</pre>";
    // } else {
    //     echo $res;
    // }
    openModal($res);
    

    function openModal($res) {

            echo $res[0];
            header("Location: index.php");
            return $res;
    }

    // for ($i = 0; $i < count($res); $i++) {

    //     echo '
    //    <ul>
    //    <li>'.$res[1].'</li>
    //    <li>'.$res[2].'</li>
    //    <li>'.$res[2].'</li>
    //    <li>'.$res[4].'</li>
    //    <li>'.$res[4].'</li>
    //    <li>'.$res[6].'</li>
    //    <li>'.$res[7].'</li>
    //    <li>'.$res[8].'</li>
    //    </ul>
        
    //     ';
    // }



    // header("Location: index.php");
    ?> 
   
   

    
    
    


 