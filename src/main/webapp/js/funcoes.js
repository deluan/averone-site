//------------------------------------------
// Evento para ativer o menu em css
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
//------------------------------------------



String.prototype.trim = function()
{
	return this.replace(/^\s*/, "").replace(/\s*$/, "");
}

function EscreveFlash(piWid, piHei, psSrc, psId)
{
var strSwf;

strSwf = "<object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0\" id="+psId+" width="+piWid+" height="+piHei+">";
strSwf += "<param name=\"movie\" value=flash/"+psSrc+" />";
strSwf += "<param name=\"allowScriptAccess\" value=\"sameDomain\" />";
strSwf += "<param name=\"quality\" value=\"high\" />";
strSwf += "<param name=\"wmode\" value=\"transparent\" />";
strSwf += "<embed id="+psId+" name="+psId+" allowScriptAccess=\"sameDomain\" swLiveConnect=\"true\" src=flash/"+psSrc+" quality=\"high\" wmode=\"transparent\" pluginspage=\"http://www.macromedia.com/go/getflashplayer\" type=\"application/x-shockwave-flash\" width="+piWid+" height="+piHei+"></embed></object>";

this.document.write(strSwf);

}

function popupContato() {
	window.open("popupContato.html","","WIDTH=450,HEIGHT=300,noresize, scrolling=no");	
}

function validaPopup( form ) {
	if(form.empresa.value.length < 1) {
		alert("Todos os campos devem estar preenchidos para enviar o formulário."); 
		return false;
	}

	if(form.nome.value.length < 1) {
		alert("Todos os campos devem estar preenchidos para enviar o formulário."); 
		return false;
	}
	
	if(!mailValidation(form.email)) {
		alert("E-mail inválido."); 
		return false;
	}
	
	if(form.telefone.value.length < 1) {
		alert("Todos os campos devem estar preenchidos para enviar o formulário."); 
		return false;
	}
	
	return true;
}

function validaContato( form ) {
	if(form.nome.value.length < 1) {
		alert("Todos os campos devem estar preenchidos para enviar o formulário."); 
		return false;
	}
	
	if(!mailValidation(form.email)) {
		alert("E-mail inválido."); 
		return false;
	}
	
	if(form.mensagem.value.length < 1) {
		alert("Todos os campos devem estar preenchidos para enviar o formulário."); 
		return false;
	}
	
	return true;
}

function enviaFormCurriculo(form) {
	if(form.nome.value.length < 1) {
		alert("Todos os campos devem estar preenchidos para enviar o formulário."); 
	}
	else{
		if(!mailValidation(form.email)) {
			alert("E-mail inválido."); 
		}
		else
		{
			if(form.arquivo.value.lenght < 1)
				alert("Selecine um arquivo.");
			else
				return form.submit();
		}
	}
}

function mailValidation( mail ){
    var er = new RegExp(/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/);

	if(mail.value == "")
		return false;
  		
    if(!er.test(mail.value))
	    return false;
		
	return true;
}

function fechaPopup( janela ) {
	janela.close();	
}


// Cookie
var Cookie = {
  date: new Date(),
  set: function(name, content, days) {
	var exdate=new Date()
	exdate.setDate(exdate.getDate()+days)
    expires = exdate.toGMTString()+";";
	document.cookie = name + "=" + content + "; " + expires + "path=/";
	return true;
  },
  get: function( name ) {
  	var nameE = name + "=";
	var cookies = document.cookie.split(";");
	for(var i = 0, Cookie; Cookie = cookies[i]; i++) {
	  while(Cookie.charAt(0) == " ") {
	  	Cookie = Cookie.substring(1,Cookie.length);
	  }
	  if(Cookie.indexOf(nameE) == 0) {
	  	return Cookie.substring(nameE.length,Cookie.length);
	  }
	}
	return false;
  },
  unset: function( name ) {
  	this.set(name, "", -1);
  	return true;
  }
}


function checkCookie(){
	idioma = Cookie.get('averone')
	if (idioma!=null && idioma!=""){
		redirecionaIndex(idioma);
	}else {
		idioma = getIdioma();
		if (idioma!=null && idioma!="")	{
			redirecionaIndex(idioma);
		}
	}
}

function getIdioma() {
	var x = navigator;
//	document.write(x.userAgent);
	idioma = x.browserLanguage;

	if(idioma == undefined) {
		str = new String(x.userAgent);
		y = str.split(";");
		idioma = "pt-br"; //y[3];
	}
	
	return idioma;
}

function redireciona(idioma) {

	// se o idioma for diferente de portugues exibe em ingles
	if(idioma.toUpperCase()=="PT-BR") {
		window.location.href="/pt-br/index.html";
		Cookie.unset('averone');
		Cookie.set('averone',idioma.trim(),60)
	}else {
		window.location.href="/en/index.html";
		Cookie.unset('averone');
		Cookie.set('averone',idioma.trim(),60);
	}
}

// funcao especifica para pagina de index
function redirecionaIndex(idioma) {

	// se o idioma for diferente de portugues exibe em ingles
	if(idioma.trim().toUpperCase()=="PT-BR") {
		window.location.href="/pt-br/index.html";
		Cookie.unset('averone');
		Cookie.set('averone',idioma.trim(),60)
	}else {
		window.location.href="/en/index.html";
		Cookie.unset('averone');
		Cookie.set('averone',idioma.trim(),60);
	}
}
