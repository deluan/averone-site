<?
  // email de contato
 
  # E-mail de destino. Caso seja mais de um destino, crie um array de e-mails.
  # *OBRIGAT�RIO*
  $recipients = 'ericaboechat@gmail.com';
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];
  $nome = $_POST['nome'];
  $assunto = "[Contato via site]";

  # Corpo da Mensagem
	$body = "Formulario de contato do site Averone.com.br\n";
	$body .= "----------------------------------------------------------\n\r";
	$body .= "Remetente: $nome\n";
	$body .= "E-mail: $email\n";
	$body .= "----------------------------------------------------------\n\r";
	$body .= "Mensagem: \n";
	$body .= $mensagem;
	
	// cabe�alhos adicionais
	$headers = "To: Averone <atendimento@averone.com.br>\r\n";
	$headers .= "From: $nome <$email>\r\n";
	$headers .= "Reply-To: $email\r\n";
	
	if(mail($recipients, $assunto, $body, $headers)) {
		
		// enviando confirma��o para o email do remetente.
		$msgConfirmacao = "$nome,\n\rObrigado pelo contato. Daremos retorno em no m�ximo 4 horas �teis. \n\rAtendimento Averone \n\r";
		$headersConfirmacao = "To: $nome <$email>\r\n";
		$headersConfirmacao = "From: Averone <atendimento@averone.com.br>\r\n";
		$headersConfirmacao .= "Reply-To: atendimento@averone.com.br\r\n";
		   
	    mail($email,"Resposta autom�tica - Averone",$msgConfirmacao,$headersConfirmacao);

	    header("location: contatosOk.php");
	}
	else
	    header("location: contatosErro.php");
?>				