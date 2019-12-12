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
    $cadena = "DELETE from bebidas WHERE idBebida = $id";
    $stmt = $db->prepare($cadena);
    $stmt->execute();

        echo "<div class='alert alert-success'>Bebida Eliminada</div>";
    }
    catch(PDOException $e){
        echo "<div class='alert alert-danger'>Error, no se puede eliminar el la bebida</div>";
    }
    header("refresh:3;bebidas.php");
?>