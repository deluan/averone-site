// JavaScript Document
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
	alert(form.empresa.value);
	alert(form.nome.value);
	alert(form.email.value);
	alert(form.telefone.value);
	return false;
}

function mailValidation( mail ){
    var er = new RegExp(/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/);

	if(mail.value == "")
		return false;
  		
    if(!er.test(mail.value))
	    return false;
		
	return true;
}