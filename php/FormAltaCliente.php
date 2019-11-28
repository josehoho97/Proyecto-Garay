<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

    <style type="text/css">
        #contenedor{
            width: 60%;
            margin:auto;
        }
        body{
            margin-top: 30px;
        }
    </style>

    <title>Registrar Clientes - Proyecto</title>
  </head>
  <body>

    <div class="container">
    
    <h2>Alta de Clientes</h2>
    <hr>
        <form action="../scripts/guardaCliente.php" method="post">
            <div class="form-group">
                <label class="control-label" for="">Nombre Usuario:</label>
                <input  class="form-control" type="text" name="nombreU" placeholder="Escribe Nombre" required>
            </div>
            <div class="form-group">
            <label class="control-label" for="">Nombre(s):</label>
                <input  class="form-control" type="text" name="nombre" placeholder="Escribe Nombre" required>
            </div>
            <div class="form-group">
            <label class="control-label" for="">Ap. Paterno:</label>
                <input  class="form-control" type="text" name="apPaterno" placeholder="Escribe Ap. Paterno" required>
            </div>
            <div class="form-group">
            <label class="control-label" for="">Ap. Materno:</label>
                <input  class="form-control" type="text" name="apMaterno" placeholder="Escribe Ap. Materno" required>
            </div>
            <div class="form-group">
            <label class="control-label" for="">Teléfono:</label>
                <input  class="form-control" type="text" name="telefono" placeholder="Escribe #Teléfono" required>
            </div>
            <div class="form-group">
            <label class="control-label" for="">Correo:</label>
                <input  class="form-control" type="text" name="correo" placeholder="Escribe Correo Electrónico" required>
            </div>
            <div class="form-group">
            <label class="control-label" for="">Contraseña:</label>
                <input  class="form-control" type="text" name="contraseña" placeholder="Escribe Contraseña" required>
            </div>

            <?php

                include '../scripts/database.php';
                $db = new Database();
                $db->conectarBD();
                $cadena = "select nomUsuarioC, contraseñaC from cliente";
                $registros = $db->seleccionar($cadena);

                    $db->desconectarBD();
            ?>

            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-success btn-block">
                    Guardar
                </button>
            </div>

        </form>
    </div>
    

    <!-- Optional JavaScript -->
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    
    

<!--
                echo" 
                    <div class='form-group'>
                        <label class='control-label'> 
                        Nombre de Usuario</label>
                        <select name='nombreU' class='form-control'>;

                        foreach($registros as $value)
                        {
echo "<option value='".$value['nomUsuarioC']."''>".$value['contraseñaC']."</option>";
                        }
                  -->

  </body>
</html>