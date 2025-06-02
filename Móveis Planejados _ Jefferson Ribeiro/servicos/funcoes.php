<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

function enviarEmail(array $dados) {

    $nome     = $dados['nome']     ?? '';
    $telefone = $dados['telefone'] ?? '';
    $email    = $dados['email']    ?? '';
    $endereco = $dados['endereco'] ?? '';
    $estado   = $dados['estado']   ?? '';
    $cidade   = $dados['cidade']   ?? '';
    $cep      = $dados['cep']      ?? '';
    $texto    = $dados['texto']    ?? '';

    error_log("Email do Usuário: " . $email);

    $mensagemHtml = "
<!DOCTYPE html>
<html lang='pt-br'>
<head>
  <meta charset='UTF-8'>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      padding: 20px;
    }
    .container {
      background-color: #ffffff;
      border: 1px solid #ddd;
      border-radius: 6px;
      padding: 20px;
      max-width: 600px;
      margin: auto;
    }
    h2 {
      color: #333;
      text-align: center;
    }
    .info {
      margin-bottom: 15px;
    }
    .info strong {
      display: inline-block;
      width: 100px;
      color: #555;
    }
    .mensagem {
      background-color: #f1f1f1;
      padding: 10px;
      border-radius: 4px;
      white-space: pre-wrap;
    }
  </style>
</head>
<body>
  <div class='container'>
    <h2>Dados do Formulário</h2>
    <div class='info'><strong>Nome:</strong> {$nome}</div>
    <div class='info'><strong>Telefone:</strong> {$telefone}</div>
    <div class='info'><strong>Email:</strong> {$email}</div>
    <div class='info'><strong>Endereço:</strong> {$endereco}</div>
    <div class='info'><strong>Estado:</strong> {$estado}</div>
    <div class='info'><strong>Cidade:</strong> {$cidade}</div>
    <div class='info'><strong>CEP:</strong> {$cep}</div>
    <div class='info'><strong>Mensagem:</strong></div>
    <div class='mensagem'>" . nl2br(htmlspecialchars($texto)) . "</div>
  </div>
</body>
</html>
";

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'andreo.ads@gmail.com';
        $mail->Password   = 'bonrmvyopyjkbiwp';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom($email, 'Formulário de Contato');
        $mail->addAddress('andreo.ads@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'Email de teste';
        $mail->Body    = $mensagemHtml;
        $mail->AltBody = strip_tags($mensagemHtml);

        $mail->send();
        return true;
    } catch (Exception $e) {
        return "Erro: {$mail->ErrorInfo}";
    }
}