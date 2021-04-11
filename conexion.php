<?php

$miconexion=mysqli_connect("localhost","root","","inmobiliariabd");
	
mysqli_set_charset($miconexion,"utf8");


	//comprobar conexión
	
	if(!$miconexion){
		
		echo "no hay conexión ".mysqli_error();
		
		exit();
		
		
		}