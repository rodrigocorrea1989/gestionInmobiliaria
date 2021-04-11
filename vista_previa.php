

<?php


echo "<div class='grid'>";

require("conexion.php");

    $upload="upload/";

    $sql="SELECT * FROM BIENES ORDER BY FECHA DESC";

    if($resultado=mysqli_query($miconexion,$sql)){

    while($registro=mysqli_fetch_assoc($resultado)){
        

        echo "<a  href='ver_propiedades.php?id=".$registro["id"]."'>";
        echo '<div class="preview">';
        echo "<center><hr>"; 
        echo "<img id='pre' src='".$upload.$registro["img1"]."' width='150px' /><br>  ";
       // echo "CÓDIGO: ". $registro["id"]."<br><br>";
        echo "DIRECCION: ".$registro["direccion"]."<br><br>";
        echo "TIPO: ".$registro["tipo"]."<br><br>";
        echo "EXLUSIVO PARA: ".$registro["categoria"]."<br><br>";
        echo "</center>";
        echo "</div>";
        echo "</a>";
    
    }
}


echo "</div>";
echo "<br>";
echo "<br>";

mysqli_close($miconexion);



?>


