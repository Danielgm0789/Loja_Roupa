<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid text-center">
        <?php
        include "config/config.php";
        include "config/query.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $id = $_POST['id'];

            if ($id < 1 || $id == "") {
                echo "<h1 class='text-danger m-5'>Insira um id permitido!</h1>";
                return;
            }
            if (!$conn->query(selectId($id))->num_rows > 0) {
                echo "<h1 class='text-danger m-5'>Não existe esse produto!</h1>";
                return;
            }

            $sql = delete($id);

            if ($conn->query($sql) === TRUE) {
                echo "<h1 class='text-success m-5'>Deletado com sucesso!</h1>";
            } else {
                echo "<h1 class='text-danger m-5'>Erro: " . $conn->error . "</h1>";
            }

            $conn->close();
        }
        ?>
    </div>
</body>
</html>