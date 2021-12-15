<?php
 session_start();
 include '../../Config/conexionBD.php';
 $usuario = isset($_POST["email"]) ? trim($_POST["email"]) : null;
 echo $usuario;
 $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;
 echo $contrasena;

 $query = "SELECT rol FROM clientes WHERE correo_electronico = '$usuario' and 
    contrasena = MD5('$contrasena')";
 $q -> query( $query);   
 if(!$q-> query($query)){
     echo 'cant establish db connection';
 }else{
     if(!$q-> num_rows()){
         echo 'Lo siento no se encontraron datos';
     }else{
         echo 'Éxisten datos';
     }
 }
 
  
    
     $conn->close();

?>