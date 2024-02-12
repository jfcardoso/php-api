<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>
<body>

    <table>
        <tr>
            <th></th>
            <th>Id</th>
            <th>Nome</th>
            <th>Sexo</th>
            <th>CPF</th>
            <th>Data Nascimento</th>
            <th>E-mail</th>
            <th>Tel</th>
            <th>CEP</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>UF</th>
        </tr>

        <?php foreach($clientModel->rows as $item): ?>
            <tr>
                <td><a href="/client/delete?id=<?= $item->id ?>">X</a></td>
                <td><?= $item->id ?></td>
                <td><a href="/client/form?id=<?= $item->id ?>"><?= $item->nome ?></a></td>
                <td><?= $item->sexo ?></td>
                <td><?= $item->cpf ?></td>
                <td><?= $item->data_nascimento ?></td>
                <td><?= $item->email ?></td>
                <td><?= $item->tel ?></td>
                <td><?= $item->cep ?></td>
                <td><?= $item->endereco ?></td>
                <td><?= $item->bairro ?></td>
                <td><?= $item->cidade ?></td>
                <td><?= $item->uf ?></td>
            </tr>
        <?php endforeach ?>
        
        <?php if(count($clientModel->rows) == 0): ?>
            <tr>
                <td colspan="13">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>
    </table>
    
</body>
</html>