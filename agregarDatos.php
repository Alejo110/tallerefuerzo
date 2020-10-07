<?php

include("Basededatos.php");


if(isset($_POST["boton"])){

    $nombre=$_POST["nombre"];
    /*$apellidos=$POST["apellido"];
    $contraseña=$POST["contraseña"];
    $email=$POST["email"];
    $cedula=$POST["cedula"];
    $edad=$POST["edad"];
    $direccion=$POST["direccion"];*/

    $operacion= new BaseDatos();

    $consulta="INSERT INTO usuarios(nombre) VALUES ('$nombre')";

    $operacion->alterarBaseDatos($consulta);


}



?>