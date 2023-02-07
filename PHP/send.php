<?php 

$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];

$destinatario = "info@andreoutumuro.com";
$cuerpo = '
    <html> 
        <head> 
            <title>Contactaron contigo a través de andreotumuro.com</title> 
        </head>
        <body> 
            <h1>SolicitudE de contacto.  </h1>
            <p> 
              A persoa:  '.$nombre . ' <br>
              Deixouche a seguinte mensaxe: '.$mensaje.' 
            </p> 
        </body>
    </html>
';
//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=UTF8\r\n"; 

//dirección del remitente

$headers .= "FROM: $nombre <$correo>\r\n";
mail($destinatario,$asunto,$cuerpo,$headers);

echo "Correo enviado"; 

header('Location:contacto.html');
?> 
