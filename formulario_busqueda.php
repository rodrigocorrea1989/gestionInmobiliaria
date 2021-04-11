<?php
require("lock.php");
?>
<center>
<form action="filtrar_busqueda.php" method="get" class="searcher" >
    
    <label for="provincia">Provincia</label>            
         <select name="provincia"  style="width: 200px;" ><br><br>
         <option value="" selected>Todos</option>
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
            <option value="Santiago del Estero">Santiago del Estero</option>
            <option value="Tierra del Fuego">Tierra del Fuego</option>
           <option value="Tucuman">Tucuman</option>
         </select>

         <label for="localidad"  >Localidad</label>
         <input type="text" name="localidad" placeholder="ingrese su localidad"  style="width: 300px;" ><br><br>

         <label>Dirección</label>
        <input type="text" name="direccion"  id="direccion" placholder="calle falsa 123" >   


        <label for="tipo">Tipo</label>
        <select name="tipo"  style="width: 300px;" ><br><br>
        <option value="" selected>Todos</option>
            <option value="monoambiente">monoambiente</option>
            <option value="duplex">duplex</option>
            <option value="monoambiente-edificio">monoambiente-edificio</option>
            <option value="departamente-edificio">departamente-edificio</option>
            <option value="casa">casa</option>
         </select>

         <label for="categoria">Categoria</label>            
         <select name="categoria"  style="width: 300px;" ><br><br>
            <option value="" selected>Todos</option>
            <option value="alquiler">Alquiler</option>
            <option value="venta">Venta</option>
         </select>
         <br>
         <br>
    <input type="submit"  value="FILTRAR" name="filtrar">
    <br>
    <br>

</center>


</form>


