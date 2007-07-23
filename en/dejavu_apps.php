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
				<td width="554" height="205" align="left"><img src="../imagens/dejavu.jpg" alt="WFO" width="548" height="205"></td>
			  </tr>
			</table>
          </div>
			<div id="container">
				<div id="submenu">
				      <h3><img src="../imagens/dejavu_barra.gif" width="219" height="30"></h3>
					  <ul>
						  <li><a href="dejavu.php">What is it?</a></li>
						  <li><a href="dejavu_how.php">What can be done?</a></li>
						  <li><a href="dejavu_apps.php" class="submenuOn">Applications</a></li>
						  <li><a href="dejavu_cases.php">Case</a></li>
					  </ul>
			  </div>
				<div id="conteudo">
					<div id="coluna1">
						<h1 class="style1">Applications</h1>
						<p>Many companies and products can have benefits with the use of Averone Fingerprint Solution:</p>
						<br>
						<ul>
						  <li><p>Content Providers: avoiding the non-authorized use of its intellectual property;</p></li>
						  <li><p>Content Collaboration Systems: filtering the content uploaded by its users, avoiding legal problems with the exhibition of copyrighted products;</p></li>
						  <li><p>Storage Systems: identifying videos, duplicates, categorizing them and identifying its content;</p></li>
						  <li><p>Security Systems: identifying videos in video survaillence systems, helping to find immovable objects in a period of time, identifying faces, etc.</p></li>
						</ul>
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
