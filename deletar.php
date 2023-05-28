<?php
include_once "./config/conexao.php";
print_r($_POST);
// Verificando se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificando se o parâmetro 'id' foi enviado
    if (isset($_POST['id']) && isset($_POST['nome']) && isset($_POST['idade'])) {
        // Obtendo o ID do registro a ser excluído
        $id = $_POST['id'];
        echo "<script>console.log('Debug Objects: " . $id . "' );</script>";
        // Definindo a consulta DELETE
        $sql = "DELETE FROM pessoa WHERE id = :id";

        // Preparando a consulta
        $stmt = $conn->prepare($sql);

        // Bind dos parâmetros
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Executando a consulta
        $stmt->execute();

        // Verificando se a exclusão foi bem-sucedida
        $rowCount = $stmt->rowCount();
        if ($rowCount > 0) {
            header("Location:index.php");
            exit();
        } else {
            echo "Nenhum registro foi excluído.";
        }
    } else {
        echo "ID não encontrado no formulário.";
    }
}
