<?php 
$txtnombre = $_POST['txtnombre'];
$txtemail = $_POST['txtemail'];
$txttelefono = $_POST['txttelefono'];
$txtasunto = $_POST['txtasunto'];
$txtmensaje = $_POST['txtmensaje'];

// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
$headers = "From: $nombre <$email>\r\n";  
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$para = 'r.armas@tuservicioaduanero.com';
$titulo = 'Formulario de Contacto';
$header="From: $txtasunto<$txtemail>\n";
$msjCorreo = "

Cuerpo del mensaje:

Datos del Cliente: 
Nombre del Cliente: $txtnombre\n Email del Cliente: $txtemail\n Telefono del Cliente: $txttelefono\n Asunto: $txtasunto\n Mensaje: $txtmensaje\n";  

if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert(' Gracias su mensaje se ha enviado con exito');
window.location.href = 'http://www.tuservicioaduanero.com';
</script>";
} else {
echo 'Falló el envio';
}
}
?>