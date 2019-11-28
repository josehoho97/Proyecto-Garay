<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

    <title>Registro</title>
  </head>
  <body>

    <div class="container">
        
    <?php
        include 'database.php';
        $db= new Database();
        $db->conectarBD();
        extract($_POST);

        $cadena ="INSERT INTO cliente(nomUsuarioC,nombresC,apPatC,apMatC,telefonoC,correoC,contraseñaC,numVisitas)
        VALUES ('$nombreU','$nombre','$apPaterno','$apMaterno','$telefono','$correo',
        '$contraseña','')";

        $db->ejecutaSQL($cadena);

        echo"
            <div class='alert alert-success'>
            Cliente Registrado
            </div>
        ";
        header("refresh:3;../html/index.html");

    ?>


    </div>
    

    <!-- Optional JavaScript -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    
    
  </body>
</html>