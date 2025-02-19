<link rel="stylesheet" type="text/css" href="estilo.css" media="screen" />
<?php
include("conexao.php"); // Importa a conexão

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Seleciona todos os dados da tabela "nome, email e etc...", junto com o method post que tem que colocar no html tambem //
    $nome = $_POST["nome"];
    $Email = $_POST["Email"];
    $telefone = $_POST["telefone"];
    $genero = $_POST["genero"];
    $data_nascimento = $_POST["data_nascimento"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $endereco = $_POST["endereco"];

    $sql = "INSERT INTO usuarios (nome,Email,telefone,genero,data_nascimento,cidade,estado,endereco) VALUES ('$nome', '$Email','$telefone','$genero','$data_nascimento','$cidade','$estado','$endereco')";

    if ($conexao->query($sql) === TRUE) { // o query é um método da classe mysqli usado para executar comandos SQL no banco de dados.
        echo "Usuário cadastrado com sucesso! ";  
        echo '<button style="background-color:rgb(38, 3, 196); color: white; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer; border-radius: 5px; transition: background 0.3s;" onclick="window.location.href=\'index.html\'">Voltar à Página Inicial</button>'; 
        // Estilizei o proprio botao em css no prorio codigo, tudo aqui dentro do parenteses, ja que o php nao cria botao de fato e precisa do html para fazer um
    } else {
        echo "Erro: " . $conexao->error;
        echo '<button style="background-color: #e74c3c; color: white; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer; border-radius: 5px; transition: background 0.3s;" onclick="window.location.href=\'index.html\'">Voltar à Página Inicial</button>';
    }

    $conexao->close();
}




