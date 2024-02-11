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
        <form method="POST" action="/client/form/save">

            <input type="hidden" value="<?= $clientModel->id ?>" name="id" />

            <label for="nome">Nome:</label>
            <input id="nome" name="nome" value="<?= $clientModel->nome ?>" type="text"/>

            <label for="sexo">Sexo:</label>
            <input id="sexo" name="sexo" value="<?= $clientModel->sexo ?>" type="text"/>

            <label for="cpf">CPF:</label>
            <input id="cpf" name="cpf" value="<?= $clientModel->cpf ?>" type="text"/>

            <label for="data_nascimento">Data de Nascimento:</label>
            <input id="data_nascimento" name="data_nascimento" value="<?= $clientModel->data_nascimento ?>" type="date"/>

            <label for="email">E-mail:</label>
            <input id="email" name="email" value="<?= $clientModel->email ?>" type="email"/>

            <label for="tel">Tel:</label>
            <input id="tel" name="tel" value="<?= $clientModel->tel ?>" type="tel"/>

            <label for="cep">CEP:</label>
            <input id="cep" name="cep" value="<?= $clientModel->cep ?>" type="number"/>

            <label for="endereco">Endereço:</label>
            <input id="endereco" name="endereco" value="<?= $clientModel->endereco ?>" type="text"/>

            <label for="bairro">Bairro:</label>
            <input id="bairro" name="bairro" value="<?= $clientModel->bairro ?>" type="text"/>

            <label for="cidade">Cidade:</label>
            <input id="cidade" name="cidade" value="<?= $clientModel->cidade ?>" type="text"/>

            <label for="uf">UF:</label>
            <input id="uf" name="uf" value="<?= $clientModel->uf ?>" type="text"/>

            <button type="submit">Salvar</button>            
        </form>
    </fieldset>
    
</body>
</html>