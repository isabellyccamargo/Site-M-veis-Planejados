<?php
require 'funcoes.php';

error_log("POST recebido: " . print_r($_POST, true));

$dados = [
    'nome'     => $_POST['nome']     ?? '',
    'telefone' => $_POST['telefone'] ?? '',
    'email'    => $_POST['email']    ?? '',
    'estado'   => $_POST['estado']   ?? '',
    'cidade'   => $_POST['cidade']   ?? '',
    'cep'      => $_POST['cep']      ?? '',
    'texto'    => $_POST['texto']    ?? ''
];

error_log("Dados do Usuário: " . $dados['nome']);

$resultado = enviarEmail($dados);

if ($resultado) {
    echo json_encode(['sucesso' => true]);
} else {
    echo json_encode([
        'sucesso' => false,
        'mensagem' => 'Erro ao enviar o e-mail. Tente novamente mais tarde.'
    ]);
}