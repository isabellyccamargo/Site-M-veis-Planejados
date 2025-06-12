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

$resultado = enviarEmail($dados);

if ($resultado) {
    echo json_encode(['sucesso' => true]);
} else {

    echo json_encode([
        'sucesso' => false,
        'mensagem' => $resultado
    ]);
}