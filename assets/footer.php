<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="./scripts/iniciarSesion.php" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesion</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group row">
            <label for="usr" class="col-sm-5 col-form-label">Usuario o Correo</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="usr" id="usr" placeholder="Nombre" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="nom" class="col-sm-5 col-form-label">Contraseña</label>
            <div class="col-sm-6">
              <input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Continuar</button>
        </div>
      </div>
      </form>
  </div>
</div>
<footer class="">

  <div class="container">
    <div class="row">
      <div class="col-4 ">
        <h3>ACERCA DE</h3>
        <a class="" href="AcercaDe.html">¿Quienes somos?</a>
        <br>
        <a class="" href="">Recompensas</a>
      </div>
      <div class="col-4">
        <h3>CONTACTATE CON NOSOTROS</h3>
        <a href="https://www.facebook.com/Morelosbarquito/" class="" target="blank"><img src="img/facebook-icon.png" alt="icono de facebook" class=""></a></a>
      </div>
      <div class="col-4">
        <h3>PIDE DESDE UBER EATS</h3>
        <a href="https://www.ubereats.com/es-MX/torreon/food-delivery/barquito-morelos/Yn9-o8C5TRyVX5Hnf-pfiA/" class="">
          <img src="img/uber.png" alt="Icono Uber Eats" width="15%">
        </a>
      </div>
    </div>
  </div>
  <div class="container"> <span class="float-right">© 2019 El Barquito Morelos</span></div>
</footer>