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
				      <h3><img src="../imagens/servicos_en.gif" width="219" height="30"></h3>
		      </div>
				<div id="conteudo">
					  <h1 class="style1">Services</h1>
					  <p>Averone Video Fingerprint solution is an engine focused in video recognition and categorization of videos. It can be used to find and compare videos on different repositories, inside a network or in the internet.</p><br>
					  <p>Compare videos on-the-fly  with a previous set of files, including search for non-allowed files and duplicated files. Can be used to find specific videos in a repository or directory.</p>
					  <p>&nbsp;</p>
					  <p>Read more ...</p>
				  <p>&nbsp;</p>
					  <p>To ask for a contact, click <a href="mailto:atendimento@averone.com.br">here</a>.</p>
					  <p>&nbsp;</p>
				</div>
			</div>
			<div id="rodape">
				Todos os direitos reservados ® Averone.com.br</div>
		</div>	</td>
  </tr>
</table>
</body>
</html>
