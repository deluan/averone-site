<?
// recebendo os dados do formulario

  $recipients = 'ericaboechat@gmail.com';
  $email = $_POST['email'];
  $nome = $_POST['nome'];
  $assunto = "[Curriculo Averone]";

  # Corpo da Mensagem
	$body = "Banco de Curriculos - Averone.com.br\n";
	$body .= "----------------------------------------------------------\n\r";
	$body .= "Remetente: $nome\n";
	$body .= "E-mail: $email\n";
	$body .= "----------------------------------------------------------\n\r";

	// manipulando o arquivo -------------------------
	
	$arquivo = isset($_FILES["arquivo"]) ? $_FILES["arquivo"] : FALSE;
	
	if(file_exists($arquivo["tmp_name"]) and !empty($arquivo)){
	
		$fp = fopen($_FILES["arquivo"]["tmp_name"],"rb");
		$anexo = fread($fp,filesize($_FILES["arquivo"]["tmp_name"]));
		$anexo = base64_encode($anexo);
		
		fclose($fp);
		
		$anexo = chunk_split($anexo);
	
		// fim da manipulação do arquivo
		
		$boundary = "XYZ-" . date("dmYis") . "-ZYX";
		$mensagem = "--$boundary\n";
		$mensagem .= "Content-Transfer-Encoding: 8bits\n";
		$mensagem .= "Content-Type: text/plain; charset=\"ISO-8859-1\"\n\n"; //plain
		$mensagem .= "$body\n";
		$mensagem .= "--$boundary\n";
		$mensagem .= "Content-Type: ".$arquivo["type"]."\n";
		$mensagem .= "Content-Disposition: attachment; filename=\"".$arquivo["name"]."\"\n";
		$mensagem .= "Content-Transfer-Encoding: base64\n\n";
		$mensagem .= "$anexo\n";
		$mensagem .= "--$boundary--\r\n";
		
		$headers = "MIME-Version: 1.0\n";
		$headers .= "From: \"$nome\" <$email>\r\n";
		$readers .= "Reply-To: $email\n";
		$headers .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";
		$headers .= "$boundary\n";
	
		if(mail($recipients, $assunto, $mensagem, $headers)) {
		   // enviando confirmação para o email do remetente.
		   $msgConfirmacao = "$nome,\n\rEsta é uma confirmação de que seu curriculo foi cadastrado em nosso sistema. Estaremos analizando-o, e entraremos em contato se necessário. \n\rAverone \n\r";
		   $headersConfirmacao = "To: $nome <$email>\r\n";
		   $headersConfirmacao = "From: Averone <cv@averone.com.br>\r\n";
		   $headersConfirmacao .= "Reply-To: cv@averone.com.br\r\n";
		   
		   mail($email,"Banco de Curriculos Averone - Confirmação de recebimento",$msgConfirmacao,$headersConfirmacao);

		   header("location: oportunidadesOk.php");
		   exit();
		}
		else {
		   header("Location: oportunidadesErro.php");
		   exit();
		}
	}
	else
	{
		// arquivo nao encontrado
		header("Location: oportunidadesErro.php");
		exit();
	}
?>