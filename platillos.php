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

                $cadena = "SELECT idPlatillo, nomPlatillo, descripcion, precio, tipo, activo, nomTipo from platillo join tipo on idTipo = tipo";
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
                                <th scope='col'>Eliminar</th>
                                <th scope='col'>Modificar</th>
                              </tr>
                            </thead >
                            <tbody>";


                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>
                                <th scope='row'>" . $row['idPlatillo'] . "</th>
                                <td>" . $row['nomPlatillo'] . "</td>
                                <td>" . $row['descripcion'] . "</td>
                                <td>" . $row['precio'] . "</td>
                                <td>" . $row['nomTipo'] . "</td>
                                <td>" . $row['activo'] . "</td>
                                <td><a href='". $row['idPlatillo'] ."'>Eliminar</a></td> 
                                <td><a href='". $row['idPlatillo'] ."'>Editar</a></td> 
                                
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
            <form action="scripts/guardarPlatillo.php" method="POST" class="p-3 mb-5">
                <div class="form-group row">
                    <label for="nomPlatillo" class="col-sm-2 col-form-label">Nombre del platillo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nomPlatillo" id="nomPlatillo" placeholder="Nombre del platillo" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="descripcion" class="col-sm-2 col-form-label">Descripcion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion del platillo" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="precio" class="col-sm-2 col-form-label">Precio</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio del Paterno $$$" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nomTipo" class="col-sm-2 col-form-label">Tipo del platillo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nomTipo" id="nomTipo" placeholder="Tipo de platillo" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="activo" class="col-sm-2 col-form-label">Activo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="activo" id="activo" placeholder="Disponibilidad" required>
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