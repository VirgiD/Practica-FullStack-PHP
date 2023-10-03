<?php
    session_start();
    // Cargo la conexión a la BDD
    include('inc/conexion.php');

    // Recibo los valores
    $usuario = filter_var($_POST['user'],FILTER_SANITIZE_STRING);
    $clave = filter_var($_POST['pass'],FILTER_SANITIZE_STRING);

    // Verifico si existe el usuario en la BDD
    $consulta1 = "select count(usuario) as nuevo from users where usuario = '$usuario'";

    $resultado1 = mysqli_query($conexion,$consulta1);

    while($a = mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }

    // Estructura de decisión
    if($existe==0){
        // No existe el usuario en la BDD
        header('location: index.php?mensaje=tres');
    }else{
        // Existe el usuarioy leemos la clave
        $consulta_clave_bdd = "select clave from users where usuario = '$usuario'";
        $resultado_clave_bdd = mysqli_query($conexion,$consulta_clave_bdd);
        while($a = mysqli_fetch_assoc($resultado_clave_bdd)){
            $clave_bdd = $a['clave'];
        }
    }

    // Verificamos la clave
    if(password_verify($clave,$clave_bdd)){
        // Usuario y Clave correctos / Recupero los datos y autorizo
        $consulta_datos = "select usuario,nombre,apellido,rol from users where usuario = '$usuario'";
        $resultado_datos = mysqli_query($conexion,$consulta_datos);
        while($b = mysqli_fetch_array($resultado_datos)){
            $_SESSION['usuario'] = $b['usuario'];
            $_SESSION['nombre'] = $b['nombre'];
            $_SESSION['apellido'] = $b['apellido'];
            $_SESSION['rol'] = $b['rol'];
            // Cambio el valor de la autorización
            $_SESSION['autorizado']='si';
        }
        header('location:index.php');

    }else{
        // No coinciden las claves
        header('location:index.php?mensaje=dos');
    }

?>