<?php

include("header.php");

include("conexion.php");

session_start();

if(!isset($_SESSION["usuario"])){
        
    echo "<style> .logout
     { 
         
        display:none;
    
    } </style> ";

}


if(isset($_SESSION["usuario"])){
        
    echo "<style> .login
     { 
         
        display:none;
    
    } </style> ";

}

if(!isset($_SESSION["usuario"])){

    header("Location:login.php");

}



$propietario=$_POST["propietario"];

$telefono=$_POST["telefono"];

$direccion=$_POST["direccion"];

$provincia=$_POST["provincia"];

$localidad=$_POST["localidad"];

$tipo=$_POST["tipo"];

$categoria=$_POST["categoria"];

$id=$_POST["id"];


$upload="upload/";

//---------------------------------------------------------------img-----------------------------------------------------------------------------//

//primera imagen

if($_FILES["img1"]["size"] > 200000){

    echo "tamaño excedido valor: ".$_FILES["img1"]["size"]." debe ser menor a 2mb <br>";


}else{

if($_FILES["img1"]["type"]=="image/jpg" || $_FILES["img1"]["type"]=="image/png" ){    

if(isset($_FILES["img1"]["name"])  && ($_FILES["img1"]["error"] == 
			
UPLOAD_ERR_OK ) ){

    move_uploaded_file(   $_FILES["img1"]["tmp_name"]  ,  $upload.$_FILES["img1"]["name"] );

    echo "la imagen: ".$_FILES["img1"]["name"]. " se ha copiado correctamente<br>";


}else{

    //echo "ERROR!! la primera imagen no se pudo copiar al directorio<br>" ;

}

}else{

    echo "no se puede copiar el archivo por un error de formato<br>";

}

}


//segunda imagen

if($_FILES["img2"]["size"] > 200000){

    echo "tamaño excedido valor: ".$_FILES["img2"]["size"]." debe ser menor a 2mb <br>";


}else{


if($_FILES["img2"]["type"]=="image/jpg" || $_FILES["img2"]["type"]=="image/png" ){    

if(isset($_FILES["img2"]["name"])  && ($_FILES["img2"]["error"] == 
        
UPLOAD_ERR_OK ) ){

    move_uploaded_file(   $_FILES["img2"]["tmp_name"]  ,  $upload.$_FILES["img2"]["name"] );

    echo "la imagen: ".$_FILES["img2"]["name"]. " se ha copiado correctamente<br>";


}else{

   // echo "ERROR!! la  segunda no se pudo copiar al directorio<br>" ;

}

}else{

    echo "no se puede copiar el archivo por un error de formato<br>";

}

}
//tercera imagen

if($_FILES["img3"]["size"] > 200000){

    echo "tamaño excedido valor: ".$_FILES["img3"]["size"]." debe ser menor a 2mb <br>";


}else{

if($_FILES["img3"]["type"]=="image/jpg" || $_FILES["img3"]["type"]=="image/png" ){  

if(isset($_FILES["img3"]["name"])  && ($_FILES["img3"]["error"] == 
        
UPLOAD_ERR_OK ) ){

    move_uploaded_file(   $_FILES["img3"]["tmp_name"]  ,  $upload.$_FILES["img3"]["name"] );

    //echo "la imagen: ".$_FILES["img3"]["name"]. " se ha copiado correctamente<br>";


}else{

    //echo "ERROR!! la tercera imagen no se pudo copiar al directorio" ;

}

}else{

    echo "no se puede copiar el archivo por un error de formato<br>";

}

}
//cuarta imagen

if($_FILES["img4"]["size"] > 200000){

    echo "tamaño excedido valor: ".$_FILES["img4"]["size"]." debe ser menor a 2mb <br>";


}else{

if($_FILES["img4"]["type"]=="image/jpg" || $_FILES["img4"]["type"]=="image/png" ){ 

if(isset($_FILES["img4"]["name"])  && ($_FILES["img4"]["error"] == 
        
UPLOAD_ERR_OK ) ){

    move_uploaded_file(   $_FILES["img4"]["tmp_name"]  ,  $upload.$_FILES["img4"]["name"] );

    echo "la imagen: ".$_FILES["img4"]["name"]. " se ha copiado correctamente<br>";


}else{

    //echo "ERROR!! la cuarta imagen no se pudo copiar al directorio<br>" ;

}

}else{

    echo "no se puede copiar el archivo por un error de formato<br>";

}

}
/*if( $_FILES["img1"]["type"]=="image/gif"){

echo "archivo compativle";

}else{
    
    echo "error de formato";
}*/


