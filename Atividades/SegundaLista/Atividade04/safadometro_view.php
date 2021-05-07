<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safadomêtro</title>
</head>
<body>
    
<h1>Descubra seu grau de safadeza no nosso novo safadomêtro</h1>

<form method = "post" action = "index.php">
    <label for ="diaNascimento">Insira o dia que você nasceu:</label>
        <input type="text" name="diaNascimento" required>
    <br><br>
    <label for ="mesNascimento">Insira o mês que você nasceu:</label>
        <input type="text" name="mesNascimento" required>
    <br><br>
    <label for ="anoNascimento">Insira o ano que você nasceu:</label>
        <input type="text" name="anoNascimento" required>
    <br><br>

        <input type="submit">
</form>


<h3>
<?php
if(isset($_POST['diaNascimento'],$_POST['mesNascimento'],$_POST['anoNascimento'])){
    echo Safadao($dia,$mes,$ano);
}

?>

</h3>


</body>
</html>