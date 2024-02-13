<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS V4.5.3-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    <!-- IMPORTANDO PLUGIN DO SELECT2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />

    <!-- IMPORTANDO PLUGIN DO font-awesome/5.15.3 PARA ICONES VISUALIZAR - EDITAR - EXCLUIR-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <!-- EXTENSÃO PARA ICONES SVG W3C.ORG -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>

    <title>Listagem de Clientes</title>

    <!--<style> label, input{ display: block; } </style> -->    
</head>
<body>

<table class="table table-bordered table-hover table-sm table-responsive-xl resultado_cliente">
    <thead>
        <tr class="bg-dark text text-white">

            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">SEXO</th>
            <th scope="col">CPF</th>
            <th scope="col">DATA NASCIMENTO</th>
            <th scope="col">EMAIL</th>
            <th scope="col">TELEFONE</th>                        
            <th scope="col">CEP</th>           
            <th scope="col">ENDEREÇO</th>
            <th scope="col">BAIRRO</th>
            <th scope="col">CIDADE</th>
            <th scope="col">UF</th>
            <th scope="col" class="text text-center" colspan="2">AÇÕES</th>
        </tr>
    </thead>
    
    <?php foreach($clientModel->rows as $item): ?>       
       
        <tbody>
            <tr>           
                <td><?= $item->id ?></td>
                <td><?= $item->nome ?></a></td>
                <td><?= $item->sexo ?></td>
                <td><?= $item->cpf ?></td>               
                <td><?= $item->data_nascimento = date('d/m/Y',  strtotime($item->data_nascimento)) ?></td>        
                <td><?= $item->email ?></td>
                <td><?= $item->tel ?></td>
                <td><?= $item->cep ?></td>
                <td><?= $item->endereco ?></td>
                <td><?= $item->bairro ?></td>
                <td><?= $item->cidade ?></td>
                <td><?= $item->uf ?></td>   
                <td class="text text-center">
                    <a href="/client/form?id=<?= $item->id ?>"data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#editarCliente">
                        <i class="far fa-edit text text-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"></i></a>
                </td>
                <td class="text text-center">
                    <a href="/client/delete?id=<?= $item->id ?>" onClick="return confirm('Deseja realmente excluir o cliente?')">
                        <i class="far fa-trash-alt text text-dark" data-bs-toggle="tooltip" data-bs-placement="top" title="Excluir"></i></a>
                </td>
            </tr>
        </tbody>        
    <?php endforeach ?>

    <?php if(count($clientModel->rows) == 0): ?>
            <tr>
                <td colspan="13">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>
</table>   
</body>
</html>