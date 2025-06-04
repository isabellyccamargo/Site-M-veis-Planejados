<?php
require 'funcoes.php';

error_log("POST recebido: " . print_r($_POST, true));

$dados = [
    'nome'     => $_POST['nome']     ?? '',
    'telefone' => $_POST['telefone'] ?? '',
    'email'    => $_POST['email']    ?? '',
    'endereco' => $_POST['endereco'] ?? '',
    'estado'   => $_POST['estado']   ?? '',
    'cidade'   => $_POST['cidade']   ?? '',
    'cep'      => $_POST['cep']      ?? '',
    'texto'    => $_POST['texto']    ?? ''
];

error_log("Dados do Usuário: " . $dados['nome']);

$resultado = enviarEmail($dados);

if ($resultado === true) {
    echo "E-mail enviado com sucesso!";
} else {
    echo $resultado; // Exibe o erro
}