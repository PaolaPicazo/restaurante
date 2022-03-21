<?php
include 'Connections/conexion00.php';


    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $celular = $_POST['celular'];
    $contraseña0 = $_POST['contraseña0'];

    if($contraseña == $contraseña0){



   $consulta = "INSERT INTO usuarios (nombre,apellidoP,apellidoM,correo,contraseña,celular) VALUES ('$nombre','$apellidoP','$apellidoM','$correo','$contraseña','$celular')";
   if(mysqli_query($conexion00, $consulta)){
      echo "Gracias por registrarse";
  } }
  else {
      echo "Las contraseñas no coinciden";
  }
    
  
 include 'Connections/desconexion00.php'
    ?>
