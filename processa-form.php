<html lang="pt-br">
<head >
	<title>Enviando um email</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta charset="utf-7">
</head>
<body>
<?php 
$para = "contato@manzanos.com.br";

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];


$to = 'contato@manzanos.com.br';
$subject = "Mensagem de  $nome";
$messageHTML = "Mensagem de contato
					Assunto: $assunto
					Nome: $nome
					Mensagem: $mensagem";



$email_remetente = "contato@manzanos.com.br";
$email_usuario = $email;
$header = "MIME-Version: 1.1\r\n";
$header .= "Content-type: text/plain; charset=utf-8\n";
$header .= "From: $email_remetente\r\n"; // remetente
$header .= "Return-Path: $email_remetente\r\n"; // return-path
$header .= "Reply-To: $email_usuario\r\n"; // Endereço (devidamente validado) que o seu usuário informou no contato
$envio = mail($email_remetente, $subject, $messageHTML, $header, "-f$email_remetente");
?>

<div class="alert alert-success" role="alert" id="success_message">Sucesso!<i class="glyphicon glyphicon-thumbs-up"></i> Brevemente o atenderemos</div>
<br>
<a href="index.php" class="btn btn-sucess">Voltar para o site</a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>