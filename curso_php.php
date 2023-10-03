<?php
    // Iniciar el manejo de sesiones
    session_id('Vamos-Chaca');
    session_start();

    $a = session_id();
    echo 'Tu ID de sesión es: '.$a;
?>