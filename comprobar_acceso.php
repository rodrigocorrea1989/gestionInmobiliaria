

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





if(isset($_SESSION["usuario"])){
		
    echo "<p>Usuario: ".$_SESSION["usuario"]."</p><br><br>";

    $usuario=$_SESSION["usuario"];

    echo "<h1> Mis Propiedades</h1>";
    echo "<br>";
    echo "<center><a href='formulario.php'><button>INSERTAR BIENES</button></a></center>";
    echo "<br>";
    echo "<br>";
    

    $upload="upload/";

    $sql="SELECT * FROM BIENES WHERE USUARIO='$usuario' ORDER BY FECHA DESC";
    
    echo "<div class='grid'>";

    if($resultado=mysqli_query($miconexion,$sql)){

    while($registro=mysqli_fetch_assoc($resultado)){

        
        echo "<center>";
        echo "<a href='ver_propiedades.php?id=".$registro["id"]."'>";
        echo "<div class='preview'><hr>";
        echo "<img src='".$upload.$registro["img1"]."' width='150px' /><br>  ";
       // echo "CÓDIGO: ". $registro["id"]."<br><br>";
        echo "DIRECCION: ".$registro["direccion"]."<br><br>";
        echo "TIPO: ".$registro["tipo"]."<br><br>";
        echo "EXLUSIVO PARA: ".$registro["categoria"]."<br><br>";
        echo "<a href='editar_propiedad.php?id=".$registro["id"]."'><button>EDITAR</button></a>";
        echo "</div>";
        echo "</a><br>";
        echo "<br>";
       


        echo "</center>";


    }
        }

        echo "<div>";
}else{

$mail=$_POST["mail"];

$password=htmlentities(addslashes($_POST["password"]));


$sql="select * from usuarios where email='$mail' ";

$consulta=mysqli_query($miconexion,$sql);

    while($registro=mysqli_fetch_assoc($consulta)){
    

    if( $password=$registro["password"]){

        $_SESSION["usuario"]=$registro["email"];

        echo "<h1> Bienvenido : ".$registro["nombre"]."  te has conectado correctamente!!!</h1> <h2>tu usuario es: ".$_SESSION["usuario"]."</h2>";

        echo "<center><a href='index.php'> <<== HOME </a></center>";

    }

}

}




mysqli_close($miconexion);







?>