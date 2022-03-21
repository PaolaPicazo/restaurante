<?php 
 // 1. Conexion con el servidor y la base de datos
 include 'Connections/conexion00.php';

 $correo = $_POST['correo0'];
 $contraseña = $_POST['contraseña0']; 

 if($contraseña == "" || $correo == ""){
     echo "El campo de Correo/Contraseña esta vacio.";
 } else {

    $sql = "SELECT * FROM usuarios WHERE correo ='$correo' AND contraseña ='$contraseña'";

 $consulta =  mysqli_query($conexion00, $sql);
 
 $filas=mysqli_num_rows($consulta);

if($filas>0){
header("location:registro.html");
}else{
    echo "errooooor :(";
}
mysqli_free_result($consulta);
mysqli_close($conexion00);

}

 