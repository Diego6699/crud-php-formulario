<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    }
}
?>

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
    <?php include_once "./includes/header.php" ?>
    <div class="main-container">
        <div class="container">
            <form action="update.php" method="post">
                <input type="hidden" name="id" value="<?= $id ?>">
                <label for="nome">nome: </label>
                <input type="text" name="nome" id="nome"><br>
                <label for="idade">idade: </label>
                <input type="number" name="idade" id="idade"><br>
                <input type="submit" value="Alterar dados">
            </form>
        </div>
    </div>

    <?php include_once "./includes/footer.php" ?>
</body>

</html>