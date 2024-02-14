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

    <title>Cadastro de Cliente</title>     
</head>
<body>
    <div class="modal-body">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 bg-warning justify-content-between p-3">
                    CADASTRO DE CLIENTE
                </div>
                
                <div class="col-md-2 bg-warning  justify-content-between p-3 d-flex">
                    <button class="btn btn-sm btn-dark " data-toggle="modal" data-keyboard="false" onclick="window.location.href ='/client'">FECHAR</button>                   
                </div>
            </div>
        </div>

        <fieldset>            
            <form method="post" id="insert_form" action="/client/form/save">

                <div class="row">
                    <div class="col-md-10 col-sm-12">
                        <label for="nome" class="col-form-label">Nome:</label>
                        <input id="nome" name="nome" maxlength="80" class="form-control" value="<?= $clientModel->nome ?>" type="text"/>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <label for="sexo" class="col-form-label">Sexo (M/F):</label>
                        <input id="sexo" name="sexo" value="<?= $clientModel->sexo ?>" maxlength="1" class="form-control" type="text"/>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <label for="cpf" class="col-form-label">CPF:</label>
                        <input id="cpf" name="cpf" maxlength="14" class="form-control" value="<?= $clientModel->cpf ?>" type="text"/>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <label for="data_nascimento"  class="col-form-label">Data de Nascimento:</label>
                        <input id="data_nascimento" name="data_nascimento" class="form-control" value="<?= $clientModel->data_nascimento ?>" type="date"/>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="email" class="col-form-label">E-mail:</label>
                        <input id="email" name="email" maxlength="45" class="form-control" value="<?= $clientModel->email ?>" type="email"/>
                    </div>         
                </div>
                
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <label for="tel" class="col-form-label">Tel:</label>
                        <input id="tel" name="tel" value="<?= $clientModel->tel ?>" type="tel" maxlength="11" class="form-control -10"/> 
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <label for="cep" class="col-form-label">CEP:</label>
                        <input placeholder="somente nº" id="cep" name="cep" value="<?= $clientModel->cep ?>" type="text" maxlength="9" class="form-control -10"/> 
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <label for="endereco" class="col-form-label">Endereço:</label>
                        <input id="endereco" name="endereco" class="form-control" maxlength="255" value="<?= $clientModel->endereco ?>" type="text"/>                   
                    </div>         
                </div>
                
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <label for="bairro" class="col-form-label">Bairro:</label>
                        <input id="bairro"  maxlength="45" class="form-control" name="bairro" value="<?= $clientModel->bairro ?>" type="text"/>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <label for="cidade" class="col-form-label">Cidade:</label>
                        <input id="cidade"  maxlength="80" class="form-control" name="cidade" value="<?= $clientModel->cidade ?>" type="text"/>
                    </div>
                    <div class="col-md-2 col-sm-12">
                        <label for="uf" class="col-form-label">UF:</label>
                        <input id="uf" name="uf" class="form-control" maxlength="2" value="<?= $clientModel->uf ?>" type="text"/>
                    </div>         
                </div>

                <div class="modal-footer">
                    <button type="submit">Salvar</button>
                </div> 
                
                <input type="hidden"  value="<?= $clientModel->id ?>" name="id" />
            </form>
        </fieldset>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script type="text/javascript">    
        $(document).ready(function(){   
            $('#cep').mask('00000-000');   
            $('#tel').mask('(00) 00000-0000');    
            $('#cpf').mask('000.000.000-00', {reverse: true});    
        });
    </script>

</body>

</html>