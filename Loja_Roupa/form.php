<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>loja Roupa</title>
</head>

<body class="m-5">
    <div class="main-buttons text-center m-5">
        <button type="button" class="btn btn-outline-secondary" onclick="show('insert')">Inserir</button>
        <button type="button" class="btn btn-outline-secondary" onclick="show('delete')">Delete</button>
        <button type="button" class="btn btn-outline-secondary" onclick="show('estoque-update')">Atualizar o Estoque</button>
        <button type="button" class="btn btn-outline-secondary" onclick="show('preco-update')">Atualizar o Preço</button>
        <button type="button" class="btn btn-outline-secondary" onclick="show('todos')">Selecionar por Todos</button>
        <button type="button" class="btn btn-outline-secondary" onclick="show('id')">Selecionar por Id</button>
        <button type="button" class="btn btn-outline-secondary" onclick="show('tipo')">Selecionar por Tipo</button>
        <button type="button" class="btn btn-outline-secondary" onclick="show('marca')">Selecionar por Marca</button>
        <button type="button" class="btn btn-outline-secondary" onclick="show('preco')">Selecionar por Preço</button>
    </div>

    <!--Inserir-->
    <form action="DB/insert.php" method="POST" id="insert" class="form text-center" style="display: none;">
        <div class="form-floating mb-3">
            <select name="tipo" id="select-tipo" class="form-select">
                <option selected>Selecione um tipo de roupa.</option>
                <option value="Blusa">Blusa</option>
                <option value="Regata">Regata</option>
                <option value="Calça">Calça</option>
                <option value="Meia">Meia</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Moletom">Moletom</option>
                <option value="Blusa de frio">Blusa de frio</option>
                <option value="Cueca">Cueca</option>
                <option value="Cinto">Cinto</option>
                <option value="Shorts">Shorts</option>
                <option value="Boné">Boné</option>
                <option value="Vestido">Vestido</option>
                <option value="Saia">Saia</option>
                <option value="Jaqueta">Jaqueta</option>
                <option value="Sobretudo">Sobretudo</option>
                <option value="Camiseta Polo">Camiseta Polo</option>
                <option value="Colete">Colete</option>
                <option value="Macacão">Macacão</option>
                <option value="Suéter">Suéter</option>
                <option value="Camisola">Camisola</option>
                <option value="Legging">Legging</option>
            </select>
            <label for="select-tipo">Tipo:</label>
        </div>

        <div class="form-floating mb-3">
            <select name="marca" id="select-marca" class="form-select">
                <option selected>Selecione uma marca de roupa.</option>
                <option value="Adidas">Adidas</option>
                <option value="Nike">Nike</option>
                <option value="Puma">Puma</option>
                <option value="New Balance">New Balance</option>
                <option value="New Era">New Era</option>
                <option value="Gucci">Gucci</option>
                <option value="Armani">Armani</option>
                <option value="Calvin Klein">Calvin Klein</option>
                <option value="Versace">Versace</option>
                <option value="Air Jordan">Air Jordan</option>
                <option value="Ralph Lauren">Ralph Lauren</option>
                <option value="Tommy Hilfiger">Tommy Hilfiger</option>
                <option value="Levi's">Levi's</option>
                <option value="H&M (Hennes & Mauritz)">H&M (Hennes & Mauritz)</option>
                <option value="Zara">Zara</option>
                <option value="Under Armour">Under Armour</option>
                <option value="Lacoste">Lacoste</option>
                <option value="Balenciaga">Balenciaga</option>
                <option value="Burberry">Burberry</option>
                <option value="The North Face">The North Face</option>
            </select>
            <label for="select-marca">Marca:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" name="preco" id="input-preco" class="form-control">
            <label for="input-preco">Preço:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" name="estoque" id="input-estoque" class="form-control">
            <label for="input-estoque">Quantidade em estoque:</label>
        </div>
        <button type="submit" class="btn btn-outline-success btn-lg w-100">Inserir</button>
    </form>

    <!--Delete-->
    <form action="DB/delete.php" method="POST" id="delete" class="form" style="display: none;">
        <div class="form-floating mb-3">
            <input type="number" name="id" id="delete-id" class="form-control">
            <label for="delete-id">ID:</label>
        </div>
        <button type="submit" class="btn btn-outline-success btn-lg w-100">Deletar</button>
    </form>

    <!--Update Estoque-->
    <form action="DB/updateEstoque.php" method="POST" id="estoque-update" class="form" style="display: none;">
        <div class="form-floating mb-3">
            <input type="number" name="id" id="update-id" class="form-control">
            <label for="update-id">ID:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" name="estoque" id="update-estoque" class="form-control">
            <label for="update-estoque">Estoque:</label>
        </div>
        <button type="submit" class="btn btn-outline-success btn-lg w-100">Atualizar</button>
    </form>

    <!--Update Preco-->
    <form action="DB/updatePreco.php" method="POST" id="preco-update" class="form" style="display: none;">
        <div class="form-floating mb-3">
            <input type="number" name="id" id="update-id" class="form-control">
            <label for="update-id">ID:</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" name="preco" id="update-preco" class="form-control">
            <label for="update-preco">Preço:</label>
        </div>
        <button type="submit" class="btn btn-outline-success btn-lg w-100">Atualizar</button>
    </form>

    <!--Select All-->
    <form action="DB/selectAll.php" method="POST" id="todos" class="form" style="display: none;">
        <button type="submit" class="btn btn-outline-success btn-lg w-100">Selecionar todos</button>
    </form>

    <!--Select by Id-->
    <form action="DB/selectId.php" method="POST" id="id" class="form" style="display: none;">
        <div class="form-floating mb-3">
            <input type="number" name="id" id="select-id" class="form-control">
            <label for="select-id">ID:</label>
        </div>
        <button type="submit" class="btn btn-outline-success btn-lg w-100">Pesquisar</button>
    </form>
    
    <!--Select by Tipo-->
    <form action="DB/selectTipo.php" method="POST" id="tipo" class="form" style="display: none;">
        <div class="form-floating mb-3">
            <select name="tipo" id="select-tipo" class="form-select">
                <option selected>Selecione um tipo de roupa.</option>
                <option value="Blusa">Blusa</option>
                <option value="Regata">Regata</option>
                <option value="Calça">Calça</option>
                <option value="Meia">Meia</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Moletom">Moletom</option>
                <option value="Blusa de frio">Blusa de frio</option>
                <option value="Cueca">Cueca</option>
                <option value="Cinto">Cinto</option>
                <option value="Shorts">Shorts</option>
                <option value="Boné">Boné</option>
                <option value="Vestido">Vestido</option>
                <option value="Saia">Saia</option>
                <option value="Jaqueta">Jaqueta</option>
                <option value="Sobretudo">Sobretudo</option>
                <option value="Camiseta Polo">Camiseta Polo</option>
                <option value="Colete">Colete</option>
                <option value="Macacão">Macacão</option>
                <option value="Suéter">Suéter</option>
                <option value="Camisola">Camisola</option>
                <option value="Legging">Legging</option>
            </select>
            <label for="select-tipo">Tipo:</label>
        </div>
        <button type="submit" class="btn btn-outline-success btn-lg w-100">Pesquisar</button>
    </form>

    <!--Select by Marca-->
    <form action="DB/selectMarca.php" method="POST" id="marca" class="form" style="display: none;">
        <div class="form-floating mb-3">
            <select name="marca" id="select-marca" class="form-select">
                <option selected>Selecione uma marca de roupa.</option>
                <option value="Adidas">Adidas</option>
                <option value="Nike">Nike</option>
                <option value="Puma">Puma</option>
                <option value="New Balance">New Balance</option>
                <option value="New Era">New Era</option>
                <option value="Gucci">Gucci</option>
                <option value="Armani">Armani</option>
                <option value="Calvin Klein">Calvin Klein</option>
                <option value="Versace">Versace</option>
                <option value="Air Jordan">Air Jordan</option>
                <option value="Ralph Lauren">Ralph Lauren</option>
                <option value="Tommy Hilfiger">Tommy Hilfiger</option>
                <option value="Levi's">Levi's</option>
                <option value="H&M (Hennes & Mauritz)">H&M (Hennes & Mauritz)</option>
                <option value="Zara">Zara</option>
                <option value="Under Armour">Under Armour</option>
                <option value="Lacoste">Lacoste</option>
                <option value="Balenciaga">Balenciaga</option>
                <option value="Burberry">Burberry</option>
                <option value="The North Face">The North Face</option>
            </select>
            <label for="select-marca">Marca:</label>
        </div>
        <button type="submit" class="btn btn-outline-success btn-lg w-100">Pesquisar</button>
    </form>

    <!--Select Preco-->
    <form action="DB/selectPreco.php" method="POST" id="preco" class="form" style="display: none;">
        <div class="text-center mb-3">
            <div class="mb-3">
                <div class="form-check form-check-inline">
                    <input type="radio" id="radio1" name="radio" class="form-check-input" value="menor" checked>
                    <label class="form-check-label" for="radio1">Menor que</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" id="radio2" name="radio" class="form-check-input" value="maior">
                    <label class="form-check-label" for="radio2">Maior que</label>
                </div>
            </div>
            <div class="mb-3">
                <input type="number" name="number" class="w-25" min="0" max="1000" value="0" oninput="this.form.range.value=this.value" /> <br><br>
                <input type="range" name="range" class="w-50" min="0" max="1000" value="0" oninput="this.form.number.value=this.value" />
            </div>
        </div>
        <button type="submit" class="btn btn-outline-success btn-lg w-100">Pesquisar</button>
    </form>

    <script src="script.js"></script>
</body>
</html>