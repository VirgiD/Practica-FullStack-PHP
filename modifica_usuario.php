<!doctype html>
<html lang="es">
   <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificación</title>
    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/movistar.png">
    <!-- Archivos a incluir -->
    <?php 
        include('inc/menu.php'); 
        include('inc/conexion.php');

        // Recibo el GET
        $usuario = $_GET['usuario'];
        $clave = $_GET['clave'];
        $rol = $_GET['rol'];


    ?>
  </head>
  <body class="container">
    <!-- Menú de navegación -->
    <?php menu(); ?>
    <!-- Título de la página -->
    <div class="alert alert-primary" role="alert">
        <h3 class="text-center fst-italic">Modificar datos de usuario</h3>
    </div>
    <br>

    <!-- Formulario -->
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">

                <form action="modifica_usuario_sql.php" method="post">
                    <div class="form-group">
                        <label for="usuario" style="color:blue" class="font-weight-bold">Usuario</label>
                        <input readonly type="text" id="usuario" name="usuario" class="form-control" value="<?php echo $usuario; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="clave" style="color:blue" class="font-weight-bold">Clave</label>
                        <input type="text" id="clave" name="clave" class="form-control" value="<?php echo $clave; ?>">
                    </div>    
                    <br>
                    <div class="form-group">
                        <label for="rol" style="color:blue" class="font-weight-bold">Perfil</label>
                        <input type="text" id="rol" name="rol" class="form-control" value="<?php echo $rol; ?>">
                    </div> 
                    <br>

                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary container-fluid" name="boton" value=1>Modificar</button>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-danger container-fluid" name="boton" value=0>Cancelar</button>
                        </div>
                    </div>
                    
                    
                    

                </form>             

            </div>
            <div class="col-3"></div>
        </div>
    </div>



    <!-- JS de Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>