$propiedades="SELECT * FROM BIENES WHERE id='$id' ";

$resultado=mysqli_query($miconexion,$propiedades);

while($registro=mysqli_fetch_assoc($resultado)){

    

if(isset($_POST["editar"])){

    //imagen 1

    if($_FILES["img1"]["size"] > 200000){

        echo "tamaño excedido valor: ".$_FILES["img1"]["size"]." debe ser menor a 2mb <br>";

        $imagen1=$registro["img1"];
    
    
    }else{    

if($_FILES["img1"]["size"] > 200000){   

    echo "tamaño excedido valor: ".$_FILES["img1"]["size"]." debe ser menor a 2mb <br>";

    $imagen1=$registro["img1"];


}else{

if($_FILES["img1"]["type"]=="image/jpg" || $_FILES["img1"]["type"]=="image/png" ){    

if (empty($_FILES["img1"]["name"])){

    $imagen1=$registro["img1"];

}else{

    $imagen1=$_FILES["img1"]["name"];

            }

        }else{

            echo "error de compatibilidad con el archivo ".$_FILES["img1"]["name"].$_FILES["img1"]["type"] .", no se pudo almacenar <br>";

            $imagen1=$registro["img1"];

        }

    }

}
        //imagen 2

        if($_FILES["img2"]["size"] > 200000){

            echo "tamaño excedido valor: ".$_FILES["img2"]["size"]." debe ser menor a 2mb <br>";
    
            $imagen1=$registro["img2"];
        
        
        }else{ 

        if($_FILES["img2"]["type"]=="image/jpg" || $_FILES["img2"]["type"]=="image/png" ){  

            if (empty($_FILES["img2"]["name"])){

                $imagen2=$registro["img2"];
            
            }else{
            
                $imagen2=$_FILES["img2"]["name"];
            
                        }     


                    }else{

                        echo "error de compatibilidad con el archivo ".$_FILES["img2"]["name"].$_FILES["img2"]["type"] .", no se pudo almacenar <br>";
            
                        $imagen2=$registro["img2"];
            
                    }

                }
                    //imagen 3

                    if($_FILES["img3"]["size"] > 200000){

                        echo "tamaño excedido valor: ".$_FILES["img3"]["size"]." debe ser menor a 2mb <br>";
                
                        $imagen1=$registro["img3"];
                    
                    
                    }else{     

                    if($_FILES["img3"]["type"]=="image/jpg" || $_FILES["img3"]["type"]=="image/png" ){ 

                        if (empty($_FILES["img3"]["name"])){

                            $imagen3=$registro["img3"];
                        
                        }else{
                        
                            $imagen3=$_FILES["img3"]["name"];
                        
                                    } 
                                
                                }else{

                                        echo "error de compatibilidad con el archivo ".$_FILES["img3"]["name"].$_FILES["img3"]["type"] .", no se pudo almacenar <br>";
                            
                                        $imagen3=$registro["img3"];
                            
                                    }


                                }       

                                    //imagen 4
                                    
                                    
                                    if($_FILES["img4"]["size"] > 200000){

                                        echo "tamaño excedido valor: ".$_FILES["img4"]["size"]." debe ser menor a 2mb <br>";
                                
                                        $imagen1=$registro["img4"];
                                    
                                    
                                    }else{   

                                    if($_FILES["img4"]["type"]=="image/jpg" || $_FILES["img4"]["type"]=="image/png" ){ 

                                     if (empty($_FILES["img4"]["name"])){

                                        $imagen4=$registro["img4"];
                                    
                                    }else{
                                    
                                        $imagen4=$_FILES["img4"]["name"];
                                    
                                                }
                                            }else{

                                                echo "error de compatibilidad con el archivo ".$_FILES["img4"]["name"].$_FILES["img4"]["type"] .", no se pudo almacenar <br>";
                                    
                                                $imagen4=$registro["img4"];
                                    
                                            }
        

        }   

    }   

}
//----------------------------------------------------------------img-------------------------------------------------------------------------------//


$sql="UPDATE BIENES SET PROPIETARIO='$propietario', TELEFONO='$telefono' , DIRECCION='$direccion', PROVINCIA='$provincia', LOCALIDAD='$localidad', TIPO='$tipo', CATEGORIA='$categoria' , IMG1='$imagen1', IMG2='$imagen2', IMG3='$imagen3', IMG4='$imagen4'    WHERE id = '$id' ";

$consulta=mysqli_query($miconexion,$sql);

if (mysqli_affected_rows($miconexion)){

    echo "Los cambios se han hecho de manera satisfactoria";


}




?>