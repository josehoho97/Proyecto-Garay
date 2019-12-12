<link rel="stylesheet" href="../vendor/Bootstrap/css/bootstrap.css">
<script src="vendor/Jquery/jquery-2.2.4.min.js"></script>
<script src="vendor/Bootstrap/js/bootstrap.min.js"></script>

<?php
include '../assets/head.php';
include 'database.php';
try {
    $db = new Database();
    $db = $db->getConn();

    extract($_GET);//echo $id;
    extract($_POST);

    $cadena  = "UPDATE platillo SET nomPlatillo='$nomPlatillo',
                                    descripcion='$descripcion',
                                    precio=$precio,
                                    tipo='$tipo',
                                    activo=$activo
                                     WHERE idPlatillo = '$id'";
    
    $stmt = $db->prepare($cadena);
    $stmt->execute();
    echo "
    <div class='container'>
        <div class='alert alert-success'><h1 class='display-1'>Información guardada existosamente</h1></div>
    </div>";
    
}catch (PDOException $e) {
    echo "<div class='alert alert-danger'>No se pudo actualizar el platillo</div> <p>$e</p>";
}

header("refresh:3;../platillos.php");
?>

    
    
   
 