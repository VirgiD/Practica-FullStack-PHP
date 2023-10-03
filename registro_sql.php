<?php
    // Incluir la conexión a la BDD
    include("inc/conexion.php");

    // Recibo los datos del formulario
    $usuario = filter_var($_POST['usuario'],FILTER_SANITIZE_STRING);
    $clave = filter_var($_POST['clave'],FILTER_SANITIZE_STRING);
    $nombre = filter_var($_POST['nombre'],FILTER_SANITIZE_STRING);
    $apellido = filter_var($_POST['apellido'],FILTER_SANITIZE_STRING);
    $correo = filter_var($_POST['correo'],FILTER_SANITIZE_EMAIL);

    // Verifico si el nuevo usuario ya existe en la BDD
    $consulta1 = "select count(distinct usuario) as nuevo from users where usuario = '$usuario' ";
    $resultado1 = mysqli_query($conexion,$consulta1);
    while($a=mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }

    // Encripto la clave
    $clave2 = password_hash($clave,PASSWORD_DEFAULT);

    // Estructura de desición
    if($existe==1){
        // Modifico la variable Mensaje y vuelvo al formulario
        header("Location: registro.php?mensaje=uno");
    }else{
        // El usuario NO existe, permito darlo de alta.
        $registro = "insert into users (usuario,clave,nombre,apellido,correo,fc_alta,estado,rol) values('$usuario','$clave2','$nombre','$apellido','$correo',now(),'Pendiente','Analista')";
        $resultado_registro = mysqli_query($conexion,$registro);
        header("Location: index.php");
    }   







?>