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
    <td align="center" valign="top" style="background:url(../imagens/base_menu.jpg) no-repeat top right">
	
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
				<td width="554" align="left"><img src="../imagens/topo_averone.jpg" alt="WFO 2.0" width="548" height="205" /></td>
			  </tr>
			</table>
          </div>
			<div id="container">
				<div id="submenu">
				      <h3><img src="../imagens/investidores.gif" width="219" height="30"></h3>
		      </div>
			  <div id="conteudo">
					  <h1 class="style1">Investidores</h1>
			          <p>A Averone &eacute; uma empresa fundada, dirigida e 100% controlada pelos seus atuais   s&oacute;cios. Atualmente ela est&aacute; negociando a primeira rodada de investimento.</p>
			  </div>
			</div>
			<div id="rodape">
				Todos os direitos reservados ® Averone.com.br</div>
		</div>	</td>
  </tr>
</table>
</body>
</html>
