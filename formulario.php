<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulario</title>
</head>

<body>
    <?php include_once "./includes/header.php" ?>
    <main>
        <div class="main-container">
            <div class="container">
                <form action="insert.php" method="post">
                    <label for="nome">nome: </label>
                    <input type="text" name="nome" id="nome"><br>
                    <label for="idade">idade: </label>
                    <input type="number" name="idade" id="idade"><br>
                    <input type="submit" value="Salvar">
                </form>
            </div>
        </div>
    </main>
    <?php include_once "./includes/footer.php" ?>
</body>

</html>