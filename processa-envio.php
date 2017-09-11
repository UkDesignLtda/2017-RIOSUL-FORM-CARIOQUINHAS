<?php

// Inclui o arquivo class.phpmailer.php localizado na pasta class

define('APP', dirname(__FILE__));
require_once APP . "/class/class.phpmailer.php";
require_once APP . '/class/class.smtp.php';
require_once APP . "/class/class.helpers.php";
date_default_timezone_set('America/Sao_Paulo');
define("CHARSET", "UTF-8");

// Inicia a classe PHPMailer
$mail = new PHPMailer(true);
// Inicia a classe Helpers
$h = new Helpers();

// Obtém e prepara dados

$nomeCompleto = $h->post_limpo('nomeCompleto');
$endereco = $h->post_limpo('logradouro') . ", " . $h->post_limpo('numero') . ", " . $h->post_limpo('complemento');
$bairro = $h->post_limpo('bairro');
$cep = $h->post_limpo('cep');
$email = $h->post_limpo('email');
$cpf = $h->post_limpo('cpf');
$rg = $h->post_limpo('rg') . " " . $h->post_limpo('orgaoExpedidor');
$telefone = $h->post_limpo('telefone');
$sugestao = $h->post_limpo('textoConcurso');

// Prepara mensagens a serem enviadas

$msgParaRioSul = "
<html>
<body>
<p><font face=\"Arial, sans-serif\">
<b>Nome :</b>$nomeCompleto<br>
<b>Endereço :</b>$endereco<br>
<b>Bairro :</b>$bairro<br>
<b>CEP :</b>$cep<br>
<b>RG :</b>$rg<br>
<b>CPF :</b>$cpf<br>
<b>Email :</b>$email<br>
<b>Telefone :</b>$telefone<br>
<b>Frase/Texto :</b><p>“ $sugestao ”<br></p>

</body>
</html>";

$msgParaCliente = "<H3><font face=\"Arial, sans-serif\">Olá " . $nomeCompleto . ",</H3><h4> O RIOSUL agradece o seu contato.</font></h4>";
$msgParaCliente .= "<p><font face=\"Arial, sans-serif\">Observação - Não é necessário responder esta mensagem.<br/></font></p>";
$msgParaCliente .= "<p><font face=\"Arial, sans-serif\">Seguem abaixo os dados de preenchimento de seu formulário de participação para seu controle:</font></p>";
$msgParaCliente .= "<hr/>";
$msgParaCliente .= "<p><font face=\"Arial, sans-serif\">
<b>Nome :</b>$nomeCompleto<br>
<b>Endereço :</b>$endereco<br>
<b>Bairro :</b>$bairro<br>
<b>CEP :</b>$cep<br>
<b>RG :</b>$rg<br>
<b>CPF :</b>$cpf<br>
<b>Email :</b>$email<br>
<b>Telefone :</b>$telefone<br>
<b>Frase/Texto :</b><p>“ $sugestao ”<br>";


// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->CharSet = CHARSET;


// Envio para o RioSul.


try
{
    $mail->Host = 'smtp.ukdesign.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
    $mail->SMTPAuth = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
    $mail->Port = 587; //  Usar 587 porta SMTP
    $mail->Username = 'sac-riosul@ukdesign.com.br'; // Usuário do servidor SMTP (endereço de email)
    $mail->Password = 'S@CR10sul'; // Senha do servidor SMTP (senha do email usado)
    //Define o remetente
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->SetFrom('sac-riosul@ukdesign.com.br', 'SAC-RioSul'); //Seu e-mail
    $mail->AddReplyTo('sac-riosul@ukdesign.com.br', 'SAC RioSul'); //Seu e-mail
    $mail->Subject = 'Concurso Cultural RIOSUL'; //Assunto do e-mail
    //Define os destinatário(s)
    //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->AddAddress('sac.riosul@riosul.com.br', 'SAC RioSul');
    $mail->AddAddress('emersonajr.ukdesign@gmail.com', 'Emerson Alencar Junior');
    $mail->AddBCC('mario@ukdesign.com.br', 'Mario Vianna');
    //Campos abaixo são opcionais
    //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
    //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
    //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
    //Define o corpo do email
    $mail->MsgHTML($msgParaRioSul);

    ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
    //$mail->MsgHTML(file_get_contents('arquivo.html'));

    $mail->Send();
// 	$mail->SMTPDebug = 2; // enables SMTP debug information (for testing)
    //caso apresente algum erro é apresentado abaixo com essa exceção.
} catch (phpmailerException $e)
{
    echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
}


// Envio de Confirmação para o Cliente.

try
{
    $mail->ClearAllRecipients();
    $mail->Host = 'smtp.ukdesign.com.br'; // Endereço do servidor SMTP (Autenticação, utilize o host smtp.seudomínio.com.br)
    $mail->SMTPAuth = true;  // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
    $mail->Port = 587; //  Usar 587 porta SMTP
    $mail->Username = 'sac-riosul@ukdesign.com.br'; // Usuário do servidor SMTP (endereço de email)
    $mail->Password = 'S@CR10sul'; // Senha do servidor SMTP (senha do email usado)
    //Define o remetente
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->SetFrom('sac.riosul@riosul.com.br', 'SAC RioSul - Fale Conosco'); //Seu e-mail
    $mail->AddReplyTo('sac.riosul@riosul.com.br', 'SAC RioSul - Fale Conosco'); //Seu e-mail
    $mail->Subject = 'Shopping RIOSUL - Concurso Cultural'; //Assunto do e-mail
    //Define os destinatário(s)
    //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->AddAddress($email, $nome);
    $mail->AddBCC('emersonajr.ukdesign@gmail.com', 'Emerson Alencar Junior');

    //Campos abaixo são opcionais
    //=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    //$mail->AddCC('destinarario@dominio.com.br', 'Destinatario'); // Copia
    //$mail->AddBCC('destinatario_oculto@dominio.com.br', 'Destinatario2`'); // Cópia Oculta
    //$mail->AddAttachment('images/phpmailer.gif');      // Adicionar um anexo
    //Define o corpo do email
    $mail->MsgHTML($msgParaCliente);

    ////Caso queira colocar o conteudo de um arquivo utilize o método abaixo ao invés da mensagem no corpo do e-mail.
    //$mail->MsgHTML(file_get_contents('arquivo.html'));

    $mail->Send();

    //caso apresente algum erro é apresentado abaixo com essa exceção.
} catch (phpmailerException $e)
{
    echo $e->errorMessage(); //Mensagem de erro costumizada do PHPMailer
}

echo "<h1 style=\"font: NORMAL 28px Verdana, Arial, Helvetica, sans-serif; color:#555555; display:block; margin-top: 1em;\">O Seu Email foi enviado com sucesso!</h1>\n\r";
echo "<h2 style=\"font: NORMAL 16px Verdana, Arial, Helvetica, sans-serif; color:#333333; display:block; \">O RIOSUL agradece seu contato.</h2>\n\r";
echo "<h2 style=\"font: NORMAL 16px Verdana, Arial, Helvetica, sans-serif; color:#333333; display:block; \">Boa Sorte!</h2>\n\r";
