<link rel="stylesheet" href="../vendor/Bootstrap/css/bootstrap.css">
<script src="vendor/Jquery/jquery-2.2.4.min.js"></script>
<script src="vendor/Bootstrap/js/bootstrap.min.js"></script>

<?php
include '../assets/head.php';
include 'database.php';
try{
  $db = new Database();
  $db->conectarBD();
  extract($_POST);
  
  $cadena = "INSERT INTO cliente(nomUsuarioC,nombresC,apPatC,apMatC,telefonoC,correoC,contraseñaC,numVisitas)
          VALUES ('$nomUsr','$nom','$app','$apm','$tel','$email',
          '$pass','')";
  
  $db->ejecutaSQL($cadena);
  echo "<div class='alert alert-success'>Cliente Registrado</div>";
  
}catch(PDOException $e){
  echo "<div class='alert alert-danger'>Cliente no fue registrado</div>";
}

header("refresh:3;../index.php");
?>