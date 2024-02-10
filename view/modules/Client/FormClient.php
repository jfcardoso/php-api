<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <style>
        label, input{
            display: block;
        }
    </style>    
</head>
<body>
    <fieldset>
        <legend>Cadastro de Cliente</legend>
        <form method="post" action="/client/form/save">

            <label for="name">Name:</label>
            <input id="name" name="name" type="text"/>

            <label for="sexo">Sexo:</label>
            <input id="sexo" name="sexo" type="text"/>

            <label for="cpf">CPF:</label>
            <input id="cpf" name="cpf" type="text"/>

            <label for="data_nascimento">Data de Nascimento:</label>
            <input id="data_nascimento" name="data_nascimento" type="date"/>

            <label for="email">E-mail:</label>
            <input id="email" name="email" type="email"/>

            <label for="tel">Tel:</label>
            <input id="tel" name="tel" type="tel"/>

            <label for="cep">CEP:</label>
            <input id="cep" name="cep" type="number"/>

            <label for="endereco">Endereço:</label>
            <input id="endereco" name="endereco" type="text"/>

            <label for="bairro">Bairro:</label>
            <input id="bairro" name="bairro" type="text"/>

            <label for="cidade">Cidade:</label>
            <input id="cidade" name="cidade" type="text"/>

            <label for="uf">UF:</label>
            <input id="uf" name="uf" type="text"/>

            <button type="submit">Salvar</button>            
        </form>
    </fieldset>
    
</body>
</html>