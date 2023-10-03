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
    <title>Plantilla</title>
    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="img/movistar.png">
    <!-- Archivos a incluir -->
    <?php 
        include('inc/menu.php'); 
        include('inc/conexion.php');




        // Consultamos un valor
        $consulta1 = "select count(distinct usuario) as usuarios from usuario";
        $resultado1 = mysqli_query($conexion,$consulta1);
        while($fila = mysqli_fetch_assoc($resultado1)){
            $cantidad_usuarios = $fila['usuarios'];
        }

        // Consultamos un valor usando una variable
        $rolA = 'analista';

        $consulta2 = "select count(distinct usuario) as usuarios from usuario where rol = '$rolA' ";
        $resultado2 = mysqli_query($conexion,$consulta2);
        while($fila=mysqli_fetch_assoc($resultado2)){
            $q_analistas = $fila['usuarios'];
        }

        $rolA = 'administrador';

        $consulta3 = "select count(distinct usuario) as usuarios from usuario where rol = '$rolA' ";
        $resultado3 = mysqli_query($conexion,$consulta3);
        while($fila=mysqli_fetch_assoc($resultado3)){
            $q_admin = $fila['usuarios'];
        }

        // Volcado de datos en una tabla
        $consulta4 = "select distinct usuario,clave,rol from usuario";
        $resultado4 = mysqli_query($conexion,$consulta4);

    ?>

  </head>
  <body class="container">
    <!-- Menú de navegación -->
    <?php menu(); ?>
    <!-- Título de la página -->
    <div class="alert alert-primary" role="alert">
        <h3 class="text-center fst-italic">Práctica de ABM</h3>
    </div>

    <!-- Fila 1 -->
    <div class="container">
        <div class="row">
            <div class="col-3">
                <button type="button" class="btn btn-outline-success container-fluid text-start">Cantidad de usuarios: <?php echo $cantidad_usuarios; ?></button>
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-outline-success container-fluid text-start">Cantidad de analistas: <?php echo $q_analistas; ?></button>
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-outline-success container-fluid text-start">Cantidad de administradores: <?php echo $q_admin; ?></button>
            </div>
            <div class="col-3">
                <button type="button" class="btn btn-outline-danger container-fluid text-center"><a href="alta_usuario.php">Alta de usuario</a></button>
            </div>
        </div>
    </div>
    <br>    

    <!-- Fila 2 -->
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">

                <div class="table-responsive">
                    <table class="table table-bordered table-sm table-hover">
                        <thead>
                            <tr class="table-success text-center">
                                <td>Usuario</td><td>Clave</td><td>Perfil</td><td>Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($columna = mysqli_fetch_array($resultado4)){
                                    echo "<tr>";
                                        echo "<td>".$columna['usuario']."</td>";
                                        echo "<td>".$columna['clave']."</td>";
                                        echo "<td>".$columna['rol']."</td>";
                                        echo "<td>
                                                <a href='modifica_usuario.php?usuario=".$columna['usuario']."&clave=".$columna['clave']."&rol=".$columna['rol']."'>
                                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                                </svg>                                          
                                                </a>
                                                <a href='baja_usuario.php?usuario=".$columna['usuario']."&clave=".$columna['clave']."&rol=".$columna['rol']."'>
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
                                                        <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z'/>
                                                    </svg>                                         
                                                </a>
                                              </td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="col-3"></div>
        </div>
    </div>


    <!-- JS de Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>