<?php
$servidor = "localhost"; // Ou IP do servidor MySQL
$usuario = "root"; // Usuário do MySQL (padrão do XAMPP é "root")
$senha = ""; // Senha (padrão do XAMPP é vazio)
$banco = "meusite_db"; // Nome do banco criado

// Criar conexão
$conexao = new mysqli($servidor, $usuario, $senha, $banco);

// Verificar conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
    //die = exit
} 

// Opcional: definir charset para evitar problemas com acentos
$conexao->set_charset("utf8");

?>
