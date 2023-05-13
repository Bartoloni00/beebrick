<?php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = "<h1>".$nombre."</h1>";
    $mensaje .="<hr />";
    $mensaje .= $_POST['mensaje'];

    $para ='bartoloniabraham@gmail.com';
    $asunto = 'mensaje desde la web';

    $headers = "Mime-version: 1.0;\r\n";
    $headers .= "Content-type: text/html; charset=utf-8;\r\n";
    $headers .= "From: $email;\r\n";
    $headers .= "To: ";
   /* $headers .= "Cc: "; esto manda una copia del mail a otro mail */

    mail( $para, $asunto, $mensaje, $headers);

    header("Location: index.html");
?>
