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
				<td width="554" height="205" align="left"><img src="../imagens/dejavu_new.jpg" alt="WFO" width="548" height="205"></td>
			  </tr>
			</table>
          </div>
			<div id="container">
				<div id="submenu">
				      <h3><img src="../imagens/dejavu_barra.gif" width="219" height="30"></h3>
					  <ul>
						  <li><a href="dejavu.php">What is it?</a></li>
						  <li><a href="dejavu_how.php">What can be done?</a></li>
						  <li><a href="dejavu_apps.php">Applications</a></li>
						  <li><a href="dejavu_cases.php" class="submenuOn">Case</a></li>
					  </ul>
			  </div>
				<div id="conteudo">
					<div id="coluna1">
						<h1 class="style1">Case - IBOPE Brazil </h1>
						<p>The Brazilian Institute of Public Opinion and Statistics - IBOPE - supplies   the largest collection of information about the Brazilian and Latin American   markets. The IBOPE Group is a Brazilian multinational composed of 52 companies,   employing over 2.800 professionals and acting&nbsp;in&nbsp;16 countries.</p><br>
						<p>Company has a service to verify if a particular ad was viewed on tv at the   correct time and date. At first, this check was a manual process made by   contractors, using images pre-recorded in VCR&rsquo;s. Cost problems, as well as   demanding time, defines electronic checking mandatory.</p><br>
						<p>The solution: Video recognition by comparison through a database of 20,000   ads. A machine running VFP, takes 4 minutes to compare pre-recorded video blocks   (30&rsquo; blocks) with the full database of ads. The engine was integrated to another   proprietary tool that creates reports and alerts.</p><br>
						<p>Ibope uses the engine since 2005 with full success.</p><br>
						<p>&nbsp;</p>
					</div>
					<div id="coluna2">
						<h2>dejaVu</h2>
						<p>The Video Fingerprint software based on content management.</p>
						<p>Click <a href="#">here</a> for pdf.</p>
						<br>
						<h2>VFP</h2>
						<p>Video Fingerprint focused on company secutiry.</p>
						<p>Click <a href="#">here</a> for pdf.</p>
						<br>
						<h2>Want to know more?</h2>
						<p>Click <a href="#">here</a> to see all Averone products or get in Touch with us.</p>
					</div>
				</div>
			</div>
			<div id="rodape">
				Todos os direitos reservados &reg; Averone.com.br</div>
			</div>
		</td>
  </tr>
</table>
</body>
</html>
