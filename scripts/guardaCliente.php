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

    $pass = password_hash($pass, PASSWORD_DEFAULT);

    $cadena = "INSERT INTO Usuario(nick,nomUsu,apPUsu,apMUsu,correo,pass,telefono,rol) 
    VALUES ('$nomUsr','$nom','$app','$apm','$email','$pass','$tel','3');";

    $stmt = $db->prepare($cadena);
    $stmt->execute();
    echo "
    <div class='container'>
        <div class='alert alert-success'><h1 class='display-1'>Registro Exitoso</h1></div>
    </div>";
    
}catch (PDOException $e) {
    echo "<div class='alert alert-danger'>Cliente no fue registrado</div>";
}

header("refresh:3;../index.php");
?>