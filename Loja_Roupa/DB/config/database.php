<?php

include "config.php";
include "query.php";

$tipos = ['Blusa', "Regata" , "Calça", "Meia", "Bermuda", "Moletom", "Blusa de frio", "Cueca", "Cinto", "Shorts", "Boné"];
$marcas = ["Adidas", "Nike", "Puma", "New Balance", "New Era", "Gucci", "Armani", "Calvin Klein", "Versace", "Air Jordan"];

function random_float($min, $max) {
    return random_int($min, $max - 1) + (random_int(0, PHP_INT_MAX - 1) / PHP_INT_MAX );
}

foreach ($tipos as $tipo) {
    foreach ($marcas as $marca) {
        $preco = number_format(random_float(80, 1000), 2);
        $estoque = random_int(0, 100);

        $sql = insert($tipo, $marca, $preco, $estoque);

        if ($conn->query($sql) === TRUE) {
            echo "Registro inserido com sucesso! <br>";
        } else {
            echo "Erro ao inserir registro: " . $conn->error;
        }
    }
}
?>