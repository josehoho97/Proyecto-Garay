<!DOCTYPE html>
<html lang="en">

<?php include "./assets/head.php" ?>
<style>
  #imgMov {
    background-color: gray;
  }

  #imgTamaño {
    width: 42%;
    height: 95%;
  }

  #imgTamaño2 {
    width: 10%;
    height: 10%;
  }
</style>

<body>
  <?php include "./assets/navbar.php" ?>
  <!--Seccion de promociones-->
  <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <h3 align="center"><b>Promociones</b></h3>
      <div class="carousel-inner" align="center" id="imgMov">
        <div class="carousel-item active">
          <img class="d-block w-50" src="img/Promociones/promocion.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-50" src="img/Promociones/promocion1.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block" src="img/Promociones/promo.jpg" alt="Third slide" id="imgTamaño">
        </div>
        <div class="carousel-item">
          <img class="d-block w-50" src="img/Promociones/postres 3 x 2.png" alt="Fourt slide">
        </div>
      </div>

      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <br><br>

  <!--Seccion de postres-->
  <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <h2 align="center"><b>Postre</b></h2>
      <div class="carousel-inner" align="center" id="imgMov">
        <div class="carousel-item active">
          <img class="d-block w-50" src="img/Postres/pastel2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-50" src="img/Postres/pastelito.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-50" src="img/Postres/pay.jpg" alt="Fourt slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-50" src="img/Postres/pastel de nuez.jpg" alt="Fivetd slide">
        </div>

      </div>

      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <br><br>

  <!--Seccion de bebidas-->
  <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <h3 align="center"><b>Bebidas</b></h3>
      <div class="carousel-inner" align="center" id="imgMov">
        <div class="carousel-item active">
          <img class="d-block w-50" src="img/Bebidas/coctel.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-50" src="img/Bebidas/bebida.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-50" src="img/Bebidas/cerveza.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-50" src="img/Bebidas/arbol.jpg" alt="Fourt slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-50" src="img/Bebidas/cocteldecamarones.jpg" alt="Fivet slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-50" src="img/Bebidas/cocteles.jpg" alt="Sextd slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-50" src="img/Bebidas/jarita.jpg" alt="Seventd slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-50" src="img/Bebidas/super marinera.jpg" alt="Eight slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-50" src="img/Bebidas/vaso michelado.jpg" alt="Nine slide">
        </div>
      </div>

      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <br><br>
  <?php include "./assets/footer.php" ?>
  <script src="vendor/Jquery/jquery-2.2.4.min.js"></script>
  <script src="vendor/Bootstrap/js/bootstrap.min.js"></script>
</body>

</html>