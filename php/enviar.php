  <?php
//Recuperando os dados
	$nome=$_POST['nome'];
	$email=$_POST['email'];
	$assunto=$_POST['assunto'];
	$mensagem=$_POST['mensagem'];
  
//Formulando o envio da mensagem para o email
	$msg .= "<strong>Nome:</strong> ".$nome; 
	$msg .= "<br /><strong>Email:</strong> ".$email;
	$msg.= "<br /> <strong>Mensagem:</strong> ".$mensagem;
  
//Enviando o email
	$email_remetente = "contatomakeitsoft@gmail.com";
	$headers = "MIME-Version: 1.1\n";
	$headers .= "Content-Type:text/html; charset=UTF-8\n";
	$headers .= "From: $email_remetente\n"; // remetente
	$headers .= "Return-Path: $email_remetente\n"; // return-path
	$headers .= "Reply-To: $email\n"; // Endereço (devidamente validado) que o seu usuário informou no contato
	$envio = mail("contatomakeitsoft@gmail.com", $assunto, $msg, $headers, "-f$email_remetente");
	
	
	
// Mostra a mensagem acima e redireciona para index.html
$confirma="Mensagem enviada com sucesso!";
if($envio)
	echo "<script>alert(`$confirma`);</script>";
  ?>
 