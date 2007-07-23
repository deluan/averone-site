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
				<? include("menu.php") ?>
				</td>
				<td width="554" height="205" align="left"><img src="../imagens/wfo_new_en.jpg" alt="WFO" width="548" height="205"></td>
			  </tr>
			</table>
          </div>
			<div id="container">
				<div id="submenu">
				      <h3><img src="../imagens/wfo_barra.gif" width="219" height="30"></h3>
					  <ul>
						  <li><a href="wfo.php">What is it?</a></li>
						  <li><a href="wfo_how.php">What can be done?</a></li>
						  <li><a href="wfo_apps.php">Applications</a></li>
						  <li><a href="wfo_cases.php" class="submenuOn">Case</a></li>
					  </ul>		      </div>
				<div id="conteudo">
					<div id="coluna1">
					  <h1 class="style1">Case </h1>
					  <p>Due to the hundreds or thousands of calculations an optimum solution demands, the design of a Resource Workflow in a call center is a difficult and repetitive task, impossible to be done in a optimized way without the support of a software tool.</p><br>
				      <p>On other hand, the skyrocket costs of a workflow solution makes impossible for a call center the adoption of a market solution. This kind of tool represents to the Call Center an important competitive differential based on costs.</p><br>
				      <p>Averone WFO 2.0 allows any Call Center, no matter its size, the use of such technology, with accessible costs and exceptional results. The system is all designed to be web based, so there are no need to invest in infrastructure or other software licenses.</p><br>
				      <p>The expectations of an average Call Center is to get savings of about 5% to 8% in the human resources costs per year.</p><br>
					  <p><a href="javascript:popupContato();">Click here to get in touch.</a></p><BR>
					  <p>&nbsp;</p>
					</div>
					<div id="coluna2">
						<h2> Lorem ipsum</h2>
						<p> Lorem <a href="#">ipsum</a> dolor sit amet, consectetuer adipiscing elit.</p>
						<br>
						<h2> Lorem ipsum</h2>
						<p>Lorem <a href="#">ipsum</a> dolor sit amet, consectetuer adipiscing elit.</p>
						<br>
						<h2> Lorem ipsum</h2>
						<p>Lorem <a href="#">ipsum</a> dolor sit amet, consectetuer adipiscing elit.</p>
				  </div>
				</div>
			</div>
			<div id="rodape">
				Todos os direitos reservados ® Averone.com.br</div>
		</div>	</td>
  </tr>
</table>
</body>
</html>
