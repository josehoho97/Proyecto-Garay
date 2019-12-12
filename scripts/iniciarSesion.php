<?php 
    include 'database.php';
    try{
        $db = new Database();
        $db = $db->getConn();

        extract($_POST);

        $cadena = "SELECT idUsuario, nomUsu, rol, pass from Usuario where correo = '$usr'";

        //echo $usr;
        $stmt = $db->prepare($cadena);
        $stmt->execute();
        $stmt = $stmt->fetch(PDO::FETCH_ASSOC);
        if(password_verify($pass, $stmt['pass'])){
            session_start();
            $_SESSION['usr_nom'] = $stmt['nomUsu'];
            $_SESSION['rol'] = $stmt['rol'];
            $_SESSION['idUsuario'] = $stmt['idUsuario'];
            echo "<div class='alert alert-success'>Sesion Iniciada</div>";
            header("Location:../index.php");
        }else{    
            echo "<div class='alert alert-danger'>Usuario o contraseña incorrecto</div>";
        }

    }catch(PDOException $e){

    }
?>