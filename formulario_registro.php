<?php

include("header.php");

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

if(isset($_SESSION["usuario"])){
		
    header("location:already_registered.php");	

}



?>


<center>
<form action="registrar_usuario.php" method="POST">

    <label for="nombre">Nombre</label><br>
    <input type="text" name="nombre" id="nombre"  >
    <br>
    <br>

    
    <label for="apellido">Apellido</label><br>
    <input type="text" name="apellido" id="apellido" >
    <br>
    <br>


    <label for="email">Correo eléctronico</label><br>
    <input type="email" name="email" id="email"  >
    <br>
    <br>


    <label for="contraseña">Contraseña</label><br>
    <input type="password" name="contraseña" id="contraseña"  >
    <br>
    <br>

    <label for="contraseña2">Vuelva a ingresar contraseña</label><br>
    <input type="password" name="contraseña2" id="contraseña2"  >
    <br>
    <br>

    <input type="submit" value="REGISTRARME!!" ><br>
    <br>
    <br>

</form>

</center>




<?php


include("footer.php");


?>
