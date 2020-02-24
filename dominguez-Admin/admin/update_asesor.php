<?php
require_once ('conexion.php');


$id=$_REQUEST["id"];
$nom_asesor=$_REQUEST["nom_asesor"];
$cel_asesor=$_REQUEST["cel_asesor"];
$cor_asesor= $_POST["cor_asesor"];
$image=$_FILES["imagen"]["name"];
$ruta=$_FILES["imagen"]["tmp_name"];
$nombre_foto = str_replace(" ","",$image);
$destino="asesores/".$nombre_foto;
$comparador_fotos="asesores/";
$cargo=$_REQUEST["cargo"];
$descrip=$_REQUEST ["descrip"];

// No actualizar ni archivos ni imagenes
if($destino == $comparador_fotos){
    $con1 = Conect();
     $qry1="SELECT * FROM asesores where id ='$id'";
            $sql1=mysqli_query($con1,$qry1);
            $res=  mysqli_fetch_array($sql1) ;
            
            $destino = $res[4];
    $con = Conect();
    $qry=("update asesores set nombre='$nom_asesor', telefono='$cel_asesor', correo='$cor_asesor', cargo='$cargo' , descripcion='$descrip' where id='$id '");
    $sql=mysqli_query($con,$qry);
        if(!$sql){
    }else{
        echo  "<script language='javascript'>
        alert('Asesor Modificado con Éxito');
         window.location.href='index.php'
      </script>";
    }
    
// actualizar fotos pero no texto
}

if($destino != $comparador_fotos){
    copy($ruta,$destino);
    $con = Conect();
    $qry=("update asesores set  imagen='$destino' where id='$id '");
    $sql=mysqli_query($con,$qry);  

    if(!$sql){
        echo 'No se logro actualizar';
    }else{
       echo  "<script language='javascript'>
       alert('Asesor Modificado con Éxito');
        window.location.href='index.php'
     </script>";
    }
}
// actualizar  ambas cosas
if($destino != $comparador_fotos && $destinos == $comparador_archivo){
    copy($rutas,$destinos);
    copy($ruta,$destino);
    $con = Conect();
    $qry=("update asesores set nombre='$nom_asesor', telefono='$cel_asesor', correo='$cor_asesor', cargo='$cargo' , descripcion='$descrip', imagen='$destino' where id='$id '");
    $sql=mysqli_query($con,$qry);  

    if(!$sql){
        echo 'No se logro actualizar';
    }else{
        echo
        "<script language='javascript'>
           alert('Asesor Modificado con Éxito');
            window.location.href='index.php'
         </script>";
        
    }
}
?>