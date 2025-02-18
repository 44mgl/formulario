<?php
include("conexao.php"); // Importa a conexão

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $Email = $_POST["Email"];
    $telefone = $_POST["telefone"];
    $genero = $_POST["genero"];
    $data_nascimento = $_POST["data_nascimento"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $endereco = $_POST["endereco"];

    $sql = "INSERT INTO usuarios (nome,Email,telefone,genero,data_nascimento,cidade,estado,endereco) VALUES ('$nome', '$Email','$telefone','$genero','$data_nascimento','$cidade','$estado','$endereco')";

    if ($conexao->query($sql) === TRUE) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro: " . $conexao->error;
    }

    $conexao->close();
}
?>
