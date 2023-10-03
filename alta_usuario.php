<!doctype html>
<html lang="es">
   <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alta</title>
    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/movistar.png">
    <!-- Archivos a incluir -->
    <?php 
        include('inc/menu.php'); 
        include('inc/conexion.php');

        // Mensajes al usuario
        $mensaje = 'Ingrese los nuevos datos';
        if(isset($_GET['mensaje'])){
            if($_GET['mensaje']=='uno'){$mensaje = 'El usuario ya existe en la base';}
        }





    ?>
  </head>
  <body class="container">
    <!-- Menú de navegación -->
    <?php menu(); ?>
    <!-- Título de la página -->
    <div class="alert alert-primary" role="alert">
        <h3 class="text-center fst-italic">Agregar nuevo usuario</h3>
    </div>
    <br>

    <!-- Formulario -->
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">

                <form action="alta_usuario_sql.php" method="post">
                    <div class="form-group">
                        <label for="usuario" style="color:blue" class="font-weight-bold">Ingrese el usuario</label>
                        <input required type="text" id="usuario" name="usuario" placeholder="Ingrese un nuevo usuario" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="clave" style="color:blue" class="font-weight-bold">Ingrese la clave</label>
                        <input required type="password" id="clave" name="clave" placeholder="Ingrese una clave" class="form-control">
                    </div>    
                    <br>
                    <div class="form-group">
                        <label for="rol" style="color:blue" class="font-weight-bold">Ingrese el perfil</label>
                        <input required type="text" id="rol" name="rol" placeholder="Ingrese el rol del usuario" class="form-control">
                    </div> 
                    <br>
                    
                    <button type="submit" class="btn btn-primary container-fluid">Cargar registro</button>

                </form>
                <br>
                <?php echo $mensaje; ?>                

            </div>
            <div class="col-3"></div>
        </div>
    </div>



    <!-- JS de Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>