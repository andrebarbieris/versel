<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$destinatario = 'seu-email@provedor.com'; // Defina o endereço de email para onde as mensagens serão enviadas

$assunto = 'Contato pelo site';

$mensagem = "Nome: $nome\n"
           . "E-mail: $email\n\n"
           . "Mensagem:\n$mensagem";

$headers = "From: $email\r\n"
         . "Reply-To: $email\r\n"
         . "X-Mailer: PHP/" . phpversion();

mail($destinatario, $assunto, $mensagem, $headers);

echo 'Mensagem enviada com sucesso!';

?>