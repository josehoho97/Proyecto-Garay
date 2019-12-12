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

    UPDATE `platillo` SET `idPlatillo`="kk",`nomPlatillo`="kk",`descripcion`="kk",`precio`="2345",`tipo`="1",`activo`="1" WHERE idPlatillo = '24'

    $cadena  = "UPDATE `platillo` SET 
                                    `nomPlatillo`=$nomPlatillo,
                                    `descripcion`=$descripcion,
                                    `precio`=$precio,
                                    `tipo`=$tipo,
                                    `activo`=$activo,
                                     WHERE idPlatillo=24";
    
    $stmt = $db->prepare($cadena);
    $stmt->execute();
    echo "
    <div class='container'>
        <div class='alert alert-success'><h1 class='display-1'>Información guardada existosamente</h1></div>
    </div>";
    
}catch (PDOException $e) {
    echo "<div class='alert alert-danger'>No se actualizó el usuario</div> <p>$e</p>";
}

//header("refresh:3;../platillos.php");
?>

    
    
   
 