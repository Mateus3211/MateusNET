<?php
session_start(); // Iniciar sessão
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'mateusnet';

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}
?>
