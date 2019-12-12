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
                <img src="img/icons/ejemplo.png"> Ver Bebidas</a>
        </li>
        <li class="nav-item nav-link">
            <a class="nav-link" id="alta-tab" data-toggle="tab" href="#alta" role="tab" aria-controls="alta" aria-selected="false">
                <img src="img/icons/verificación.png">Agregar Nuevas Bebidas</a>
        </li>
      
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="busqueda" role="tabpanel" aria-labelledby="busqueda-tab">
            <!-- USUARIOS REGISTRADOS-->
            <br>
            <div class="display-4">Bebidas Registrados</div>
            <br>
            <?php
            include './scripts/database.php';
            try {
                $db = new Database();
                $db = $db->getConn();

                extract($_POST);

                $cadena = "SELECT idBebida, nomBebida, precio, tipo, activo, nomTipoB from bebidas join tipobebida on idTipoB = tipo";
                $stmt = $db->prepare($cadena);
                $stmt->execute();

                echo "<table class='table table-alert-success'>
                            <thead class='thead-dark'>
                              <tr>
                                <th scope='col'>#</th>
                                <th scope='col'>Nombre Bebida</th>
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
                                <th scope='row'>" . $row['idBebida'] . "</th>
                                <td>" . $row['nomBebida'] . "</td>
                                <td>" . $row['precio'] . "</td>
                                <td>" . $row['nomTipoB'] . "</td>
                                <td>" . $row['activo'] . "</td>
                                <td><a href='bajaBebida.php?id=" . $row['idBebida'] . "'>Eliminar</a></td> 
                                <td><a href='editarBebida.php?id=" . $row['idBebida'] . "'>Editar</a></td> 
                                
                              </tr>";
                }
            } catch (PDOException $e) { }
            echo "</tbody></table>";
            ?>

        </div>
        <div class="tab-pane fade" id="alta" role="tabpanel" aria-labelledby="alta-tab">
            <div class="row p-3 pt-5 pb-5">

                <div class="display-4">Registrar Nuevas Bebidas</div>
            </div>
            <form action="scripts/guardarBebidas.php" method="POST" class="p-3 mb-5">
                <div class="form-group row">
                    <label for="nomB" class="col-sm-2 col-form-label">Nombre Bebida</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nomB" id="nomB" placeholder="Nombre de la bebida" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="precioB" class="col-sm-2 col-form-label">Precio</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="precioB" id="precioB" placeholder="Precio de la bebida" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tipo" class="col-sm-2 col-form-label">Tipo de Bebida</label>
                    <div class="col-sm-10">
                        <select name="tipo" id="tipo" class="col-sm-10 form-control">
                            <option value="1">Normal</option>
                            <option value="2">Alcohólica</option>
                           
                        </select>
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