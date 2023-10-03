<?php
    function menu(){   ?>

        <!-- Menú de navegación -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Fundación</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="formulario.php">Formulario</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="abm.php">Práctica ABM</a>
                        </li>                        
                        <li class="nav-item">
                        <a class="nav-link" href="cerrar_sesion.php">Cerrár sesisón</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Página 3
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Página 3A</a></li>
                            <li><a class="dropdown-item" href="#">Página 3A</a></li>
                            <li><a class="dropdown-item" href="#">Página 3A</a></li>
                        </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>    

<?php
    }
?>