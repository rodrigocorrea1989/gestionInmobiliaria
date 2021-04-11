<?php

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

?>