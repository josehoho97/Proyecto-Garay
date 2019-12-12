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
  
  #vis 
  {
    border: 4px solid black;
    font-size: 25px;            
   }
</style>


<body>
  <?php include "./assets/navbar.php" ?>
  
  <br>
  <!--Descripcion del usuario-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 card">
                <h3 align="center">BIENVENIDO</h3><br>
                
                <div class="text-center">
                    <a><img src="img/avatar.png" class="img-fluid rounded" width="50%" alt="Imagen de usuario"></a>
                </div>
                <!--<input type="file" name="foto"><br>-->
                
                <h3 align='center'>(Nombre de usuario)</h3>                
                    
                    <div align="center"><br>
                        <table border="3" >        
                        <tr>
                            <td><b>Nombre de usuario:</b></td>
                            <td>Nombre del usuario</td>
                        </tr>
                        <tr>
                            <td ><b>Telefono:</b></td>                  
                            <td colspan="2">Telefono usuario</td>          	
                        </tr>
                        <tr>
                            <td><b>Correo:</b></td>
                            <td>Ingrese el correo</td>
                        </tr>
                        <tr>
                            <td><b>Sexo:</b></td>
                            <td>Ingrese dato</td>
                        </tr>        
                        </table>
                        <br>
                    </div>
            </div>
            <!--Visitas Registradas-->
            <div class="col-8"><br><br>
                <table border="6" align="center" width="200px" height="150px">
                    <tr>
                        <td align="center" id="vis"># Visitas generadas</td>
                    </tr>
                </table><br><br>
                
                <div align="center" class="col-12">
                    <!--Realizar encuestas-->
                    <button class="btn btn-warning btn-lg" class="nav-link blanco" href="preguntas.php">Realizar encuestas</button><br><br>
                    <!--Realizar pedido-->
                    <button class="btn btn-danger btn-lg" href="carrito.php">Realizar Pedido</button><br><br>
                    <!--Realizar comentario-->
                    <button class="btn btn-success btn-lg" data-toggle= "modal" data-target="#comentario">Realizar comentario</button>
                </div>
                
            </div>
         
            <!--Lista de lo que puede obtener el usuario-->
            <div align="center" class="col-lg-8 col-md-8 col-sm-9 col-9 offset-4">
            <br>
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
    </div>
    <br>
       
  <!--Caja de comentarios-->
  
    <div class="modal fade" id="comentario" tabindex="-1" role="dialog" aria-labellebdy="Caja de comentarios" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                <h5 class="modal-title"><b>
                    Realize su comentario :D
                </b></h5>      
                <button type="button" class="close" data-dismiss="modal">
                X
                </button>
                </div>

                <div class="modal-body">
                    <form>
                        <h5>
                        <b id="tamTex">Escribenos tus comentarios</b>
                        </h5>
                    <br>
                     <textarea name="comentario" placeholder="Escribe un comentario..." cols="60" rows="12"></textarea><br><br>
                    </form>
                </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Enviar</button>
                </div>

            </div>
        </div>
      
    </div>
  </div>

  <br><br><br><br><br><br>
  <?php include "./assets/footer.php" ?>
  <script src="vendor/Jquery/jquery-2.2.4.min.js"></script>
  <script src="vendor/Bootstrap/js/bootstrap.min.js"></script>
</body>

</html>