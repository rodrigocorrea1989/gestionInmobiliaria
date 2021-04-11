

<?php

    include("lock.php");

    include("header.php");

    require("conexion.php");



 ?>




<script src="jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>



 <?php

    $id_post=$_GET["id"];

    if($id_post==NULL){

        header ("Location:http://localhost/gestion%20inmobiliario/index.php");

    }

    $upload="upload/";

    $sql="SELECT * FROM BIENES WHERE ID = '$id_post' ORDER BY FECHA DESC  ";

    if($resultado=mysqli_query($miconexion,$sql)){

    while($registro=mysqli_fetch_assoc($resultado)){

        echo "<center>";
        echo "<hr>";
        echo "E-MAIL: ". $registro["usuario"]."<br><br>";
        echo "PROPIETARIO: ".$registro["propietario"]."<br><br>";
        echo "DIRECCION: ".$registro["direccion"]."<br><br>";
        echo "TELEFONO: ".$registro["telefono"]."<br><br>";
        echo "PROVINCIA: ".$registro["provincia"]."<br><br>";
        echo "LOCALIDAD: ".$registro["localidad"]."<br><br>";
        echo "TIPO: ".$registro["tipo"]."<br><br>";
        echo "FECHA: ".$registro["fecha"]."<br><br>";
        echo "EXLUSIVO PARA: ".$registro["categoria"]."<br><br>";
        echo "<center><h2>GALERIA DE IMAGENES</h2><br><br></center>";
        echo "<div id='galeria' >";
        echo "<img  data-fancybox='images' src='".$upload.$registro["img1"]."' width='300px' />  ";
        echo "<img   src='".$upload.$registro["img2"]."' width='300px' />  ";
        echo "<img   src='".$upload.$registro["img3"]."' width='300px' />  ";
        echo "<img   src='".$upload.$registro["img4"]."' width='300px' />  ";
        echo "</div>";
        echo "<hr>";
        echo "</center>";

      

    }
}

mysqli_close($miconexion);


echo "<center><a href='formulario.php'><button>INSERTAR BIENES</button></a></center>";
echo "<br>";
echo "<br>";

?>


