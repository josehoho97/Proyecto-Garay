<!DOCTYPE html>
<html lang="en">
<?php include "./assets/head.php";?>
<body>
<?php 
    include "./assets/navbar.php";

    include './scripts/database.php';
    try{
        $db = new Database();
        $db = $db->getConn();

        extract($_POST);

        $cadena = "SELECT * from PedidosHechos WHERE activo = 1";

        //echo $usr;
        $stmt = $db->prepare($cadena);
        $stmt->execute();
        //$stmt = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "<div class='container'><div class='col-md-12'><h1>Pedidos Hechos</h1></div>";
        echo "<div class=''><table>";
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>
            <td>".$row['nomUsu'].
            "</td><td>".$row['nomPlatillo'].
            "</td><td>".$row['nomBebida'].
            "</td><td>".$row['Precio'].
            "</td><td>".$row['fecha'].
            "</td></tr><br>";
        }

    }catch(PDOException $e){

    }
    echo "</div></div></table>"
?>          
<div class="row">
    
    
    
    <div class=""></div>
</div>
</body>
</html>