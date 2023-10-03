<?php
        // PASO 1) Datos de conexión
        $usuario = 'root';
        $clave = '';
        $servidor = 'localhost';
        $basededatos = 'tp1';

        // PASO 2) Creamos la conexión
        $conexion = mysqli_connect($servidor,$usuario,$clave);

        // PASO 3) Conecto con la BDD
        $db = mysqli_select_db($conexion,$basededatos);

?>