
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

if(!isset($_SESSION["usuario"])){
		
    header("location:login.php");	

}

?>


<center>

  
 <h2 style="background-color: lightgray; ">ALTA DE PROPIEDADES</h2>
   
    <form action="insertar_bienes.php" method="post" enctype="multipart/form-data" name="form1" >
        <label for="dueño"  >Propietario</label>
        <input type="text" name="dueño" placeholder="ingrese nombre de propietario o local inmobiliaria"  "><br><br>
        
        <label for="dueño"  >Direccion</label>
        
        <input type="text" name="direccion" placeholder="ingrese direccion de la propiedad"  style="width: 300px;"><br><br>

        <label for="telefono"  >Teléfono</label>
        <input type="text" name="telefono" placeholder="ingrese telefono del propietario"  style="width: 300px;"><br><br>

        <label for="provincia">provincia</label>            
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
         <br>
        
        
        <label for="localidad"  >Localidad</label>
        <input type="text" name="localidad" placeholder="ingrese su localidad"  style="width: 300px;"><br><br>

        <label for="tipo">Tipo</label>
        <select name="tipo"  style="width: 300px;"><br><br>
            <option value="monoambiente">monoambiente</option>
            <option value="duplex">duplex</option>
            <option value="monoambiente-edificio">monoambiente-edificio</option>
            <option value="departamente-edificio">departamente-edificio</option>
            <option value="casa">casa</option>
         </select>   

         <br>
         <br>

         <label for="categoria">Categoria</label>            
         <select name="categoria"  style="width: 300px;"><br><br>
            <option value="alquiler">Alquiler</option>
            <option value="venta">Venta</option>
         </select>
         <br>
         <br>

         

         <label for="img1">Ingresar primera foto</label>
         <input type="file" name="img1" >
         <br>
         <br>

         
         <label for="img2">Ingresar segunda foto</label>
         <input type="file" name="img2" >
         <br>
         <br>

         
         <label for="img3">Ingresar tercera foto</label>
         <input type="file" name="img3" >
         <br>
         <br>

         <label for="img4">Ingresar cuarta foto</label>
         <input type="file" name="img4" >
         <br>
         <br>

         <input type="submit" value="Insertar">

         <br>
         <br>


    </form>

    <br>
    <br>

    <a href='index.php'><button> VOLVER A LA PÁGINA PRINCIPAL </button></a>

</center>

