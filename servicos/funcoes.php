<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

function enviarEmail(array $dados)
{

    $env_file = __DIR__ . '/../';

    if (file_exists($env_file . '.env')) {
        $dotenv = Dotenv\Dotenv::createImmutable($env_file);
        $dotenv->load();
    } else {
        echo "Desculpe! Ocorreu uma falha ao tentar enviar o e-mail. \nPor favor, tente novamente mais tarde.";
        exit;
    }

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->isHTML(true);
        $mail->SMTPAuth   = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Host       = $_ENV['MAIL_HOST'] ?? 'smtp.example.com';
        $mail->Username   = $_ENV['MAIL_USERNAME'] ?? '';
        $mail->Password   = $_ENV['MAIL_PASSWORD'] ?? '';
        $mail->Port       = $_ENV['MAIL_PORT'] ?? 587;;
        $mail->setFrom($_ENV['MAIL_FROM'], $_ENV['MAIL_FROM_NAME']);
        $mail->addAddress($_ENV['MAIL_TO']);
        $mail->Subject    = "Dados para Contato";
        $mail->Body       = retornaCorpoEmail($dados);

        //$mail->AltBody = strip_tags($mensagemHtml);

        $mail->send();
        return true;
    } catch (Exception $e) {
        return $mail->ErrorInfo;
    }
}

function retornaCorpoEmail(array $dados)
{

    $nome     = $dados['nome']     ?? '';
    $telefone = $dados['telefone'] ?? '';
    $email    = $dados['email']    ?? '';
    $estado   = $dados['estado']   ?? '';
    $cidade   = $dados['cidade']   ?? '';
    $cep      = $dados['cep']      ?? '';
    $texto    = $dados['texto']    ?? '';

    $template = file_get_contents(__DIR__ . '/../email-template.html');

    return str_replace(
        [
            '{{nome}}',
            '{{telefone}}',
            '{{email}}',
            '{{estado}}',
            '{{cidade}}',
            '{{cep}}',
            '{{mensagem}}'
        ],
        [
            htmlspecialchars($nome),
            htmlspecialchars($telefone),
            htmlspecialchars($email),
            htmlspecialchars($estado),
            htmlspecialchars($cidade),
            htmlspecialchars($cep),
            nl2br(htmlspecialchars($texto))
        ],
        $template
    );
}
