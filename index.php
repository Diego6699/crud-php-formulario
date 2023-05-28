<?php include_once "./config/conexao.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>

    <?php include "./includes/header.php" ?>
    <main>
        <div class="main-container">
            <div class="container">
                <div class="botao-adicionar-container">
                    <div class="botao-adicionar">
                        <button><a href="formulario" target="_blank" rel="noopener noreferrer">Adiconar</a></button>
                    </div>
                </div>

                <table border="1px">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Idade</th>
                            <th>Editar</th>
                            <th>Apagar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Query SQL para selecionar todos os itens
                        $sql = "SELECT * FROM pessoa";
                        // Prepara a query SQL
                        $stmt = $conn->prepare($sql);
                        // Executa a query
                        $stmt->execute();
                        // Obtém os resultados
                        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        // Processa os resultados
                        foreach ($results as $row) :
                            // Acesso aos campos do resultado
                            $id = $row['id'];
                            $nome = $row['nome'];
                            $idade = $row['idade'];

                            // Faça o que precisar com os dados...
                        ?>
                            <tr>
                                <td><?= $id ?></td>
                                <td><?= $nome ?></td>
                                <td><?= $idade ?></td>
                                <td>
                                    <form action="editar.php" method="post">
                                        <input type="hidden" name="id" value="<?= $id ?>">
                                        <input type="submit" value="Editar">
                                    </form>
                                </td>
                                <td>
                                    <form action="deletar.php" method="post">
                                        <input type="hidden" name="id" value="<?= $id ?>">
                                        <input type="hidden" name="nome" value="<?= $nome ?>">
                                        <input type="hidden" name="idade" value="<?= $idade ?>">
                                        <input type="submit" value="Apagar">
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <?php include "./includes/footer.php";
    $conn = null;
    ?>
</body>

</html>