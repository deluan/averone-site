import com.google.appengine.api.mail.*
import java.util.logging.*

log = Logger.getLogger(this.class.name);

// Store the current language
cookies = request.getCookies()
idioma = cookies ? cookies.find { it.name == "averone"}.value : "pt-br"

def sendEmail(name, email, fieldName, file) {
    // Formats the email
    def body = """
Banco de Curriculos - Averone.com.br
----------------------------------------------------------
Remetente: ${name}
E-mail: ${email}
----------------------------------------------------------
    """

    // Sends the email
    def message = new MailService.Message('Site <deluan@averone.com.br>', 'curriculo@averone.com.br', '[Averone] Curriculo', body)
    def attachment = new MailService.Attachment(fileName, file)
    message.setAttachments(attachment)
    mail.send message
}

// Parses the form and send the email
try {
	
	def fields = FormParser.parse(request)

    sendEmail(fields.nome, fields.email, fields.fieldName, fields.arquivo)

	response.sendRedirect(idioma + "/oportunidadesOk.html")	
} catch (Exception ex) {
	response.sendRedirect(idioma + "/oportunidadesErro.html")	
	log.log(Level.SEVERE, "Erro enviando curriculo.", ex)
}
