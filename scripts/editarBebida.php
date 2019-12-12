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

    $cadena = "UPDATE `bebidas` SET nomBebida ='$nomB',
                                    precio =$precioB,
                                    tipo =$tipo,
                                    activo =$activo 
                                    WHERE idBebida = '$id'";
    $stmt = $db->prepare($cadena);
    $stmt->execute();
    echo "
    <div class='container'>
        <div class='alert alert-success'><h1 class='display-1'>Información Editada existosamente</h1></div>
    </div>";
    
}catch (PDOException $e) {
    echo "<div class='alert alert-danger'>No se actualizar la bebida</div> <p>$e</p>";
}

header("refresh:3;../bebidas.php");
?>
