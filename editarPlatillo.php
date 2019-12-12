<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php include "./assets/head.php"; ?>
<?php include "./assets/navbar.php"; ?>
<?php
include './scripts/database.php';
try {

    $db = new Database();
    $db = $db->getConn();

    extract($_GET); //echo $id;
    $cadena = "SELECT * from platillo WHERE idPlatillo = $id";
    $stmt = $db->prepare($cadena);
    $stmt->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $sel1 = $row["tipo"] == 1 ? "selected" : "";
    $sel2 = $row["tipo"] == 2 ? "selected" : "";
    $sel3 = $row["tipo"] == 3 ? "selected" : "";

    echo "<div class='row p-3 pt-5 pb-5'>
    <div class='display-4'>Editar Platillo</div>
</div>
<form action='scripts/editarPlatillo.php?id=".$row["idPlatillo"]."' method='POST' class='p-3 mb-5'>

    <div class='form-group row'>
        <label for='nomPlatillo' class='col-sm-2 col-form-label'>Nombre del platillo</label>
        <div class='col-sm-10'>
            <input value='" . $row["nomPlatillo"] . "' type='text' class='form-control' name='nomPlatillo' id='nomPlatillo' placeholder='Nombre del platillo' required>
        </div>
    </div>

    <div class='form-group row'>
        <label for='descripcion' class='col-sm-2 col-form-label'>Descripcion</label>
        <div class='col-sm-10'>
            <input value='" . $row["descripcion"] . "' type='text' class='form-control' name='descripcion' id='descripcion' placeholder='Descripcion del platillo' required>
        </div>
    </div>
    
    <div class='form-group row'>
        <label for='precio' class='col-sm-2 col-form-label'>Precio</label>
        <div class='col-sm-10'>
            <input value='" . $row["precio"] . "' type='text' class='form-control' name='precio' id='precio' placeholder='Precio del Paterno $$$' required>
        </div>
    </div>

    <div class='form-group row'>
        <label for='tipo' class='col-sm-2 col-form-label'>Tipo de platillo</label>
        <div class='col-sm-10'>
            <select name='tipo' id='tipo' class='col-sm-10 form-control'>
                <option value='1' " . $sel1 . " >Entrada</option>
                <option value='2' " . $sel2 . " >Plato Fuerte</option>
                <option value='3' " . $sel3 . " >Postre</option>
            </select>
        </div>
    </div>
    <div class='form-group row'>
        <label for='activo' class='col-sm-2 col-form-label'>Activo</label>
        <div class='col-sm-10'>
            <input value='" . $row["activo"] . "' type='text' class='form-control' name='activo' id='activo' placeholder='Disponibilidad' required>
        </div>
    </div>
    <div class='form-group row mt-5'>
        <div class='col-sm-10'>
            <button type='submit' class='btn btn-primary'>Terminar Registro</button>
        </div>
    </div>
</form>";
} catch (PDOException $e) {
    echo "<div class='alert alert-danger'>
        
        </div>";
}

?>