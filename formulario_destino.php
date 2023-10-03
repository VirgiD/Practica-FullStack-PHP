<?php
    // Recupero los valores enviados en el formulario.
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $clave = $_POST['pass'];

    if(isset($_POST['leng1'])){
        $lenguaje1 = $_POST['leng1'];
    }else $lenguaje1 = '';

    if(isset($_POST['leng2'])){
        $lenguaje2 = $_POST['leng2'];
    }else $lenguaje2 = '';

    if(isset($_POST['leng3'])){
        $lenguaje3 = $_POST['leng3'];
    }else $lenguaje3 = '';

    if(isset($_POST['nivel'])){
        $nivel = $_POST['nivel'];
    }else $nivel = 'El nivel de idioma no fue informado.';

    $selector = $_POST['selector1'];


    // Muestro los valores recuperados por pantalla.
    echo 'Nombre recibido: '.$nombre.'<br>';
    echo 'Apellido recibido: '.$apellido.'<br>';
    echo 'Clave recibida: '.$clave.'<br>';

    echo 'Lenguajes favoritos: '.$lenguaje1.' '.$lenguaje2.' '.$lenguaje3.'<br>';

    echo 'Nivel de inglés: '.$nivel.'<br>';

    echo 'Motivo de contacto: '.$selector.'<br>';




?>