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
        $baja = "delete from usuario where usuario='$usuario'";
        $resultado_baja = mysqli_query($conexion,$baja);
        header("Location: abm.php");
    }

?>