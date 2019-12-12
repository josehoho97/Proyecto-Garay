<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php include "./assets/head.php"; ?>

<body>

    <!-- Navbar -->
    <?php include "./assets/navbar.php"; ?>

    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item nav-link">
            <a class="nav-link active" id="busqueda-tab" data-toggle="tab" href="#busqueda" role="tab" aria-controls="busqueda" aria-selected="true">
                <img src="img/icons/búsqueda.png"> Ver Usuarios</a>
        </li>
        <li class="nav-item nav-link">
            <a class="nav-link" id="alta-tab" data-toggle="tab" href="#alta" role="tab" aria-controls="alta" aria-selected="false">
                <img src="img/icons/contactos.png">Dar Alta Usuarios</a>
        </li>

    </ul>


    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="busqueda" role="tabpanel" aria-labelledby="busqueda-tab">
            <!-- USUARIOS REGISTRADOS-->
            <br>
            <div class="display-4">Usuarios Registrados</div>
            <br>
            <?php
            include './scripts/database.php';
            try {
                $db = new Database();
                $db = $db->getConn();

                extract($_POST);

                $cadena = "SELECT idUsuario, nick, nomUsu, apPUsu, apMUsu, correo, telefono, rol, nomRol from usuario join roles on idRol = rol";
                $stmt = $db->prepare($cadena);
                $stmt->execute();

                echo "<div class=src><table class='table table-dark'>
                            <thead class='thead-light'>
                              <tr>
                                <th scope='col'>#</th>
                                <th scope='col'>Nombre de Usuario</th>
                                <th scope='col'>Nombre(s)</th>
                                <th scope='col'>Apellido Paterno</th>
                                <th scope='col'>Apellido Materno</th>
                                <th scope='col'>Correo Electronico</th>
                                <th scope='col'>Telefono</th>
                                <th scope='col'>Rol</th>
                                <th scope='col'>Eliminar</th>
                                <th scope='col'>Editar</th>
                              </tr>
                            </thead >
                            <tbody>";


                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>
                                <th scope='row'>" . $row['idUsuario'] . "</th>
                                <td>" . $row['nick'] . "</td>
                                <td>" . $row['nomUsu'] . "</td>
                                <td>" . $row['apPUsu'] . "</td>
                                <td>" . $row['apMUsu'] . "</td>
                                <td>" . $row['correo'] . "</td>
                                <td>" . $row['telefono'] . "</td>
                                <td>" . $row['nomRol'] . "</td>
                                <td><a href='bajaUsuario.php?id=" . $row['idUsuario'] . "'>
                                Eliminar</a></td> 
                                <td><a href='editarUsuario.php?id=" . $row['idUsuario'] . "'>
                                Editar</a></td> 
                              </tr>"; //.&N=80 para poder mandar otra parametro
                }
            } catch (PDOException $e) { }
            echo "</tbody></table></div>";
            ?>

        </div>
        <div class="tab-pane fade" id="alta" role="tabpanel" aria-labelledby="alta-tab">
            <div class="row p-3 pt-5 pb-5">
                <div class="display-4">Registrar Usuarios</div>
            </div>
            <form action="scripts/guardarUsuario.php" method="POST" class="p-3 mb-5">
                <div class="form-group row">
                    <label for="nomUsr" class="col-sm-2 col-form-label">Nombre de Usuario</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nomUsr" id="nomUsr" placeholder="Nombre de Usuario" required>
                    </div>
                </div>
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
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tel" class="col-sm-2 col-form-label">Telefono</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="tel" id="tel" placeholder="Telefono" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="pass" class="col-sm-2 col-form-label">Contraseña</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña" required>
                    </div>
                </div>

                <div class="form-group row ">
                    <!-- mt-5  -->
                    <label for="rol" class="col-sm-2 col-form-label">Tipo de usuario</label>
                    <div class="col-sm-10">
                        <select name="rol" id="rol" class="col-sm-10 form-control">
                            <option value="1">Administrador</option>
                            <option value="2">Empleado</option>
                            <option value="3">Cliente</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mt-5">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Terminar Registro</button>
                    </div>
                </div>
            </form>
        </div>


    </div>




    <!-- Footer -->
    <!-- <?php include "./assets/footer.php"; ?> -->
    <script src="vendor/Jquery/jquery-2.2.4.min.js"></script>
    <script src="vendor/Bootstrap/js/bootstrap.min.js"></script>
</body>

</html>