<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Averone</title>
<link href="../css/estilos.css" rel="stylesheet" type="text/css">
<script src="../js/funcoes.js" language="javascript"></script>
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
				      <h3><img src="../imagens/oportunidades_en.gif" width="219" height="30"></h3>
		      </div>
				<div id="conteudo">
					  <h1 class="style1">Opportunities</h1>
					  <form action="enviaCurriculo.php" method="post" enctype="multipart/form-data" id="form1" name="form1">
					    <p>With business booming up, Averone is growing fast. How about you? Are you ready to grow with us?</p>
						  <p>&nbsp;</p>
						  <table width="100%">
						  	<tr>
								<td width="24%" align="right" class="label"><span class="campoRequerido">*</span>name:</td>
								<td width="76%"><input name="nome" type="text" class="formulario" id="nome" style="width: 250px;" /></td>
							</tr>
							<tr>
								<td align="right" class="label"><span class="campoRequerido">*</span>e-mail:</td>
								<td><input name="email" type="text" class="formulario" id="email" style="width: 250px;" /></td>
							</tr>
							<tr>
								<td align="right" class="label"><span class="campoRequerido">*</span>resume:</td>
							    <td><input name="arquivo" type="file" class="formulario" id="arquivo" style="width: 250px;" />
							    <a href="javascript: enviaFormCurriculo(document.form1)"><img src="../imagens/bt_ok.jpg" alt="Enviar" align="absmiddle" border="0"></a></td>
							</tr>
					    </table>
				  </form>
			  </div>
			</div>
			<div id="rodape">
				Todos os direitos reservados ® Averone.com.br</div>
		</div>	</td>
  </tr>
</table>
</body>
</html>
