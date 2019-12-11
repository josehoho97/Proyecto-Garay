<!DOCTYPE html>
<html lang="en">

  <?php include "./assets/navbar.php" ?>

  <div class="navbar navbar-expand-md navbar-dark bg-dark ">
    <a href="index.html" class="navbar-brand"> <img src="logo.png" style="width: 40px;">El barquito</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dos" aria-controls="dos"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id=dos>
      <ul class="navbar-nav nav-pills flex-column flex-sm-row">
        
        <style>
          .blanco {
            color: white !important;
          }
          #vis {
            border: 2px solid black;
            font-size: 25px;            
          }
          #tamTex {
            font-size: 25px;
          }
        </style>

        <li class="nav-item"><a href="index.html" class="nav-link blanco">Inicio</a></li>
        <li class="nav-item"><a href="menu.html" class="nav-link blanco">Menu</a></li>
        <li class="nav-item"><a href="AcercaDe.html" class="nav-link blanco">¿Quienes Somos?</a></li>
        <li class="nav-item"><a href="contacto.html" class="nav-link blanco">Contactos</a></li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle blanco" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Inicio de sesion
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Cliente</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Empleado</a>

            <a class="dropdown-item" href="#">Administrador</a>
          </div>
        </li>
      </ul>
    </div>
  </div>

  <div class="container">
    <br>
    <div align='center' class="col-4">
      <h3>Binvenido Usuario</h3><br>
      <h3 align='center'>(Nombre de usuario)</h3>
    </div>
    <div class="row" align="center">
    <!--Descripcion del usuario-->
    <div class="col-4"><table border="3" >        
      <tr>
        <td><b>Nombre de usuario</b></td>
        <td>Nombre del usuario</td>
      </tr>
      <tr>
        <td ><b>Telefono</b></td>                  
        <td colspan="2">Telefono usuario</td>          	
      </tr>
      <tr>
        <td><b>Correo</b></td>
        <td>Ingrese el correo</td>
      </tr>
      <tr>
        <td><b>Sexo</b></td>
        <td>Ingrese dato</td>
      </tr>        
    </table>
  </div>
  <!--Visitas Registradas-->
    <div align="center" class="col-4">
      <p id="vis"># Visitas generadas</p>      
    </div>
  
  <!--Realizar pedido-->
    <div align="center" class="col-4">
      <button class="btn btn-danger btn-lg" id="vis">Realizar Pedido</button>      
    </div>
  
  <!--Lista de lo que puede obtener el usuario-->
    <div align="center" class="offset-4 col-8">
      <br>
      <p id="vis">Lista de lo que el usuario puede obtener con las visitas acumuladas(descuentos, promociones)</p>
    </div>      
  <!--Caja de comentarios-->
    <div class="offset-4 col-8">
      <b id="tamTex">Escribe un comentario</b>
      <br>
      <textarea name="comentario" placeholder="Escribe un comentario..." cols="50" rows="10"></textarea><br><br>
    </div>
  </div>
  
    

	<hr size="9" width="50%" noshade>
    <br>
  </div>
  <br>

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
          <a href="https://www.facebook.com/Morelosbarquito/" class="" target="blank"><img src="../img/facebook-icon.png" alt="icono de facebook" class=""></a></a>
        </div>
        <div class="col-4">
          <h3>PIDE DESDE UBER EATS</h3>
          <a href="https://www.ubereats.com/es-MX/torreon/food-delivery/barquito-morelos/Yn9-o8C5TRyVX5Hnf-pfiA/"
            class="">
            <img src="../img/uber.png" alt="Icono Uber Eats" width="15%">
          </a>
        </div>
      </div>
    </div>
    <div class="container"> <span class="float-right">© 2019 El Barquito Morelos</span></div>
  </footer>
  <script src="../vendor/Jquery/jquery-2.2.4.min.js"></script>
  <script src="../vendor/Bootstrap/js/bootstrap.min.js"></script>
</body>

</html>