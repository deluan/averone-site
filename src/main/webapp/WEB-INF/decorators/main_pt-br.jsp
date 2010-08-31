<%@ taglib prefix="decorator" uri="http://www.opensymphony.com/sitemesh/decorator" %>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Content-Language" content="pt-br" />
		
		<meta name="ROBOTS" content="ALL" />
		<meta name="Copyright" content="Copia parcial permitida, caso a fonte seja informada de forma clara." />
		<meta name="description" content="Averone" />
		<meta name="keywords" content="Otimizacao, Management Science, Reconhecimento de Video, Modelos Matematicos, Workforce, Forca de trabalho, WFO, Video Fingerprint, direitos autorais, protecao dos direitos autorais, propriedade intelectual, java, flex, operations, research, pesquisa operacional, reducao de custos, otimizacao de recursos, workforce optimization, escala, funcionarios" />		<meta name="pragma" content="no-chache" />
		<meta name="Rating" content="General" />
		<meta name="revisit-after" content="10 Days" />
		<meta name="doc-class" content="Living Document" />
		<meta name="url" content="http://www.averone.com.br/" />
		
		<title>Averone <decorator:title default="" /></title>
		<link href="/css/estilos.css" rel="stylesheet" type="text/css" />
		<link rel="Shortcut Icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="icon" href="/favicon.ico" type="image/ico" />
		<script src="/js/funcoes.js" language="javascript" type="text/javascript" charset="utf-8"></script>
		<decorator:head />		
	</head>
	
	<body>
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td align="center" valign="top">
				<div id="site">
					<div id="titulo">
						<div id="logo">
							<img src="/imagens/logo.gif" width="219" height="81" alt="Averone" />
						</div>
						<div id="idioma"> 
							<p>
								<a href="/mudaIdioma.groovy?idioma=pt-br&amp;pag=<decorator:getProperty property="meta.pagina"/>">
									<img src="/imagens/brasil.gif" alt="Brasil" width="18" height="12" border="0" align="top"/> portugu&ecirc;s
								</a>
							</p>
							<p>
								<a href="../mudaIdioma.groovy?idioma=en&amp;pag=<decorator:getProperty property="meta.pagina" default="empresa.html"/>">
									<img src="/imagens/eua2.gif" alt="EUA" width="18" height="12" border="0" align="top"/> english
								</a>
							</p>							
						</div>
					</div>
					<div id="topo">
						<table width="775" border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td width="221" align="left" style="background:url(/imagens/base_menu.jpg) no-repeat top right">
								<ul id="primary-nav">
								  <li><a href="empresa.html">Empresa</a></li>
								  <li class="menuparent"><a href="#">Produtos</a> 
									<ul>
									  <li><a href="wfo.html">WFO</a></li>
									  <li><a href="dejavu.html">DejaVu</a></li>
									</ul>
								  </li>
								  <li><a href="servicos.html">Servi&ccedil;os</a> </li>
								  <li><a href="oportunidades.html">Oportunidades</a> </li>
								  <li><a href="investidores.html">Investidores</a> </li>
								  <li><a href="contatos.html">Contatos</a> </li>
								</ul>
							</td>
							<td width="554" align="left"><img src="/imagens/<decorator:getProperty property="meta.img_topo" default="topo_averone.jpg"/>" alt="Averone" width="548" height="205" /></td>						</tr>
						</table>
					</div>
					<div id="container">

	      	<decorator:body />

					</div>
					<div id="rodape">
						Todos os direitos reservados &reg; Averone.com.br
					</div>
				</div>
			</td>
		</tr>
		</table>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-2382675-1");
pageTracker._trackPageview();
} catch(err) {}</script>

	</body>
</html>
