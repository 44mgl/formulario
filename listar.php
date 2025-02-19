<?php
include("conexao.php");

$sql = "SELECT * FROM usuarios";
$resultado = $conexao->query($sql); // o query é um método da classe mysqli usado para executar comandos SQL no banco de dados.

if ($resultado->num_rows > 0) {
    echo "<ul>";
    while($row = $resultado->fetch_assoc()) {
        echo "<li>" . $row["nome"] . " - " . $row["Email"] .  " - " .$row["telefone"] . " - " .$row["genero"] . " - " .$row["data_nascimento"] . " - " .$row["cidade"] . " - " .$row["estado"] . " - " .$row["endereco"] . "</li>" ;
    }
    echo "</ul>";
} else {
    echo "Nenhum usuário encontrado.";
}

$conexao->close();
?>


