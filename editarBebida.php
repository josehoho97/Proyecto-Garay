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
    $cadena = "SELECT * from bebidas WHERE idBebida = $id";
    $stmt = $db->prepare($cadena);
    $stmt->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $sel1 = $row["tipo"] == 1 ? "selected" : "";
    $sel2 = $row["tipo"] == 2 ? "selected" : "";
    //$sel3 = $row["tipo"] == 3 ? "selected" : "";

    echo "<div class='row p-3 pt-5 pb-5'>

    <div class='display-4'>Registrar Nuevas Bebidas</div>
</div>
<form action='scripts/editarBebida.php?id=".$row["idBebida"]."' method='POST' class='p-3 mb-5'>
    <div class='form-group row'>
        <label for='nomB' class='col-sm-2 col-form-label'>Nombre Bebida</label>
        <div class='col-sm-10'>
            <input value='" . $row["nomBebida"] . "' type='text' class='form-control' name='nomB' id='nomB' placeholder='Nombre de la bebida' required>
        </div>
    </div>
    <div class='form-group row'>
        <label for='precioB' class='col-sm-2 col-form-label'>Precio</label>
        <div class='col-sm-10'>
            <input value='" . $row["precio"] . "' type='text' class='form-control' name='precioB' id='precioB' placeholder='Precio de la bebida' required>
        </div>
    </div>
    <div class='form-group row'>
        <label for='tipo' class='col-sm-2 col-form-label'>Tipo de Bebida</label>
        <div class='col-sm-10'>
            <select name='tipo' id='tipo' class='col-sm-10 form-control'>
                <option value='1' " . $sel1 . ">Normal</option>
                <option value='2' " . $sel2 . ">Alcohólica</option>
               
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