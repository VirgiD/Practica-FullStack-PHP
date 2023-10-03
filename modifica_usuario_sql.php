<?php
    // Conexión a la BDD
    include("inc/conexion.php");

    // Recuperamos los datos del POST
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $rol = $_POST['rol'];
    $boton = $_POST['boton'];

    // Verificamos el valor del boton
    if($boton==0){
        // Se arrepiente de la baja
        header("Location: abm.php");
    }else{
        // Procedemos a borrar 
        $modifica = "
            update usuario 
            set usuario='$usuario',clave='$clave',rol='$rol'
            where usuario = '$usuario'
            ";
        $resultado_modifica = mysqli_query($conexion,$modifica);
        header("Location: abm.php");
    }

?>