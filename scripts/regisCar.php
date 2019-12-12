<link rel="stylesheet" href="../vendor/Bootstrap/css/bootstrap.css">
<script src="vendor/Jquery/jquery-2.2.4.min.js"></script>
<script src="vendor/Bootstrap/js/bootstrap.min.js"></script>

<?php


include '../assets/head.php';
include 'database.php';
try {
    $db = new Database();
    $db = $db->getConn();
    session_start();
    if (isset($_SESSION['usr_nom'])) {
        extract($_GET);

        $cadena = "INSERT INTO carrito(idUsuario, activos) VALUES (" . $_SESSION['idUsuario'] . ",1)";
        $stmt = $db->prepare($cadena);
        $stmt->execute();

        
        $cadena = "INSERT INTO carrito(idUsuario, activos) VALUES (" . $_SESSION['idUsuario'] . ",1)";
        echo "<div class='alert alert-success'>Se ha añadido al carrito</div>";
    } else {

        echo "no existe sesion";
    }

    /* extract($_POST);

    $pass = password_hash($pass, PASSWORD_DEFAULT);

    $cadena = "INSERT INTO Usuario(nick,nomUsu,apPUsu,apMUsu,correo,pass,telefono,rol) 
    VALUES ('$nomUsr','$nom','$app','$apm','$email','$pass','$tel',$rol);";

    $stmt = $db->prepare($cadena);
    $stmt->execute();
    
    */
} catch (PDOException $e) {
    echo "<div class='alert alert-danger'>No Se Pudo Registrar Este Usuario</div>";
}

header("refresh:2;../carrito.php");
?>