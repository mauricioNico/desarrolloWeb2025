<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepción de la información</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
    <link rel="shortcut icon" href="../imagenes/favicon.ico" type="image/x-icon">
</head>
<body>
    
<?php
$to = "mlaurizi922@gmail.com";
$subject = "Mail desde el formulario";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$comentarios = $_POST["consulta"];
//$menu = $_POST['menu'];
$message = "
<html>
<head>
<title>HTML</title>
</head>
<body>
<h1>Información del formulario</h1>
<p>Nombre: $nombre </p> 
<p>Email: $email </p> 
<p>Comentarios: $comentarios </p> 
</body>
</html>";?>
<h1><?php
 echo 'Gracias por comunicarse con nosotros';?></h1><?php
mail($to, $subject, $message, $headers);
?>
<p><a href="../index.html">Volver</a></p>
</body></html>