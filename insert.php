<?php

include "./config/conexao.php";

if (!empty($_POST)) {
    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO pessoa (nome, idade) VALUES (:nome, :idade)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':idade', $idade);

    // insert a row
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $stmt->execute();

    echo "New records created successfully";
    $conn = null;
}
$conn = null;
