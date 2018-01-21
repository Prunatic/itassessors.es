<?php
$strAlert1 = "Por favor, rellene correctamente todos los campos.";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Test</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="estilos.css" rel="stylesheet" type="text/css">
<script language="JavaScript" type="text/javascript">
// ---------------------------------------------------------------------------
function is_email(string) {
  var regexp = /^[0-9a-z\-\_]+(.[0-9a-z\-\_]+)*@[0-9a-z\-]+(.[0-9a-z\-]+)*\.[0-9a-z][0-9a-z]+$/;
  return regexp.test(string);
}
function validar(f){
	if (f.txt_nombre.value == ""){
		alert('<?php echo $strAlert1?>');
		f.txt_nombre.focus();
		return false;
	}
	else if (f.txt_tel.value == ""){
		alert('<?php echo $strAlert1?>');
    	f.txt_tel.focus();
		return false;
	}
	else if (!is_email(f.txt_email.value)){
		alert('<?php echo $strAlert1?>');
    	f.txt_email.focus();
		return false;
	}
	else if (f.sel_motivo.value == 0){
		alert('<?php echo $strAlert1?>');
    	f.sel_motivo.focus();
		return false;
	}
	else if (f.txa_consulta.value == ""){
		alert('<?php echo $strAlert1?>');
    	f.txa_consulta.focus();
		return false;
	}
	return true;
}
// ---------------------------------------------------------------------------
</script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<br>
<table width="75%" border="0" cellspacing="0" cellpadding="0">
  <form name="form_contacto" method="post" action="enviar_contacta_test.php" onSubmit="return validar(this);">
    <tr> 
      <td height="25" align="right"><span class="fuente2">(*)</span><b> Nombre 
        y apellidos:</b></td>
      <td width="15">&nbsp;</td>
      <td width="68%"><input name="txt_nombre" type="text" id="txt_nombre" size="40"></td>
    </tr>
    <tr> 
      <td height="25" align="right"><b>Empresa:</b></td>
      <td>&nbsp;</td>
      <td><input name="txt_empresa" type="text" id="txt_empresa" size="40"></td>
    </tr>
    <tr> 
      <td height="25" align="right"><span class="fuente2">(*)</span> <b>Tel&eacute;fono:</b></td>
      <td>&nbsp;</td>
      <td><input name="txt_tel" type="text" id="txt_tel" size="40"></td>
    </tr>
    <tr> 
      <td height="25" align="right"><span class="fuente2">(*)</span> <b>E-mail:</b></td>
      <td>&nbsp;</td>
      <td><input name="txt_email" type="text" id="txt_email" size="40"></td>
    </tr>
    <tr> 
      <td height="25" align="right"><span class="fuente2">(*)</span> <b>Motivo:</b></td>
      <td>&nbsp;</td>
      <td><select name="sel_motivo" id="sel_motivo">
          <option value="0" selected>Seleccionar...</option>
          <option value="Consulta">Consulta</option>
          <option value="Petición del presupuesto">Petición del presupuesto</option>
        </select></td>
    </tr>
    <tr> 
      <td align="right"><span class="fuente2">(*)</span> <b>Consulta o petici&oacute;n:</b></td>
      <td>&nbsp;</td>
      <td><textarea name="txa_consulta" cols="37" rows="4" id="txa_consulta"></textarea></td>
    </tr>
    <tr> 
      <td height="30" align="right">&nbsp; </td>
      <td>&nbsp;</td>
      <td valign="bottom" class="fuente2"><input name="Submit" type="submit" class="enviar" value="Enviar">
        (*) campos obligatorios</td>
    </tr>
  </form>
</table>
<br>
</body>
</html>
