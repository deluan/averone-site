<?

// e-mail do popup
$recipients = 'ericaboechat@gmail.com';
$empresa = $_POST['empresa'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = "[Contato via site]";

# Corpo da Mensagem
$body = "Contato Averone\n";
$body .= "----------------------------------------------------------\n\r";
$body .= "Empresa : $empresa\n";
$body .= "Contato : $nome\n";
$body .= "E-mail  : $email\n";
$body .= "Telefone: $telefone\n";
$body .= "----------------------------------------------------------\n\r";

// cabeçalhos adicionais
// $headers = "To: Averone <atendimento@averone.com.br>\r\n";
$headers = "To: Averone <bruno.fagundes@averone.com.br>\r\n";
$headers .= "From: $nome <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
	
if(mail($recipients, $assunto, $body, $headers)) {

	// enviando confirmação para o email do remetente.
	$msgConfirmacao = "$nome,\n\rObrigado pelo contato. Daremos retorno em no máximo 4 horas úteis. \n\rAtendimento Averone \n\r";
	$headersConfirmacao = "To: $nome <$email>\r\n";
	$headersConfirmacao = "From: Averone <atendimento@averone.com.br>\r\n";
	$headersConfirmacao .= "Reply-To: atendimento@averone.com.br\r\n";
	   
	mail($email,"Resposta automática - Averone",$msgConfirmacao,$headersConfirmacao);


   echo "<script type=\"text/javascript\">";
   echo "alert('Successfully sent message.');";
   echo "opener.fechaPopup(this);";
   echo "</script>";
}
else
{
   echo "<script type=\"text/javascript\">";
   echo "alert('Its message occurred an error when sending! It tries again.');";
   echo "opener.fechaPopup(this);";
   echo "</script>";
}

?>