<?php 
$txtemail = $_POST['txtemail'];
$txtservicio = $_POST['txtservicio'];

// Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
$headers = "From: $nombre <$email>\r\n";  
$headers .= "X-Mailer: PHP5\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$para = 'r.armas@tuservicioaduanero.com';
$titulo = 'Solicitud de Información';
$header="From: $txtemail\n";
$msjCorreo = "

Cuerpo del mensaje:

Datos del Cliente: 
Email del Cliente: $txtemail\n Servicio Seleccionado: $txtservicio\n";  

if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Nos pondremos en contacto con usted a la brevedad');
window.location.href = 'http://www.google.com.ve';
</script>";
} else {
echo 'Falló el envio';
}
}
?>