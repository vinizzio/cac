<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'vinizzio@hotmail.com,die.bon@hotmail.com,jcarlos.cadena.opel65@hotmail.com';
$titulo = 'Pagina WEB Cotopaxi Automovil Club - Contactos';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado exitosamente...');
window.location.href = 'http://www.Cotopaxiautomovilclub.com';
</script>";
} else {
echo 'Falló el envio';
}
}
?>