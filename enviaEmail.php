<?
if(isset($_GET['tag'])) {
 	if($_GET['tag'] == "wfo")
	{
	 	// e-mail do popup
		$recipients = 'bruno.fagundes@gmail.com';
		$empresa = $_POST['empresa'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$assunto = "[Contato Averone]";
		
		# Corpo da Mensagem
		$body = "Contato Averone\n";
		$body .= "----------------------------------------------------------\n\r";
		$body .= "Empresa : $empresa\n";
		$body .= "Contato : $nome\n";
		$body .= "E-mail  : $email";
		$body .= "Telefone: $telefone";
		$body .= "----------------------------------------------------------\n\r";

			
		if(mail($recipients, $assunto, $body)) {
		   echo "<script type=\"text/javascript\">";
		   echo "alert('Sua mensagem foi enviada com sucesso.')";
		   echo "window.close();";
		   echo "</script>";
		}
		else
		{
		   echo "<script type=\"text/javascript\">";
		   echo "alert('Ocorreu um erro ao enviar sua mensagem. Tente novamente mais tarde.');";
		   echo "window.close();";
		   echo "</script>";
		}
	 }
	 else
	 {		
	    echo "<script type=\"text/javascript\">";
		echo "alert('Ocorreu um erro ao enviar sua mensagem. Tente novamente mais tarde.');";
		echo "window.close();";
		echo "</script>";
	 }
	 exit();
 } 
  // email de contato
 
  # E-mail de destino. Caso seja mais de um destino, crie um array de e-mails.
  # *OBRIGATÓRIO*
  $recipients = 'bruno.fagundes@gmail.com';
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];
  $nome = $_POST['nome'];
  $assunto = "[Contato via Site]";

  # Corpo da Mensagem
	$body = "Formulario de contato do site Averone.com.br\n";
	$body .= "----------------------------------------------------------\n\r";
	$body .= "Remetente: $nome\n";
	$body .= "E-mail: $email\n";
	$body .= "----------------------------------------------------------\n\r";
	$body .= "Mensagem: \n";
	$body .= $mensagem;
	
	if(mail($recipients, $assunto, $body))
	   header("location: contatosOk.html");
	else
	   header("location: contatosErro.html");
?>				