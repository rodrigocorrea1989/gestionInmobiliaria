<?php

require("header.php");

require("conexion.php");

require("formulario_busqueda.php");

$domicilio=$_GET["direccion"];

$provincia=$_GET["provincia"];

$localidad=$_GET["localidad"];

$tipo=$_GET["tipo"];

$categoria=$_GET["categoria"];

//$where=" WHERE DIRECCION LIKE '%$domicilio%' AND PROVINCIA LIKE '%$provincia%' AND LOCALIDAD LIKE '%$localidad%' AND TIPO LIKE '%$tipo%' AND CATEGORIA LIKE '%$categoria%'    ORDER BY FECHA DESC "; 

$where="";

$upload="upload/";

if(isset($_GET["filtrar"])){

if(empty($_GET["provincia"])){

    $where="WHERE DIRECCION LIKE '%$domicilio%' AND LOCALIDAD LIKE '%$localidad%' AND TIPO LIKE '%$tipo%' AND CATEGORIA LIKE '%$categoria%'  ORDER BY FECHA DESC " ;


}else if(empty($_GET["tipo"])){

  $where="WHERE DIRECCION LIKE '%$domicilio%' AND PROVINCIA LIKE '%$provincia%' AND LOCALIDAD LIKE '%$localidad%' AND CATEGORIA LIKE '%$categoria%'    ORDER BY FECHA DESC "; 


}else if (empty($_GET["categoria"])){

$where="WHERE DIRECCION LIKE '%$domicilio%' AND PROVINCIA LIKE '%$provincia%' AND LOCALIDAD LIKE '%$localidad%' AND TIPO LIKE '%$tipo%' ORDER BY FECHA DESC "; 

    
}else{

    $where="WHERE DIRECCION LIKE '%$domicilio%' AND PROVINCIA LIKE '%$provincia%' AND LOCALIDAD LIKE '%$localidad%' AND TIPO LIKE '%$tipo%' AND CATEGORIA LIKE '%$categoria%'    ORDER BY FECHA DESC "; 

}

}

$sql="SELECT * FROM BIENES $where ";

echo "<h1>RESULTADOS DE BÚSQUEDA</h1>";

if($resultado=mysqli_query($miconexion,$sql)){

    echo "<div class='grid'>";

    while($registro=mysqli_fetch_assoc($resultado)){
    
        echo "<center>";
        echo "<a href='ver_propiedades.php?id=".$registro["id"]."'>";
        echo "<div class='preview'><hr>";
        echo "<img src='".$upload.$registro["img1"]."' width='150px' /><br>  ";
       // echo "CÓDIGO: ". $registro["id"]."<br><br>";
        echo "DIRECCION: ".$registro["direccion"]."<br><br>";
        echo "TIPO: ".$registro["tipo"]."<br><br>";
        echo "EXLUSIVO PARA: ".$registro["categoria"]."<br><br>";
        echo "</div>";
        echo "</a>";
        echo "</center>";
        
    
    }

    echo "</div>";
}

mysqli_close($miconexion);



?>
<br>
<br>
<center><a href='index.php'><button> <==HOME </button></a></center>