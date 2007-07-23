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
				<td width="554" align="left"><img src="../imagens/topo_averone.jpg" alt="WFO 2.0" width="548" height="205" /></td>
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
					  <h1 class="style1">Empresa</h1>
					  <p>A Averone &eacute; um empresa de tecnologia focada em otimiza&ccedil;&atilde;o operacional, baseada   em Management Science. <BR>
					    <BR>
					    MS &eacute; a disciplina que usa matem&aacute;tica, e outras   ferramentas anal&iacute;ticas, para ajudar as empresas a tomarem melhores decis&otilde;es de   neg&oacute;cio. Freq&uuml;entemente considerada sin&ocirc;nimo de pesquisa operacional, MS se   diferencia por ser mais voltada para aplica&ccedil;&otilde;es em neg&oacute;cios, ao inv&eacute;s de   aplica&ccedil;&otilde;es acad&ecirc;micas. <BR>
					    <BR>
				      Nossos profissionais, especialistas nacionais e   internacionais em an&aacute;lise estat&iacute;stica e matem&aacute;tica, est&atilde;o qualificados para a   estrutura&ccedil;&atilde;o de engines matem&aacute;ticos para  aplica&ccedil;&atilde;o em problemas operacionais   t&atilde;o distintos quanto otimiza&ccedil;&atilde;o de composi&ccedil;&otilde;es quimicas a tabelas de uso de   benef&iacute;cios como vale transporte.</p>
			  </div>
			</div>
			<div id="rodape">
				Todos os direitos reservados ® Averone.com.br</div>
		</div>	</td>
  </tr>
</table>
</body>
</html>
