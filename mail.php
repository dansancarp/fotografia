<?php
$para  = 'dansan0012@gmail.com';
 
// Asunto
$titulo = 'Consulta fotografica';
 
// Cuerpo o mensaje
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$mensaje=$_POST['mensaje'];

$mensaje = '
<html>
<head>
  <title>Consulta fotografica</title>
</head>
<body>
  <p>Consulta fotografica</p>
  <table>
    <tr>
      <th>Tema</th><th>Valor</th>
    </tr>
    <tr>
      <td>Nombre</td><td>$nombre</td>
    </tr>
    <tr>
      <td>Email</td><td>$email</td>
    </tr>
    <tr>
      <td>Mensaje</td><td>$mensaje</td>
    </tr>
  </table>
</body>
</html>
';
 
// Cabecera que especifica que es un HMTL
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
 
// Cabeceras adicionales
$cabeceras .= 'From: Recordatorio <tarifas@example.com>' . "\r\n";
$cabeceras .= 'Cc: archivotarifas@example.com' . "\r\n";
$cabeceras .= 'Bcc: copiaoculta@example.com' . "\r\n";
 
// enviamos el correo!
$aceptado = mail($para, $titulo, $mensaje, $cabeceras);
if($aceptado)
  header("Location: contacto2.html");
else
  header("Location: error.html");
die();
?>