<?php

include("header.php");

include("conexion.php");

$nombre=$_POST["nombre"];

$apellido=$_POST["apellido"];

$contraseña=$_POST["contraseña"];

$contraseña2=$_POST["contraseña2"];

$email=$_POST["email"];


if($contraseña != $contraseña2){


    echo "las contraseña ingresadas no coinciden <a href='formulario_registro.php'> volver atras </a>";
    
  

}else{

$pass_cifrado=password_hash($contraseña,PASSWORD_DEFAULT,array("cost"=>12));    

$sql="insert into usuarios (nombre,apellido,password,email) values ('$nombre','$apellido','$pass_cifrado','$email')";

$insertar=mysqli_query($miconexion,$sql);

if(mysqli_affected_rows($miconexion)){

    echo "<h1>Bienvenido señor/a:".$nombre." sus datos se ingresaron correctamente</h1>";

}



}


mysqli_close($miconexion);


?>