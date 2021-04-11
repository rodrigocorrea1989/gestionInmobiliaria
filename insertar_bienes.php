
<?php

include("header.php");

require("conexion.php");

session_start(); 

$propietario=$_POST['dueño'];

$direccion=$_POST['direccion'];

$telefono=$_POST['telefono'];

$tipo=$_POST['tipo'];

$categoria=$_POST['categoria'];

$provincia=$_POST['provincia'];

$localidad=$_POST['localidad'];

date_default_timezone_set('America/Argentina/Buenos_Aires');

$fecha=date("m-d-Y h:i");

$upload="upload/";


$usuario=$_SESSION["usuario"];

//echo "<center>".$fecha."<br>".$propietario."<br>".$direccion."<br>".$telefono."<br>".$categoria."<br>".$tipo."</center>";

    //primera imagen

    if($_FILES["img1"]["size"] > 200000){

        echo "tamaño excedido valor: ".$_FILES["img1"]["size"]." debe ser menor a 2mb <br>";
    
    
    }else{
    

    if($_FILES["img1"]["type"]=="image/jpg" || $_FILES["img1"]["type"]=="image/png" ){   

    if(isset($_FILES["img1"]["name"])  && ($_FILES["img1"]["error"] == 
			
    UPLOAD_ERR_OK ) ){

        move_uploaded_file(   $_FILES["img1"]["tmp_name"]  ,  $upload.$_FILES["img1"]["name"] );

        //echo "la imagen: ".$_FILES["img1"]["name"]. " se ha copiado correctamente<br>";


    }else{

        echo "ERROR!! la primera imagen no se pudo copiar al directorio<br>" ;

    }else{

        echo "no se puede copiar el archivo por un error de formato<br>";
    
            }
    
        }

    }

    //segunda imagen

    if(isset($_FILES["img2"]["name"])  && ($_FILES["img2"]["error"] == 
			
    UPLOAD_ERR_OK ) ){

        move_uploaded_file(   $_FILES["img2"]["tmp_name"]  ,  $upload.$_FILES["img2"]["name"] );

        //echo "la imagen: ".$_FILES["img2"]["name"]. " se ha copiado correctamente<br>";


    }else{

        echo "ERROR!! la  segunda no se pudo copiar al directorio<br>" ;

    }


    //tercera imagen

    if(isset($_FILES["img3"]["name"])  && ($_FILES["img3"]["error"] == 
			
    UPLOAD_ERR_OK ) ){

        move_uploaded_file(   $_FILES["img3"]["tmp_name"]  ,  $upload.$_FILES["img3"]["name"] );

        //echo "la imagen: ".$_FILES["img3"]["name"]. " se ha copiado correctamente<br>";


    }else{

        echo "ERROR!! la tercera imagen no se pudo copiar al directorio" ;

    }


    //cuarta imagen


    if(isset($_FILES["img4"]["name"])  && ($_FILES["img4"]["error"] == 
			
    UPLOAD_ERR_OK ) ){

        move_uploaded_file(   $_FILES["img4"]["tmp_name"]  ,  $upload.$_FILES["img4"]["name"] );

        //echo "la imagen: ".$_FILES["img4"]["name"]. " se ha copiado correctamente<br>";


    }else{

        echo "ERROR!! la cuarta imagen no se pudo copiar al directorio<br>" ;

    }


    


    $imagen1=$_FILES["img1"]["name"];

    $imagen2=$_FILES["img2"]["name"];

    $imagen3=$_FILES["img3"]["name"];

    $imagen4=$_FILES["img4"]["name"];


    //echo $imagen1."<br>";

    
    //echo $imagen2."<br>";

    
    //echo $imagen3."<br>";

    
    //echo $imagen4."<br>";


   $sql="insert into bienes (usuario,propietario,direccion,telefono,provincia,localidad,tipo,fecha,categoria,img1,img2,img3,img4) values ('$usuario','$propietario','$direccion','$telefono','$provincia','$localidad','$tipo','$fecha','$categoria','$imagen1','$imagen2','$imagen3','$imagen4')";

     
   $insertar=mysqli_query($miconexion,$sql);

    if(mysqli_affected_rows($miconexion)){

     
    //header("Location:http://localhost/gestion%20inmobiliario/ver_propiedades.php?id='".$registro["id"]."'");

     echo "se ha insertado correctamente";
     echo "<br>";
     echo "<center><h1>RESULTADO DE LA PROPIEDAD</h1></center>";
     echo "<center>";
     echo "<hr>";
     echo "USUARIO: ". $usuario."<br><br>";
     echo "PROPIETARIO: ".$propietario."<br><br>";
     echo "DIRECCION: ".$direccion."<br><br>";
     echo "TELEFONO: ".$telefono."<br><br>";
     echo "PROVINCIA: ".$provincia."<br><br>";
     echo "LOCALIDAD: ".$localidad."<br><br>";
     echo "TIPO: ".$tipo."<br><br>";
     echo "FECHA: ".$fecha."<br><br>";
     echo "EXLUSIVO PARA: ".$categoria."<br><br>";
     echo "<img src='".$upload.$imagen1."' width='300px' />  ";
     echo "<img src='".$upload.$imagen2."' width='300px' />  ";
     echo "<img src='".$upload.$imagen3."' width='300px' />  ";
     echo "<img src='".$upload.$imagen4."' width='300px' />  ";
     echo "<hr>";
     echo "</center>";
    

    }else{

        echo "error al insertar";

    }




    mysqli_close($miconexion);

    
    echo "<br>";
    echo "<br>";
    echo "<center><a href='index.php'><button> <==HOME </button></a></center>";
   
   
?>

