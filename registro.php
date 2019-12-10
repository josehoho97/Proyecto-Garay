<!DOCTYPE html>
<html lang="en">
<?php include "./assets/head.php" ?>
<body>
    <?php include "./assets/navbar.php" ?>
    <div class="container">
        <div class="row p-3 pt-5 pb-5">
            <img src="img/logo.png" class="img-fluid mr-5" width="80px">
            <div class="display-4">Registro</div>
        </div>
        <form action="scripts/guardaCliente.php" method="POST" class="p-3 mb-5">
            <div class="form-group row">
                <label for="nom" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Nombre" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="app" class="col-sm-2 col-form-label">Apellido Paterno</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="app" id="app" placeholder="Apellido Paterno" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="apm" class="col-sm-2 col-form-label">Apellido Materno</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="apm" id="apm" placeholder="Apellido Materno" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="nomUsr" class="col-sm-2 col-form-label">Nombre de Usuario</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nomUsr" id="nomUsr" placeholder="Nombre de Usuario" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="tel" class="col-sm-2 col-form-label">Telefono</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="tel" id="tel" placeholder="Telefono" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="pass" class="col-sm-2 col-form-label">Contraseña</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña" required>
                </div>
            </div>
            <div class="form-group row mt-5">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Terminar Registro</button>
                </div>
            </div>
        </form>
    </div>
    <?php include "./assets/footer.php" ?>
    <script src="vendor/Jquery/jquery-2.2.4.min.js"></script>
    <script src="vendor/Bootstrap/js/bootstrap.min.js"></script>
</body>

</html>