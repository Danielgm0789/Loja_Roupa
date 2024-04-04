<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container text-center">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Estoque</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include "config/config.php";
            include "config/query.php";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $id = $_POST['id'];

                if ($id < 0 || $id == "") {
                    echo "<h1 class='text-danger m-5'>Insira um id permitido!</h1>";
                    return;
                }

                $sql = selectId($id);

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $tipo = $row['tipo'];
                        $marca = $row['marca'];
                        $preco = $row['preco'];
                        $estoque = $row['estoque'];

                        echo "  <tr>
                                    <td>$id</td>
                                    <td>$tipo</td>
                                    <td>$marca</td>
                                    <td>$preco</td>
                                    <td>$estoque</td>
                                </tr>";
                    }
                } else {
                    echo "<h1 class='text-danger m-5'>Essa roupa não existe!</h1>";
                }

                $conn->close();
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>