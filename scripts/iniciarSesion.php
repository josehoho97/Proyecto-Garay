<?php 
    include 'database.php';
    try{
        $db = new Database();
        $db = $db->getConn();

        extract($_POST);

        $cadena = "SELECT nomUsuarioC, contraseñaC from cliente where 
                        nomUsuarioC like '%$usr%' or correoC like'%$usr%'";

        // echo $usr;
        // echo $pass;
        $stmt = $db->prepare($cadena);
        $stmt->execute();
        $stmt = $stmt->fetch(PDO::FETCH_ASSOC);

        if(password_verify($pass, $stmt['contraseñaC'])){
            session_start();
            $_SESSION['usr_nom'] = $stmt['nomUsuarioC'];
            echo "<div class='alert alert-success'>Sesion Iniciada</div>";
        }else{    
            echo "<div class='alert alert-danger'>Usuario o contraseña incorrecto</div>";
        }

    }catch(PDOException $e){

    }
?>