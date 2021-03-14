

<?php

    if(isset($_POST['nota1'])){
        $notas =[
            $_POST['nota1']
        ];
    }

    if(isset($_POST['nota2'])){
        $notas =[
            $_POST['nota1'],
            $_POST['nota2']
        ];
    }

    if(isset($_POST['nota3'])){
        $notas =[
            $_POST['nota1'],
            $_POST['nota2'],
            $_POST['nota3']
        ];
    }

    if(isset($_POST['nota4'])){
        $notas =[
            $_POST['nota1'],
            $_POST['nota2'],
            $_POST['nota3'],
            $_POST['nota4']
        ];
    }

    if(isset($_POST['nota5'])){
        $notas =[
            $_POST['nota1'],
            $_POST['nota2'],
            $_POST['nota3'],
            $_POST['nota4'],
            $_POST['nota5']
        ];
    }

    if(isset($_POST['nota6'])){
        $notas =[
            $_POST['nota1'],
            $_POST['nota2'],
            $_POST['nota3'],
            $_POST['nota4'],
            $_POST['nota5'],
            $_POST['nota6']
        ];
    }

    if(isset($_POST['nota7'])){
        $notas =[
            $_POST['nota1'],
            $_POST['nota2'],
            $_POST['nota3'],
            $_POST['nota4'],
            $_POST['nota5'],
            $_POST['nota6'],
            $_POST['nota7']
        ];
    }

    if(isset($_POST['nota8'])){
        $notas =[
            $_POST['nota1'],
            $_POST['nota2'],
            $_POST['nota3'],
            $_POST['nota4'],
            $_POST['nota5'],
            $_POST['nota6'],
            $_POST['nota7'],
            $_POST['nota8']
        ];
    }

    if(isset($_POST['nota9'])){
        $notas =[
            $_POST['nota1'],
            $_POST['nota2'],
            $_POST['nota3'],
            $_POST['nota4'],
            $_POST['nota5'],
            $_POST['nota6'],
            $_POST['nota7'],
            $_POST['nota8'],
            $_POST['nota9']
        ];
    }

    if(isset($_POST['nota10'])){
        $notas =[
            $_POST['nota1'],
            $_POST['nota2'],
            $_POST['nota3'],
            $_POST['nota4'],
            $_POST['nota5'],
            $_POST['nota6'],
            $_POST['nota7'],
            $_POST['nota8'],
            $_POST['nota9'],
            $_POST['nota10']
        ];
    }


    $maior = max($notas);
    $menor = min($notas);


    $soma = 0;   
    foreach($notas as $i){
        $soma = $soma + $i;
    }

    $resultado = $soma / count($notas);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles-global.css" />
    <title>Médias das notas</title>
</head>
<body>
    <form>
        <div class="input-group">
            <input type="text" readonly name="media" id="media" value="A média é: <?=$resultado?>"/>
        </div>
        <div class="input-group">
            <input type="text" readonly name="media" id="media" value="A maior nota é: <?=$maior?>"/>
        </div>
        <div class="input-group">
            <input type="text" readonly name="media" id="media" value="A menor nota é: <?=$menor?>"/>
        </div>
        <button><a href="index.php">Voltar</a> </button>
    </form>
</body>
</html>
    