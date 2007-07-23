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
				<td width="554" height="205" align="left"><img src="../imagens/wfo_new.jpg" alt="WFO" width="548" height="205"></td>
			  </tr>
			</table>
          </div>
			<div id="container">
				<div id="submenu">
				      <h3><img src="../imagens/wfo_barra.gif" width="219" height="30"></h3>
					  <ul>
						  <li><a href="wfo.php" class="submenuOn">What is it?</a></li>
						  <li><a href="wfo_how.php">What can be done?</a></li>
						  <li><a href="wfo_apps.php">Applications</a></li>
						  <li><a href="wfo_cases.php">Case</a></li>
					  </ul>		      </div>
				<div id="conteudo">
					<div id="coluna1">
					  <h1 class="style1">What is it?  </h1>
					  <p>Com a abertura de mercado, a competi&ccedil;&atilde;o das empresas nacionais passou a ser com   as multinacionais. Margens de lucros apertadas, pre&ccedil;os pressionados, grandes   volumes, escala... Todos estes temas passaram a ser pauta do dia em qualquer empresa.<BR>
					    <BR>
					    A competi&ccedil;&atilde;o exarcebada dos dias de hoje, leva   as empresas a buscarem redu&ccedil;&otilde;es de custos a qualquer pre&ccedil;o. Paradoxalmente, &eacute;   muito pouco divulgado e conhecido, no Brasil, um conjunto de m&eacute;todos e algoritmos   conhecidos por <A onClick="return top.js.OpenExtLink(window,event,this)" href="http://en.wikipedia.org/wiki/Management_science" target="_blank">Management   Science</A>, largamente utilizado nos pa&iacute;ses desenvolvidos para tal fim.<BR>
					    <BR>
					    Estes   m&eacute;todos, fortemente baseados em algoritmos matem&aacute;ticos, podem gerar economias   significativas na opera&ccedil;&atilde;o de uma empresa. <BR>
					    <BR>
				        A equipe de servi&ccedil;os profissionais da Averone est&aacute; preparada para modelar  e/ou desenvolver solu&ccedil;&otilde;es para maximizar seus lucros, minimizar   seus custos, montar ferramentas de an&aacute;lise de decis&otilde;es, enfim, otimizar suas   opera&ccedil;&otilde;es. <a href="javascript:popupContato();">Entre em contato</a> e descubra como podemos ajud&aacute;-lo.</p>
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
