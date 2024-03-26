<?php

include 'header.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        .btn-meu{margin-top: 10px;}
    </style>
    <title>Cadastro de Pessoas</title>
</head>

<body>
    <form action="cadrealizado.php" method="post">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Primeiro nome</label>
                <input type="text" class="form-control" name="firstname" placeholder="Nome" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>Sobrenome</label>
                <input type="text" class="form-control" name="lastname" placeholder="Sobrenome" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>CPF</label>
                <input type="text" class="form-control" name="cpf" placeholder="000.000.000-00" required>
            </div>
        <input class="btn btn-primary btn-meu" type="submit" value="Enviar">
    </form>
</body>

</html>