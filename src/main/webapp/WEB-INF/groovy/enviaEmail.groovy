import com.google.appengine.api.mail.*
import java.util.logging.*

log = Logger.getLogger(this.class.name);

// Guarda o idioma de origem
cookies = request.getCookies()
idioma = cookies ? cookies.find { it.name == "averone"}.value : "pt-br"

popup = params.empresa != null

// Trata o form e o envio de email
try {
	
	// Prepara o email
	def body = """ 
Formulario de contato do site Averone.com.br
----------------------------------------------------------"""
	if (params.empresa) {
		body = body + """
Empresa: ${params.empresa}
Contato: ${params.nome}
E-mail: ${params.email}
Telefone: ${params.telefone}
----------------------------------------------------------
"""
	} else {
		body = body + """
Remetente: ${params.nome}
E-mail: ${params.email}
----------------------------------------------------------
Mensagem:
${params.mensagem}		
"""
	}
	
	// Envia o email
	def message = new MailService.Message('Site <deluan@averone.com.br>', 'contato@averone.com.br', '[Averone] Contato via site', body)	
	mail.send message
	
	if (popup) {
		println """				
				<script type="text/javascript">
				opener.fechaPopup(this);
				alert('Sua mensagem foi enviada com sucesso.');
				</script>
				"""
	} else {
		response.sendRedirect(idioma + "/contatosOk.html")
	}
} catch (Exception ex) {
	log.log(Level.SEVERE, "Erro enviando email de contato.", ex)
	if (popup) {
		println """				
				<script type="text/javascript">
				opener.fechaPopup(this);
				alert('Ocorreu um erro ao enviar sua mensagem. Tente novamente mais tarde.');
				</script>
				"""
	}
	else {
		response.sendRedirect(idioma + "/contatosErro.html")	
	}
}
