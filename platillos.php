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
                <img src="img/icons/tinder.png"> Ver Platillos</a>
        </li>
        <li class="nav-item nav-link">
            <a class="nav-link" id="alta-tab" data-toggle="tab" href="#alta" role="tab" aria-controls="alta" aria-selected="false">
                <img src="img/icons/apoyo.png">Agregar Nuevos Platillos</a>
        </li>
        <li class="nav-item nav-link">
            <a class="nav-link" id="configuracion-tab" data-toggle="tab" href="#configuracion" role="tab" aria-controls="configuracion" aria-selected="false">
                <img src="img/icons/eliminar.png">Eliminar Platillos</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="busqueda" role="tabpanel" aria-labelledby="busqueda-tab">
            <!-- USUARIOS REGISTRADOS-->
            <br>
            <div class="display-4">Platillos Registrados</div>
            <br>
            <?php
            include './scripts/database.php';
            try {
                $db = new Database();
                $db = $db->getConn();

                extract($_POST);

                $cadena = "SELECT * from platillo";
                $stmt = $db->prepare($cadena);
                $stmt->execute();

                echo "<div class='src'> <table class='table table-alert-success'>
                            <thead class='thead-dark'>
                              <tr>
                                <th scope='col'>#</th>
                                <th scope='col'>Nombre de Platillo</th>
                                <th scope='col'>Descripcion</th>
                                <th scope='col'>Precio</th>
                                <th scope='col'>Tipo</th>
                                <th scope='col'>activo</th>
                              </tr>
                            </thead >
                            <tbody>";


                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>
                                <th scope='row'>" . $row['idPlatillo'] . "</th>
                                <td>" . $row['nomPlatillo'] . "</td>
                                <td>" . $row['descripcion'] . "</td>
                                <td>" . $row['precio'] . "</td>
                                <td>" . $row['tipo'] . "</td>
                                <td>" . $row['activo'] . "</td>
                                
                              </tr>";
                }
            } catch (PDOException $e) { }
            echo "</tbody></table></div>";
            ?>

        </div>
        <div class="tab-pane fade" id="alta" role="tabpanel" aria-labelledby="alta-tab">
            <div class="row p-3 pt-5 pb-5">

                <div class="display-4">Registrar Nuevos Platillos</div>
            </div>
            <form action="scripts/guardarUsuario.php" method="POST" class="p-3 mb-5">
                <div class="form-group row">
                    <label for="nomUsr" class="col-sm-2 col-form-label">Nombre del platillo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nomUsr" id="nomUsr" placeholder="Nombre del platillo" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nom" class="col-sm-2 col-form-label">Descripcion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nom" id="nom" placeholder="Descripcion del platillo" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="app" class="col-sm-2 col-form-label">Precio</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="app" id="app" placeholder="Precio del Paterno $$$" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="apm" class="col-sm-2 col-form-label">Tipo del platillo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="apm" id="apm" placeholder="Tipo de platillo" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="apm" class="col-sm-2 col-form-label">Activo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="apm" id="apm" placeholder="Disponibilidad" required>
                    </div>
                </div>
                <div class="form-group row mt-5">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Terminar Registro</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="tab-pane fade" id="configuracion" role="tabpanel" aria-labelledby="configuracion-tab">
            configuracion...
        </div>
    </div>




    <!-- Footer -->
    <!-- <?php include "./assets/footer.php"; ?> -->
    <script src="vendor/Jquery/jquery-2.2.4.min.js"></script>
    <script src="vendor/Bootstrap/js/bootstrap.min.js"></script>
</body>

</html>