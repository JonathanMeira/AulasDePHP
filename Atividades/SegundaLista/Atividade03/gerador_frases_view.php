<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Fake News</title>
</head>

<body>

<h1>Descubra a sua Fake News</h1>
    <form method="post" action="index.php">
        <label for ="primeiraLetra">Insira a primeira letra do seu nome:</label>
        <input type="text" name="primeiraLetra" maxlenght="1" required>
        <br><br>
        <label for ="diaDoMes">Insira o mês que você nasceu:</label>
        <input type="text" name="diaDoMes" required>
        <br><br>
        <label for ="diaNascimento">Insira o dia do seu nascimento:</label>
        <input type="text" name="diaNascimento" required>
        <br><br>
        <input type="submit">
    </form>


    <h3><?php
     if(isset($_POST['primeiraLetra'], $_POST['diaDoMes'], $_POST['diaNascimento'])){
       echo Gerarfrase($vetor1,$vetor2,$vetor3);
     }
     
     ?></h3>

</body>

</html>