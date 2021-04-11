<?php

include("header.php");

require("conexion.php");

$usuario="";


    $upload="upload/";

    $sql="SELECT * FROM BIENES WHERE EMAIL='$usuario' ORDER BY FECHA DESC";

    if($resultado=mysqli_query($miconexion,$sql)){

    while($registro=mysqli_fetch_assoc($resultado)){
    
        echo "<center><hr>";
        echo "<a href='ver_propiedades.php?id=".$registro["id"]."'>";
        echo "<img src='".$upload.$registro["img1"]."' width='150px' /><br>  ";
       // echo "CÓDIGO: ". $registro["id"]."<br><br>";
        echo "DIRECCION: ".$registro["direccion"]."<br><br>";
        echo "TIPO: ".$registro["tipo"]."<br><br>";
        echo "EXLUSIVO PARA: ".$registro["categoria"]."<br><br>";
        echo "</a>";
        echo "<hr></center>";
        echo "<br>";
    echo "<br>";
    echo "<center><a href='formulario.php'><button>INSERTAR BIENES</button></a></center>";
    echo "<br>";
    echo "<br>";
    
    }
}

mysqli_close($miconexion);

echo "<center><a href='formulario.php'><button>INSERTAR BIENES</button></a></center>";
echo "<br>";
echo "<br>";

?>


