<?php
include 'database.php';
$db = new Database();
$db->conectarBD();
extract($_POST);

$cadena = "INSERT INTO cliente(nomUsuarioC,nombresC,apPatC,apMatC,telefonoC,correoC,contraseñaC,numVisitas)
        VALUES ('$nombreU','$nombre','$apPaterno','$apMaterno','$telefono','$correo',
        '$contraseña','')";

$db->ejecutaSQL($cadena);

echo "<div class='alert alert-success'>
            Cliente Registrado
            </div>
        ";
header("refresh:3;../html/index.html");
?>