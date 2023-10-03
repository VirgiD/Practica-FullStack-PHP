<?php
    session_start();
    if(!isset($_SESSION['autorizado']) or $_SESSION['autorizado']=='no'){
        header("location:index.php");
    }
?>
<!doctype html>
<html lang="es">
   <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/movistar.png">
    <!-- Archivos a incluir -->
    <?php include('inc/menu.php'); ?>
  </head>
  <body class="container">
    <!-- Menú de navegación -->
    <?php menu(); ?>
    <!-- Título de la página -->
    <div class="alert alert-primary" role="alert">
        <h3 class="text-center fst-italic">Práctica con formularios - <small>Bienvenido: <?php echo $_SESSION['nombre']; ?></small></h3>
    </div>

    <!-- Fila 1 -->
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3>Envío de datos al servidor.</h3>
            <br>
            <form action="formulario_destino.php" method="post">

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre de usuario</label>
                    <input type="text" placeholder="Ingrese su nombre" required class="form-control" id="nombre" name="nombre">
                </div>

                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido de usuario</label>
                    <input type="text" placeholder="Ingrese su apellido" class="form-control" id="apellido" name="apellido">
                </div>   
                
                <div class="mb-3">
                    <label for="clave" class="form-label">Clave de usuario</label>
                    <input type="password" placeholder="Ingrese su clave" class="form-control" id="pass" name="pass">
                </div>  
                
                <hr size="5px" color="blue">

                <h6>Seleccione sus lenguajes favoritos</h6>
                <div class="form-group">
                    <input type="checkbox" id="leng1" name="leng1" value="PHP">
                    <label for="leng1">Lenguaje PHP</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="leng2" name="leng2" value="JAVA">
                    <label for="leng2">Lenguaje JAVA</label>
                </div>  
                <div class="form-group">
                    <input type="checkbox" id="leng3" name="leng3" value="PYTHON">
                    <label for="leng3">Lenguaje PYTHON</label>
                </div>     
                
                <hr size="5px" color="red">

                <fieldset>
                    <legend>Seleccione su nivel de inglés.</legend>
                    <div class="form-group">
                        <label>
                            <input type="radio" id="nivel" name="nivel" value="Alto">Alto
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="radio" id="nivel" name="nivel" value="Intermedio">Intermedio
                        </label>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="radio" id="nivel" name="nivel" value="Basico">Básico
                        </label>
                    </div>                                        
                </fieldset>

                <hr size="5px" color="green">

                <div class="form-group">
                    <label for="selector1">Seleccione su motivo de contacto.</label>
                    <select name="selector1" id="selector1">
                        <option value="Consulta">Consulta</option>
                        <option value="Sugerencia">Sugerencia</option>
                        <option value="Queja">Queja</option>
                    </select>
                </div>
                
                <br><br><br>
                <button type="submit" class="btn btn-primary container-fluid">Enviar</button>

            </form>



        </div>
        <div class="col-3"></div>
    </div>

    <!-- JS de Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>