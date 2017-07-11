<?php

// Passando os dados obtidos pelo formulário para as variáveis abaixo
$name     = $_POST['name'];
$email    = trim($_POST['email']);
$emaildestinatario = 'reservas@recantoelshadday.pe.hu'; // Digite seu e-mail aqui, lembrando que o e-mail deve estar em seu servidor web
$assunto          = 'Estou entrando em contato através do formulário no site.';
$message          = $_POST['message'];
 
 
/* Montando a mensagem a ser enviada no corpo do e-mail. */
$mensagemHTML = '<P>Formulário preenchido no site.</P>
<p><b>Nome:</b> '.$name.'
<p><b>E-Mail:</b> '.$email.'
<p><b>Mensagem:</b> '.$message.'</p>
<hr>';


// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n"; // remetente
$headers .= "Return-Path: $emaildestinatario \r\n"; // return-path
$envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers); 
 
 if($envio)
echo "Mensagem enviada com sucesso"; // Página que será redirecionada

?>
