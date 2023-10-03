<?php
  session_start();
  if(!isset($_SESSION['autorizado'])){
    $_SESSION['autorizado']='no';
  }
?>
<!doctype html>
<html lang="es">
   <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio</title>
    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/movistar.png">
    <!-- Archivos a incluir -->
    <?php include('inc/menu.php'); 

    // Mensaje al usuario
    $mensaje = 'Ingrese sus datos';
        if(isset($_GET['mensaje'])){
          if($_GET['mensaje']=='uno'){$mensaje = 'El usuario ya existe en la base';}
          if($_GET['mensaje']=='dos'){$mensaje = 'La dirección de correo es inválida';}
          if($_GET['mensaje']=='tres'){$mensaje = 'Los datos son incorrectos';}
        }


    ?>      
  </head>

  <body class="container">
    <!-- Menú de navegación -->
    <?php menu(); ?>
    <!-- Título de la página -->
    <div class="alert alert-primary" role="alert">
        <h3 class="text-center fst-italic">Curso Full Stack Fundación</h3>
    </div>

    <!-- Estructura que verifica si tiene acceso autorizado -->
    <div class="container">
      <div class="row">
        <div class="col-4"></div>
        <div class="col-4">

          <?php
            if($_SESSION['autorizado']=='no'){
          ?>   
            <br>
            <legend>Formulario de ingreso</legend>
            <form action="login.php" method="post">
               <div class="form-group">
                  <label for="user">Ingrese su usuario</label>
                  <input required type="text" id="user" name="user" class="form-control">
               </div> 
               <div class="form-group">
                  <label for="pass">Ingrese su clave</label>
                  <input required type="password" id="pass" name="pass" class="form-control">
               </div>
               <br> 
               <button class="btn btn-success container-fluid">Ingresar</button>               
            </form>

            <div class="row">
               <div class="col-6 text-center"><a href="registro.php">Registrarse</a></div>
               <div class="col-6 text-center"><a href="#">Olvidé mi clave</a></div> 
            </div>
              <br>
            <div class="alert alert-warning text-center" role="alert">
              <?php echo $mensaje;?>
            </div>            
            
          <?php      
            }else echo "<h1>Le damos la bienvenida.</h1>"
          ?>

        </div>
        <div class="col-4"></div>
      </div>
    </div>
    



    <!-- JS de Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>