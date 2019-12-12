<link rel="stylesheet" href="../vendor/Bootstrap/css/bootstrap.css">
<script src="vendor/Jquery/jquery-2.2.4.min.js"></script>
<script src="vendor/Bootstrap/js/bootstrap.min.js"></script>

<?php
include '../assets/head.php';
include 'database.php';
try {
    $db = new Database();
    $db = $db->getConn();

    extract($_POST);

   
    $cadena = "INSERT INTO platillo(nomPlatillo, descripcion, precio, tipo, activo) 
    VALUES ('$nomPlatillo', '$descripcion', '$precio', '$tipo', '$activo')";
    
    $stmt = $db->prepare($cadena);
    $stmt->execute();
    echo "<div class='alert alert-success'>Platillo Registrado</div>";
    
}catch (PDOException $e) {
    echo "<div class='alert alert-danger'>No Se Pudo Registrar El Platillo</div>";
}

header("refresh:3;../platillos.php");
?>