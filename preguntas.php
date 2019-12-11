<!DOCTYPE html>
<html lang="en">
<?php include "./assets/head.php" ?>
<body>
    <?php include "./assets/navbar.php" ?>
    <div class="container">
        <div class="row p-3 pt-5 pb-5">
            <img src="img/logo.png" class="img-fluid mr-5" width="80px">
            <div class="display-4">Seccion de Preguntas</div>
        </div>
        <form action="scripts/guardaCliente.php" method="POST" class="p-3 mb-5">
            
            <div class="form-group row">
                <label for="resp" class="col-sm-2 col-form-label">¿Que te parece el servicio del restaurante?</label><br>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="resp" id="resp" placeholder="Respuesta..." required>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="resp" class="col-sm-2 col-form-label">¿La comida fue de tu agrado?</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="resp" id="resp" placeholder="Respuesta..." required>
                </div>
            </div>

            <div class="form-group row">
                <label for="resp" class="col-sm-2 col-form-label">¿qué tanto considera que la calidad haya mejorado desde su última visita?</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="resp" id="resp" placeholder="Respuesta..." required>
                </div>
            </div>

            <div class="form-group row">
                <label for="resp" class="col-sm-2 col-form-label">¿Le agrada el ambiente del local?</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="resp" id="resp" placeholder="Respuesta..." required>
                </div>
            </div>

            <div class="form-group row">
                <label for="resp" class="col-sm-2 col-form-label">¿Le gusto la seccion de postres?</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="resp" id="resp" placeholder="Respuesta..." required>
                </div>
            </div>

            <div class="form-group row">
                <label for="resp" class="col-sm-2 col-form-label">¿Seccion de musica que recomiende poner en el restaurante?</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="resp" id="resp" placeholder="Respuesta..." required>
                </div>
            </div>

            <div class="form-group row">
                <label for="resp" class="col-sm-2 col-form-label">¿Cómo califica la calidad de los alimentos?</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="resp" id="resp" placeholder="Respuesta..." required>
                </div>
            </div>

            <div class="form-group row">
                <label for="resp" class="col-sm-2 col-form-label">¿Considera que esperó demasiado tiempo para ser atendido?</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="resp" id="resp" placeholder="Respuesta..." required>
                </div>
            </div>

            <div class="form-group row">
                <label for="resp" class="col-sm-2 col-form-label">¿Considera que el restaurante cumple con un estándar apropiado de higiene?</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="resp" id="resp" placeholder="Respuesta..." required>
                </div>
            </div>

            <div class="form-group row">
                <label for="resp" class="col-sm-2 col-form-label">¿Considera que el personal le brindó un trato amable?</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="resp" id="resp" placeholder="Respuesta..." required>
                </div>
            </div>

            <div class="form-group row mt-5">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Enviar Respuestas</button>
                </div>
            </div>
        </form>
    </div>
    <?php include "./assets/footer.php" ?>
    <script src="vendor/Jquery/jquery-2.2.4.min.js"></script>
    <script src="vendor/Bootstrap/js/bootstrap.min.js"></script>
</body>

</html>