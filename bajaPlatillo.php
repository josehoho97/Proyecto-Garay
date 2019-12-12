<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php include "./assets/head.php";?>
<?php
    include './scripts/database.php';
    try {

        $db = new Database();
        $db = $db->getConn();

    //$id = $_GET['id'];
    extract($_GET);//echo $id;
    $cadena = "DELETE from platillo WHERE idPlatillo = $id";
    $stmt = $db->prepare($cadena);
    $stmt->execute();

        echo "<div class='alert alert-success'>Usuario Eliminado!</div>";
    }
    catch(PDOException $e){
        echo "<div class='alert alert-danger'>No Se Puede Eliminar El Usuario</div>";
    }
    header("refresh:3;platillos.php");
?>