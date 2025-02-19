<?php
include("conexao.php");

$sql = "SELECT * FROM usuarios";
$resultado = $conexao->query($sql); // o query é um método da classe mysqli usado para executar comandos SQL no banco de dados.

if ($resultado->num_rows > 0) {
    echo "<ul>"; 
    while($row = $resultado->fetch_assoc()) {
        echo "<li>" . $row["nome"] . " - " . $row["Email"] .  " - " .$row["telefone"] . " - " .$row["genero"] . " - " .$row["data_nascimento"] . " - " .$row["cidade"] . " - " .$row["estado"] . " - " .$row["endereco"] . "</li>" ;
        //O row no PHP geralmente está relacionado à forma como os resultados de uma consulta SQL são manipulados
        //O <li> é a tag usada para representar cada item dentro de uma lista (<ul> ou <ol>).
        //O <ul> é uma tag HTML usada para criar listas não ordenadas.
        //fetch_assoc() retorna cada linha da tabela como um array associativo ($row["nome"], $row["email"]).
        //num_rows > 0 verifica se há resultados.
    }
    echo "</ul>";
} else {
    echo "Nenhum usuário encontrado.";
}

$conexao->close();
?>


