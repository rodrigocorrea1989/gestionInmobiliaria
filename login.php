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

header("Location:already_registered.php");

}


?>

<center>
<h1>Login</h1>

<form action="comprobar_acceso.php" method="post">
    <label for="mail">Ingrese su correo electronico</label><br>
    <input type="mail" name="mail">
    <br>
    <br>

    <label for="password">Ingrese su contraseña</label><br>
    <input type="password" name="password">
    <br>
    <br>

    <input type="submit" value="acceder" >
    <br>
    <br>


</form>   

</center>




<?php


include("footer.php");


?>
