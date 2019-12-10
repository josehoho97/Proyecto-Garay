<!DOCTYPE html>
<html lang="en">

<?php include "./assets/head.php" ?>

<body>
    <?php include "./assets/navbar.php" ?>
    <div class="container">
        <img src="img/logo.png" class="img-fluid" width="100px">
        <div class="card ">
            <form method="#" action="#">
                <fieldset>
                    <legend class="alert-success">Crear cuenta</legend>
                    <br>
                    <label for="">Nombre De Usuario</label>
                    <br>
                    <input type="text" name="" placeholder="" size="30">
                    <br>
                    <label for="nombre">Nombres</label>
                    <br>
                    <input type="text" name="nombre" placeholder="" size="30">
                    <br>
                    <label for="">Apellido Paterno</label>
                    <br>
                    <input type="text" name="" placeholder="" size="30">
                    <br>
                    <label for="">Apellido Materno</label>
                    <br>
                    <input type="text" name="" placeholder="" size="30">
                    <br>
                    <label for="">Telefono</label>
                    <br>
                    <input type="text" name="" placeholder="" size="30">
                    <br>
                    <label for="Correo electrónico">Correo electrónico</label><br>
                    <input type="text" name="Correo electrónico" placeholder="" size="30">
                    <br>
                    <label for="pass">Contraseña:</label>
                    <br>
                    <input type="password" name="pass" placeholder="Debe tener al menos 6 caracteres" size="30">
                    <h6>La contraseña debe contener al menos seis caracteres.</h6>
                    <br>
                </fieldset>
            </form>
        </div>
    </div>


    <?php include "./assets/footer.php" ?>
    <script src="vendor/Jquery/jquery-2.2.4.min.js"></script>
    <script src="vendor/Bootstrap/js/bootstrap.min.js"></script>
</body>

</html>