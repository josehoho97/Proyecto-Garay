<!DOCTYPE html>
<html lang="en">

<?php include "./assets/head.php" ?>


<body>
  <?php include "./assets/navbar.php" ?>

  <!--Seccion de Comidas-->
  <div class="container">
    <br>
    <h2 align="center"><b>Comidas</b></h2>
    <br>
    <div class="row">

      <div class="col-lg-4 col-md-4 col-sm-12 col-12 card">
        <img src="img/Philadelphia.png" height="250px">
        <h4 align="center">Philadelphia</h4>
        <h5 align="center">$214.80</h5>
        <!-- <input type="hidden" name="platillo" value="4"> -->
        <a href="scripts/regisCar.php?idC=4" class="btn btn-primary"><b>AL CARRITO</b></a>
        <!-- <button type="submit" class="btn btn-primary"><b>AL CARRITO</b></button> -->
      </div>

      <div class="col-lg-4 col-md-4 col-sm-12 col-12 card">
        <img src="img/papas.jpg" height="250px">
        <h4 align="center">Papas a la francesa</h4>
        <h5 align="center">$54.00</h5>
        <a href="scripts/regisCar.php?idC=2" class="btn btn-primary"><b>AL CARRITO</b></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-12 card">
        <img src="img/caldo de camaron.jpg" height="250px">
        <h4 align="center">Caldo de camaron</h4>
        <h5 align="center">$102.00</h5>
        <a href="scripts/regisCar.php?idC=30" class="btn btn-primary"><b>AL CARRITO</b></a>
      </div>
    </div>
  </div>
  <br><br>

  <!--Seccion de bebidas-->
  <div class="container">
    <h3 align="center"><b>Bebidas</b></h3>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-12 card">
        <img src="img/Bebidas/bebida.jpg" height="420px" width="350px">
        <h4 align="center">Limonada Natural (500 militros)</h4>
        <h5 align="center">$28.80</h5>
        <a href="scripts/regisCar.php?idC=1" class="btn btn-primary"><b>AL CARRITO</b></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-12 card">
        <img src="img/Bebidas/arbol.jpg" height="420px" width="350px">
        <h4 align="center">Cerveza Victoria (355 militros)</h4>
        <h5 align="center">$31.20</h5>
        <a href="scripts/regisCar.php?idC=5" class="btn btn-primary"><b>AL CARRITO</b></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-12 card">
        <img src="img/Bebidas/cerveza.jpg" height="420px" width="350px">
        <h4 align="center">Cerveza Negra (355 militros)</h4>
        <h5 align="center">$36.00</h5>
        <a href="scripts/regisCar.php?idC=14" class="btn btn-primary"><b>AL CARRITO</b></a>
      </div>

    </div>

    <!--Seccion de postres-->
    <div class="container">
      <br>
      <h2 align="center"><b>Postres</b></h2>
      <br>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 card">
          <img src="img/Postres/pastel de nuez.jpg" height="250px">
          <h4 align="center">Crepas con cajeta y nuez</h4>
          <h5 align="center">$58.80</h5>
          <a href="scripts/regisCar.php?idC=4" class="btn btn-primary"><b>AL CARRITO</b></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 card">
          <img src="img/Postres/pay.jpg" height="250px">
          <h4 align="center">Duraznos con crema</h4>
          <h5 align="center">$45.60</h5>
          <a href="scripts/regisCar.php?idC=4" class="btn btn-primary"><b>AL CARRITO</b></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 card">
          <img src="img/Postres/pastelito.jpg" height="250px">
          <h4 align="center">Fresas con crema</h4>
          <h5 align="center">$45.60</h5>
          <a href="scripts/regisCar.php?idC=4" class="btn btn-primary"><b>AL CARRITO</b></a>
        </div>
      </div>
    </div>


    <br><br><br><br><br><br>
    <?php include "./assets/footer.php" ?>
    <script src="vendor/Jquery/jquery-2.2.4.min.js"></script>
    <script src="vendor/Bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

<!-- SELECT * FROM carrito 
JOIN pedidos_carrito on pedidos_carrito.idCarrito = carrito.idCarrito
JOIN platillo on platillo.idPlatillo = pedidos_carrito.idPlatillo
JOIN bebidas on bebidas.idBebida = pedidos_carrito.idBebida
JOIN usuario on usuario.idUsuario = carrito.idUsuario
-->