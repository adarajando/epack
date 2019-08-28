<?php
    //Correo de Destino
    $destino = "adarajando@gmail.com";

    //Datos del remitente
    $remitente = $_POST["remitente"];
    $calle_remitente = $_POST["calle_remitente"];
    $colonia_remitente = $_POST["colonia_remitente"];
    $numero_remitente = $_POST["numero_remitente"];
    $cp_remitente = $_POST["cp_remitente"];
    $estado_remitente = $_POST["estado_remitente"];
    $municipio_remitente = $_POST["municipio_remitente"];
    $tel_remitente = $_POST["tel_remitente"];
    $correo = $_POST["correo"];

    //Datos del destinatario
    $destinatario = $_POST["destinatario"];
    $calle_destinatario = $_POST["calle_destinatario"];
    $colonia_destinatario = $_POST["colonia_destinatario"];
    $numero_destinatario = $_POST["numero_destinatario"];
    $cp_destinatario = $_POST["cp_destinatario"];
    $estado_destinatario = $_POST["estado_remitente"];
    $municipio_destinatario = $_POST["municipio_destinatario"];
    $tel_destinatario = $_POST["tel_destinatario"];

    //Datos del paquete
    $peso = $_POST["peso"];
    $alto = $_POST["alto"];
    $ancho = $_POST["ancho"];
    $largo = $_POST["largo"];
    $contenido = $_POST["contenido"];

    //Contenido del correo
    $mensaje = "Nombre Remitente: ".$remitente."\nCalle: ".$calle_remitente."\nColonia: ".$colonia_remitente."\nNo.: ".$numero_remitente."\nCódigo Postal: ".$cp_remitente."\nEstado: ".$estado_remitente."\nMunicipio: ".$municipio_remitente."\Tel o cel: ".$tel_remitente."\nCorreo electrónico: ".$correo."\nDestinatario".
    "\nCalle: ".$calle_destinatario."\nColonia: ".$colonia_destinatario."\nNo.: ".$numero_destinatario."\nCódigo Postal: ".$cp_destinatario."\nEstado: ".$estado_destinatario."\nMunicipio: ".$municipio_destinatario."\Tel o cel: ".$tel_destinatario.
    "\nPeso: ".$peso."\nalto: ".$alto."\nAncho: ".$ancho."\nLargo: ".$largo."\nContenido: ".$contenido;


    mail($destino,"Generar guía", $mensaje);

    header("Location:dhl.php");

?>