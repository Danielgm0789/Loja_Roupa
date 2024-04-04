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

            $tipo = $_POST['tipo'];
            $marca = $_POST['marca'];
            $preco = $_POST['preco'];
            $estoque = $_POST['estoque'];

            if ($tipo == "Selecione um tipo de roupa." || $marca == "Selecione uma marca de roupa.") {
                echo "<h1 class='text-danger m-5'>Você precisa escolher um tipo de roupa e uma marca de roupa!</h1>";
                return;
            }
            if ($preco < 0 || $preco == "") {
                echo "<h1 class='text-danger m-5'>Insira um preço permitido!</h1>";
                return;
            }
            if ($estoque < 0 || $estoque == "") {
                echo "<h1 class='text-danger m-5'>Insira um numero de estoque permitido!</h1>";
                return;
            }
            if ($conn->query(selectTipoMarca($tipo, $marca))->num_rows > 0) {

                $result = $conn->query(selectTipoMarca($tipo, $marca));
                
                while ($row = $result->fetch_assoc()) {
                    $id_select = $row['id'];
                    $estoque_select = $row['estoque'];

                    $sql = updateEstoque($id_select, $estoque_select + $estoque);

                    if ($conn->query($sql) === TRUE) {
                        echo "<h1 class='text-success m-5'>Como já existe essa roupa no banco de dados, o estoque foi atualizado!</h1>";
                    } else {
                        echo "<h1 class='text-danger m-5'>Erro: " . $conn->error . "</h1>";
                    }
                }
                return;
            }

            $sql = insert($tipo, $marca, $preco, $estoque);

            if ($conn->query($sql) === TRUE) {
                echo "<h1 class='text-success m-5'>Inserido com sucesso!</h1>";
            } else {
                echo "<h1 class='text-danger m-5'>Erro: " . $conn->error . "</h1>";
            }

            $conn->close();
        }
        ?>
    </div>
</body>
</html>