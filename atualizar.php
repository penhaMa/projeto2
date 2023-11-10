<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <?php include 'cadastro.php'?>
    <form method="POST">
        <label>Escolha o campo que deseja atualizar: </label>
        <select name="opcao">
            <option value="1">Nome</option>
            <option value="2">Telefone</option>
            <option value="3">Endereco</option>
            <option value="4">Cidade</option>
        </select>
        <br><br>

        <label>Dado: </label>
        <input type="text" id="dado" name="dado"/>

        <button> Atualizar
            <?php
                
            ?>
        </button>
    </form>
</body>
</html>