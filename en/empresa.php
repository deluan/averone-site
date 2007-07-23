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
					<? include("idioma.php") ?>
			  </div>
			</div>
		  <div id="topo">
		    <table width="775" border="0" cellspacing="0" cellpadding="0">
			  <tr>
				<td width="221" align="left" style="background:url(../imagens/base_menu.jpg) no-repeat top right">
				<? include("menu.php") ?>
				</td>
				<td width="554" align="left"><img src="../imagens/topo_averone_en.jpg" alt="WFO 2.0" width="548" height="205" /></td>
			  </tr>
			</table>
          </div>
			<div id="container">
				<div id="submenu">
				      <h3><img src="../imagens/intranet.gif" width="219" height="30"></h3>
					  <form name="login_form" method="post" action="http://mantis.averone.com.br/login.php">
						  <table width="100%" border="0" cellspacing="0" cellpadding="5">
						  <tr>
							<td width="28%" align="right"><p>login</p></td>
							<td width="50%"><input type="text" name="username" size="32" maxlength="32" style="width:100px;"/></td>
							<td width="22%">&nbsp;</td>
						  </tr>
						  <tr>
							<td align="right"><p>senha</p></td>
							<td><input type="password" name="password" size="16" maxlength="32" style="width:100px;" ></td>
							<td><input type="submit" class="button" value="" style="background-image:url(../imagens/bt_ok.jpg); border:none; background-repeat:no-repeat; width: 25px; height:25px;"></td>
						  </tr>
						</table>
		         	  </form>
			    </div>
				<div id="conteudo">
					  <h1 class="style1">Company</h1>
					  <p>Averone is a technology company focused in operational optimization. Since 2003, we operate in the fields of Management Science and Operational Research.<BR>
					    <BR>
					    Management Science is a discipline based on mathematics and other analytical tools, used to help companies to take the best decision in its business. Sometimes called as operational reasearch, Management Science has its diferentiation in its purpose: business aplications instead of academical aplications.<BR>
					    <BR>
				      Our professionals, some with international background, are specializeds in statistical analysis and mathematics. They are qualified to build mathematics engines to answer questions as distincts as the optimization os quemical compositions and use of benefits, such as transportation and health.</p>
			  </div>
			</div>
			<div id="rodape">
				Todos os direitos reservados ® Averone.com.br</div>
		</div>	</td>
  </tr>
</table>
</body>
</html>