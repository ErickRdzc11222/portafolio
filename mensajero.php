<?php
if (isset($_POST['submit'])){

    $para = "182508@upslp.edu.mx";
    $asunto = "Enviando Iformación";
    $nombre = $_POST['nombre'];
    $correo = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $headers = "MIME-Version: 1.0\r\n";
    $headers = "Content - type: text/html; charset=utf8\r\n";
    $cuerpo = " Enviado por: $nombre\n E-mail: $correo\n Mensaje: $mensaje\n";

    $bool = mail($para, $asunto, $cuerpo, $headers);
}
else{
    echo "Algo ocurrio mal... :(";
}
?>