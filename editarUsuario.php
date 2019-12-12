<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php include "./assets/head.php"; ?>
<?php include "./assets/navbar.php";?>
<?php
include './scripts/database.php';
try {

    $db = new Database();
    $db = $db->getConn();

    extract($_GET);//echo $id;
    $cadena = "SELECT * from usuario WHERE idUsuario = $id";
    $stmt = $db->prepare($cadena);
    $stmt->execute();


    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $sel1 = $row["rol"] == 1?"selected":"";
    $sel2 = $row["rol"] == 2?"selected":"";
    $sel3 = $row["rol"] == 3?"selected":"";

    echo "<div class='row p-3 pt-5 pb-5'>

        <div class='display-4'>Editar Usuario</div>
    </div>
    <form action='scripts/editarCliente.php?id=".$row["idUsuario"]."' method='POST' class='p-3 mb-5'>
        <div class='form-group row'>
            <label for='nomUsr' class='col-sm-2 col-form-label'>Nombre de Usuario</label>
            <div class='col-sm-10'>
                <input value='". $row["nick"] ."' type='text' class='form-control' name='nomUsr' id='nomUsr' placeholder='Nombre de Usuario' required>
            </div>
        </div>
        <div class='form-group row'>
            <label for='nom' class='col-sm-2 col-form-label'>Nombre</label>
            <div class='col-sm-10'>
                <input value='". $row["nomUsu"] ."' type='text' class='form-control' name='nom' id='nom' placeholder='Nombre' required>
            </div>
        </div>
        <div class='form-group row'>
            <label for='app' class='col-sm-2 col-form-label'>Apellido Paterno</label>
            <div class='col-sm-10'>
                <input  value='". $row["apPUsu"] ."' type='text' class='form-control' name='app' id='app' placeholder='Apellido Paterno' required>
            </div>
        </div>
        <div class='form-group row'>
            <label for='apm' class='col-sm-2 col-form-label'>Apellido Materno</label>
            <div class='col-sm-10'>
                <input value='". $row["apMUsu"] ."' type='text' class='form-control' name='apm' id='apm' placeholder='Apellido Materno' required>
            </div>
        </div>
        <div class='form-group row'>
            <label for='email' class='col-sm-2 col-form-label'>Email</label>
            <div class='col-sm-10'>
                <input value='". $row["correo"] ."' type='email' class='form-control' name='email' id='email' placeholder='Email' required>
            </div>
        </div>
        <div class='form-group row'>
            <label for='tel' class='col-sm-2 col-form-label'>Telefono</label>
            <div class='col-sm-10'>
                <input value='". $row["telefono"] ."'  type='number' class='form-control' name='tel' id='tel' placeholder='Telefono' required>
            </div>
        </div>
        <div class='form-group row'>
            <label for='rol' class='col-sm-2 col-form-label'>Tipo de usuario</label>
            <div class='col-sm-10'>
                <select name='rol' id='rol' class='col-sm-10 form-control'>
                    <option value='1' ". $sel1 ." >Administrador</option>
                    <option value='2' ". $sel2 .">Empleado</option>
                    <option value='3' ". $sel3 .">Cliente</option>
                </select>
            </div>
        </div>
        
    <div class='col-sm-10'>
        <button type='submit' class='btn btn-primary'>Guardar</button>
    </div>
</div>";
} catch (PDOException $e) {
    echo "<div class='alert alert-danger'>
        
        </div>";
}

?>