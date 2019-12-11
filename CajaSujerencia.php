<!DOCTYPE html>
<html lang="en">
<?php include "./assets/head.php" ?>
<body>
    <?php include "./assets/navbar.php" ?>
    <div class="container">
        <div class="row p-3 pt-5 pb-5">
            <img src="img/logo.png" class="img-fluid mr-5" width="80px">
            <div class="display-4">Caja de Sujerencias</div>
        </div>
        <form action="scripts/guardaCliente.php" method="POST" class="p-3 mb-5">
            
            <div class="form-group row">
                <textarea name="comentario" placeholder="Escribenos tus sujerencias..." cols="50" rows="15"></textarea><br><br>
            </div>            

            <div class="form-group row mt-5">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Envianos tus sujerencias</button>
                </div>
            </div>
            
            <div align="center" class="form-group row mt-5">
                <div class="col-sm-10">
                    <h3>Envianos tus sujerencias, en que podemos mejorar y en que podrimaos agregar al restaurant :)</h3>
                </div>                
            </div>
        </form>
    </div>
    <?php include "./assets/footer.php" ?>
    <script src="vendor/Jquery/jquery-2.2.4.min.js"></script>
    <script src="vendor/Bootstrap/js/bootstrap.min.js"></script>
</body>

</html>