<?php
include_once("./config/conexao.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['idade'])) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $idade = $_POST["idade"];

        // Definindo a consulta UPDATE
        $sql = "UPDATE pessoa SET nome = :nome, idade = :idade WHERE id = :id";

        // Preparando a consulta
        $stmt = $conn->prepare($sql);

        // Bind dos parâmetros
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':idade', $idade);

        // Executando a consulta
        $stmt->execute();

        // Verificando se a atualização foi bem-sucedida
        $rowCount = $stmt->rowCount();
        if ($rowCount > 0) {
            echo "Registros atualizados com sucesso!";
        } else {
            echo "Nenhum registro foi atualizado.";
        }
    } else {
        echo "Parâmetros inválidos no formulário.";
    }
}
