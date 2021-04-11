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

$id=$_GET["id"];

$upload="upload/";

$sql="SELECT * FROM BIENES WHERE id='$id' ORDER BY FECHA DESC";

if($resultado=mysqli_query($miconexion,$sql)){

while($registro=mysqli_fetch_assoc($resultado)){

    echo "<center>EDITAR PROPIEDAD</center>";
  
    echo "<center><hr>";
    
    
    echo "<form action='procesar_edicion.php' method='post'  enctype='multipart/form-data' >";
    
    echo "<label for='direccion'>Direccion : </label>";
    echo "<input type='text' value='".$registro["direccion"]."' id='direccion'  name='direccion' style='width: 350px;'><br><br>";
    
    echo "<label for='direccion'>Teléfono : </label>";
    echo "<input type='text' value='".$registro["telefono"]."' id='telefono' name='telefono' style='width: 350px;'><br><br>";
    
    echo "<label for='propietario'>Propietario : </label>";
    echo "<input type='text' value='".$registro["propietario"]."' id='propietaria' name='propietario' style='width: 350px;'><br><br>";
    
    echo "<input type='hidden' value='".$registro["id"]."' id='propietaria' name='id' style='width: 350px;' ><br>";
    
    echo '<label for="provincia">provincia</label>            
    <select name="provincia"  style="width: 300px;"><br><br>
       <option value="Buenos Aires">Buenos Aires</option>
       <option value="Catamarca">Catamarca</option>
       <option value="Chaco">Chaco</option>
       <option value="Chubut">Chubut</option>
       <option value="Cordoba">Cordoba</option>
       <option value="Corrientes">Corrientes</option>
       <option value="Entre Rios">Entre Rios</option>
       <option value="Formosa">Formosa</option>
       <option value="Jujuy">Jujuy</option>
       <option value="La Pampa">La Pampa</option>
       <option value="La Rioja">La Rioja</option>
       <option value="Mendoza">Mendoza</option>
       <option value="Misiones">Misiones</option>
       <option value="Neuquen">Neuquen</option>
       <option value="Rio Negro">Rio Negro</option>
       <option value="Salta">Salta</option>
       <option value="San Juan">San Juan</option>
       <option value="San Luis">San Luis</option>
       <option value="Santa Cruz">Santa Cruz</option>
       <option value="Santa Fe">Santa Fe</option>
       <option value="Santiago del Estero">Santiago del estero del Estero</option>
       <option value="Tierra del Fuego">Tierra del Fuego</option>
      <option value="Tucuman">Tucuman</option>
    </select>
    <br>
    <br>';
    
    echo '<label for="localidad"  >Localidad</label>
    <input type="text" name="localidad" placeholder="ingrese su localidad"  value="'.$registro["localidad"].'" style="width: 300px;"><br><br>';
    
    echo '<label for="tipo">Tipo</label>
    <select name="tipo"  style="width: 300px;" ><br><br>
        <option value="'.$registro["tipo"].'" selected >'.$registro["tipo"].'</option>
        <option value="monoambiente">monoambiente</option>
        <option value="duplex">duplex</option>
        <option value="monoambiente-edificio">monoambiente-edificio</option>
        <option value="departamente-edificio">departamente-edificio</option>
        <option value="casa">casa</option>
     </select> <br><br>';
    
    
     echo ' <label for="categoria">Categoria</label>            
    <select name="categoria"  style="width: 300px;"><br><br>
       <option value="alquiler">Alquiler</option>
       <option value="venta">Venta</option>
    </select>
    <br>
    <br>';
    
    echo "<label for='img1'  >Reemplazar la imagen principal   <strong> 2 MB</strong> </label>";
    echo "<input type='file' name='img1'  > <br><br>";
    echo "<img  src='".$upload.$registro["img1"]."'  style='width: 300px;' ><br><br>";

    echo "<label for='img2'  >Reemplazar segunda imagen  <strong> 2 MB</strong>  </label>";
    echo "<input type='file' name='img2'  > <br><br>";
    echo "<img  src='".$upload.$registro["img2"]."'  style='width: 300px;' ><br><br>";

    echo "<label for='img3'  >Reemplazar tercera imagen  <strong> 2 MB</strong>  </label>";
    echo "<input type='file' name='img3'  > <br><br>";
    echo "<img  src='".$upload.$registro["img3"]."'  style='width: 300px;' ><br><br>";

    
    echo "<label for='img4'  >Reemplazar cuarta imagen  <strong> 2 MB</strong> </label>";
    echo "<input type='file' name='img4'  > <br><br>";
    echo "<img  src='".$upload.$registro["img4"]."'  style='width: 300px;' ><br><br>";


    echo "<input type='submit' value='Editar' name='editar'><br><br>";
  
    echo "</form>";
  
    echo "<hr></center>";


}
    }






?>