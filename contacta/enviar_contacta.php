<?php
// Textos
$strTexto1 = "Su consulta o petición se ha enviado correctamente.<br><br>En breve nos pondremos en contacto con usted.";
$strTexto2 = "Por problemas técnicos no ha sido posible enviar la consulta.<br><br>Disculpa las molestias.";
// ---------------------------------------------------------------------------
// Recogiendo del formulario
$strNombre = $_POST["txt_nombre"];
$strEmpresa = $_POST["txt_empresa"];
if ($strEmpresa == "") {
	$strEmpresa = "No indicada";
}
$strTel = $_POST["txt_tel"];
$strEmail = $_POST["txt_email"];
$strMotivo = $_POST["sel_motivo"];
$strConsulta = $_POST["txa_consulta"];
// Cuerpo del mensaje
$str_cos = "Nombre: " . $strNombre . chr(10);
$str_cos .= "Empresa: " . $strEmpresa . chr(10);
$str_cos .= "Teléfono: " . $strTel . chr(10);
$str_cos .= "Email: " . $strEmail . chr(10) . chr(10);
$str_cos .= $strMotivo .": " . $strConsulta . chr(10);
// ---------------------------------------------------------------------------
// Enviando el mail
$destinatario = "ismael@ismaelnavarro.es";

$remitente = "Web itassessors.es <noreply@itassessors.es>";

$asunto = $strMotivo;

$cabeceras = "From:" . $remitente;

$int_mail_control = mail($destinatario, $asunto, $str_cos, $cabeceras);

// ---------------------------------------------------------------------------
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Test</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="estilos.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<br>
<table width="684" border="0" cellspacing="0" cellpadding="0">
<tr>
<td align="center"><br> <br>
<?
if (intval($int_mail_control)==0){
echo $strTexto2;
}else{
echo $strTexto1;
}
?>
</td>
</tr>
</table>
<br>
</body>
</html>