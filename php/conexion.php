<?php
//validamos datos del servidor
$user = "root";
$pass = "";
$host = "localhost";
//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);
//hacemos llamado al imput de formuario
$nombres = $_POST['Nombres'] ;    
$apellidos = $_POST['Apellidos'] ;   
$numero = $_POST['tlf'] ;   
$numerodecasa = $_POST['tlfC'] ;   
$correo= $_POST['correo'] ;   
$seleccion1= $_POST['Select1'] ;   
$cedula = $_POST['Ncedula'] ;     
$adicional = $_POST['textadicional'] ; 

?>