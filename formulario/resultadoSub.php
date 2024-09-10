<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Subtração</title>
</head>
<body>
<?php
//incluindo o arquivo de funções
include 'funçoes.php';

//verifica se os valores foram enviados no formulario
if(isset($_POST['enviar'])){
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    //Chamando a função somar 
    $resultado = subtracao($numero1, $numero2);

    echo "<p>A Diferença de $numero1 e $numero2 é igual a $resultado</p>";
}else{
    echo "Por favor, preencha o formulario e envie os valores";
}




?>
</body>
</html>