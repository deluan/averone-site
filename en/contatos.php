<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Averone</title>
<link href="../css/estilos.css" rel="stylesheet" type="text/css">
<script src="../js/funcoes.js" language="javascript"></script>
<script type="text/javascript" src="http://download.skype.com/share/skypebuttons/js/skypeCheck.js"></script>
<script type="text/javascript">
function IEHoverPseudo() {

	var navItems = document.getElementById("primary-nav").getElementsByTagName("li");
	
	for (var i=0; i<navItems.length; i++) {
		if(navItems[i].className == "menuparent") {
			navItems[i].onmouseover=function() { this.className += " over"; }
			navItems[i].onmouseout=function() { this.className = "menuparent"; }
		}
	}

}
window.onload = IEHoverPseudo;
</script>

</head>

<body topmargin="0" leftmargin="0" bottommargin="0" rightmargin="0">
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top">
	
		<div id="site">
			<div id="titulo">
				<div id="logo">
					<img src="../imagens/logo.gif" width="219" height="81" alt="Averone" /></div>
				<div id="idioma"> 
					<? include("idioma.php"); ?>
			  </div>
			</div>
		  <div id="topo">
		    <table width="775" border="0" cellspacing="0" cellpadding="0">
			  <tr>
				<td width="221" align="left" style="background:url(../imagens/base_menu.jpg) no-repeat top right">
				<? include("menu.php"); ?>
				</td>
				<td width="554" align="left"><img src="../imagens/topo_averone_en.jpg" alt="WFO 2.0" width="548" height="205" /></td>
			  </tr>
			</table>
          </div>
			<div id="container">
			  <div id="submenu">
			        <p style="margin-top:15px; font-weight:normal; padding-right:5px; text-align:center">Fill in the form or use one of our directions to get in touch.</p>
			        <p style="margin-top:15px; font-weight:normal; padding-right:5px; text-align:center">Address: Rua D. Pedro I, n&ordm; 9<br>
			          Petr&oacute;polis - RJ - CEP: 25610-020</p>
			        <p style="margin-top:15px; font-weight:normal; padding-right:5px; text-align:center">Skype: <a href="skype:averonetec?call"><img src="http://mystatus.skype.com/mediumicon/averonetec" alt="Meu Status" width="26" height="26" border="0" align="absmiddle" style="border: none;" /></a><br>
		            <span style="margin-top:15px; font-weight:normal; padding-right:5px;">(5524)	2237-1839</span></p>
			        <p style="margin-top:15px; font-weight:normal; padding-right:5px; text-align:center">E-mail:<br>
	            atendimento@averone.com.br			                            </p>
			  </div>
				<div id="conteudo">
					  <h1>Contatos</h1>
					  <form name="form1" method="post" id="form1" action="enviaEmail.php" onSubmit="return validaContato(this)">
					    <table width="100%" border="0" cellspacing="0" cellpadding="4">
                          <tr>
                            <td width="24%" align="right" class="label"><span class="campoRequerido">*</span>name</td>
                            <td width="48%"><input name="nome" type="text" class="formulario" id="nome" style="width:250px;"></td>
                            <td width="28%">&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="right" class="label"><span class="campoRequerido">*</span>e-mail</td>
                            <td><input name="email" type="text" class="formulario" id="email" style="width:250px;"></td>
                            <td>&nbsp;</td>
                          </tr>
                          <tr>
                            <td align="right" valign="top" class="label"><span class="campoRequerido">*</span>message</td>
                            <td><textarea name="mensagem" class="formulario" id="mensagem" style="width:250px; height:100px;"></textarea></td>
                            <td align="left" valign="bottom"><input type="image" name="imageField" src="../imagens/bt_enviar.gif"></td>
                          </tr>
                        </table>
			      </form>
			    </div>
			</div>
			<div id="rodape">
				Todos os direitos reservados ® Averone.com.br			</div>
		</div>	</td>
  </tr>
</table>
</body>
</html>
