//------------------------------------------
// Evento para ativer o menu em css
function IEHoverPseudo() {

    var navItems = document.getElementById("primary-nav").getElementsByTagName("li");

    for (var i = 0; i < navItems.length; i++) {
        if (navItems[i].className == "menuparent") {
            navItems[i].onmouseover = function() {
                this.className += " over";
            }
            navItems[i].onmouseout = function() {
                this.className = "menuparent";
            }
        }
    }

}
window.onload = IEHoverPseudo;
//------------------------------------------



String.prototype.trim = function() {
    return this.replace(/^\s*/, "").replace(/\s*$/, "");
}

function popupContato() {
    window.open("popupContato.html", "", "WIDTH=450,HEIGHT=300,noresize, scrolling=no");
}

function validaPopup(form) {
    if (form.empresa.value.length < 1) {
        alert("Todos os campos devem estar preenchidos para enviar o formulário.");
        return false;
    }

    if (form.nome.value.length < 1) {
        alert("Todos os campos devem estar preenchidos para enviar o formulário.");
        return false;
    }

    if (!mailValidation(form.email)) {
        alert("E-mail inválido.");
        return false;
    }

    if (form.telefone.value.length < 1) {
        alert("Todos os campos devem estar preenchidos para enviar o formulário.");
        return false;
    }

    return true;
}

function validaContato(form) {
    if (form.nome.value.length < 1) {
        alert("Todos os campos devem estar preenchidos para enviar o formulário.");
        return false;
    }

    if (!mailValidation(form.email)) {
        alert("E-mail inválido.");
        return false;
    }

    if (form.mensagem.value.length < 1) {
        alert("Todos os campos devem estar preenchidos para enviar o formulário.");
        return false;
    }

    return true;
}

function enviaFormCurriculo(form) {
    if (form.nome.value.length < 1) {
        alert("Todos os campos devem estar preenchidos para enviar o formulário.");
    } else {
        if (!mailValidation(form.email)) {
            alert("E-mail inválido.");
        } else {
            if (form.arquivo.value.lenght < 1)
                alert("Selecine um arquivo.");
            else
                return form.submit();
        }
    }
}

function mailValidation(mail) {
    var er = new RegExp(/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/);

    if (mail.value == "")
        return false;

    if (!er.test(mail.value))
        return false;

    return true;
}

function fechaPopup(janela) {
    janela.close();
}


function checkCookie() {
    idioma = Cookies.get('averone')
    if (idioma != null && idioma != "") {
        redirecionaIndex(idioma);
    } else {
        idioma = getIdioma();
        if (idioma != null && idioma != "") {
            redirecionaIndex(idioma);
        }
    }
}

function setIdioma(idioma) {
	Cookies.set('averone', idioma.trim(), {expires:180})
}

function getIdioma() {
    var x = navigator;
    //	document.write(x.userAgent);
    idioma = x.browserLanguage;

    if (idioma == undefined) {
        str = new String(x.userAgent);
        y = str.split(";");
        idioma = "pt-br"; //y[3];
    }

    return idioma;
}

// funcao especifica para pagina de index
function redirecionaIndex(idioma) {
    // se o idioma for diferente de portugues exibe em ingles
    if (idioma.trim().toUpperCase() == "PT-BR") {
        window.location.href = "/pt-br/company.html";
    } else {
        window.location.href = "/en/company.html";
    }
		Cookies.remove('averone');
		Cookies.set('averone', idioma.trim(), {expires: 180})
}
