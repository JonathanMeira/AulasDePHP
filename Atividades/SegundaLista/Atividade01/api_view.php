<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pokemons - API consumption</title>
</head>
<body>

<?php foreach($pokemons as $pokemon ) : ?>
<div class= "card">
    <img src="<?= $pokemon['image'] ?>">
    <h5><?= $pokemon['name'] ?></h5>
    <p>height: <?= $pokemon['height'] ?></p>
    <p>weitht: <?=$pokemon['weight'] ?></p>
    <p>Abilities:</p>
    <ul>
    <?php foreach($pokemon['abilities'] as $key)  : ?>
        <li><?= $key['ability']['name'] ?></li>
    <?php endforeach;?>
    </ul>

</div>
<?php endforeach;?>

    
</body>
</html>