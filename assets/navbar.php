<div class="navbar navbar-expand-md navbar-dark bg-dark ">
    <a href="index.php" class="navbar-brand"> <img src="img/logo.png" style="width: 40px; margin: 0 20px;">El barquito</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dos" aria-controls="dos" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id=dos>
        <ul class="navbar-nav nav-pills container-fluid flex-column flex-sm-row">
            <style>
                .blanco {
                    color: white !important;
                }
            </style>
            
            <?php
            session_start();

            if (isset($_SESSION['usr_nom']) && $_SESSION['rol'] == 1) {
                echo '<li class="nav-item"><a href="usuarios.php" class="nav-link blanco">Usuarios</a></li>';
            } else {
                echo '<li class="nav-item"><a href="index.php" class="nav-link blanco">Inicio</a></li>';
            }

            if (isset($_SESSION['usr_nom']) && $_SESSION['rol'] == 1) {
                echo '<li class="nav-item"><a href="pedidos.php" class="nav-link blanco">Pedidos</a></li>';
            } else {
                echo '<li class="nav-item"><a href="menu.php" class="nav-link blanco">Menu</a></li>';
            }

            ?>
            <?php
            if (isset($_SESSION['usr_nom']) && $_SESSION['rol'] == 1) {
                echo '<li class="nav-item"><a href="administrador.php" class="nav-link blanco">Administrar</a></li>';
            } else {
                echo '<li class="nav-item"><a href="AcercaDe.php" class="nav-link blanco">¿Quienes Somos?</a></li>';
            }


            ?>
            <?php
            if (isset($_SESSION['usr_nom']) && $_SESSION['rol'] == 1) {
                echo '';
            } else {
                echo '<li class="nav-item"><a href="contacto.php" class="nav-link blanco">Contactos</a></li>';
            }
            ?>
            
            
            <?php
            if (isset($_SESSION['usr_nom'])) {
                echo '<li class="nav-item"><a href="cerrarSesion.php" class="nav-link blanco">Cerrar sesion</a></li>';
            } else {
                echo '<li class="nav-item"><a href="registro.php" class="nav-link blanco">Registro</a></li>';
            }
            ?>
        </ul>
        <?php
        if (!isset($_SESSION['usr_nom'])) {
            echo '<ul class="navbar-nav nav-pills flex-column flex-sm-row">
            <li class="nav-item">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Iniciar Sesion</button>
            </li>
        </ul>';
        } else {
            echo '<p class="nav-link blanco">Bienvenido ' . $_SESSION['usr_nom'] . '</p>';
        }
        ?>
    </div>
</div>