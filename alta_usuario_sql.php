<?php
    // Conexión a la BDD
    include("inc/conexion.php");

    // Recuperamos los datos del POST
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $rol = $_POST['rol'];

    // Verifico si el nuevo usuario ya existe en la BDD
    $consulta1 = "select count(distinct usuario) as nuevo from usuario where usuario = '$usuario' ";
    $resultado1 = mysqli_query($conexion,$consulta1);
    while($a=mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }

    // Estructura de desición
    if($existe==1){
        // Modifico la variable Mensaje y vuelvo al formulario
        header("Location: alta_usuario.php?mensaje=uno");
    }else{
        // El usuario NO existe, permito darlo de alta.
        $alta = "insert into usuario values('$usuario','$clave','$rol')";
        $resultado_alta = mysqli_query($conexion,$alta);
        header("Location: abm.php");
    }
?>