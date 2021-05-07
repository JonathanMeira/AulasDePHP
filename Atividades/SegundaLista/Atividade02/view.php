<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicação Clima-tempo></title>
</head>
<body>
    <h1>Descubra o clima da sua cidade inserindo o nome dela abaixo:</h1>

    <form method="get" action = "index.php">
        <input type="text" name = "cidade"></input>
        <input type="submit">
    </form>
    
    <hr>
    <ul>
    <li><h2>Cidade: <?= $nome ?></h2></li>
    <li>Temperatura: <?= $temperatura ?></li>
    <li>Sensação térmica: <?= $sensacao?></li>
    <li>Umidade: <?= $umidade?></li>
    <li>Velocidade do vento: <?= $velocidadeDoVento?></li>
    </ul>
    <hr>
    <h2>Confira algumas cidades: </h2>
    <ul>
    <li><a href="index.php?cidade=Araquari">Araquari:</a></li>
    <li><a href="index.php?cidade=Foz+Do+Iguaçu">Foz do Iguaçu</a></li>
    </ul>



</body>
</html>