<?php

include 'header.php';

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de Parâmetros via POST</title>
</head>
<body>
<?php
if (!empty($_POST['firstname']) && !empty($_POST['cpf'])) {
    $data = array(
        'Nome' => $_POST['firstname'],
        'Sobrenome' => $_POST['lastname'],
        'CPF' => $_POST['cpf'],
    );
    
    $json_data = json_encode($data);
    $filename = "dados.txt";
    $handle = fopen($filename, "a");
    fwrite($handle, $json_data . "\n");
    fclose($handle);
    
    echo "Dados salvos com sucesso!";
    
} else {
    echo "Campos Nome e CPF estão vazios!";
}
?>
</body>
</html>