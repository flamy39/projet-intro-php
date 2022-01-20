<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Intro PHP</title>
</head>
<body>

    <?php
        $nom="Dupond";
    ?>
    <h1>Nom de la personne</h1>
    <?= "<p class='text-primary'>$nom</p>" ?>
    ?>

    <?php
        for($i=0;$i<4;$i++) {
            echo "<p> Salut </p>";
        }
    ?>
    <?php
        for($i=0;$i<4;$i++) { ?>
            <p><?= $i ?></p>
       <?php  } ?>

    <?php
        for($i=0;$i<4;$i++): ?>
            <p><?= 'Salut' ?></p>
            <p><?= "texte $i" ?>
        <?php endfor;?>

    <?php
        // Déclaration d'un tableau
        $noms = ["Jean", "Paul", "Pierre"];
        echo "<ul>";
        foreach ($noms as $nom ) {
            echo "<li>$nom</li>";
        }
        echo "</ul>";
    ?>,

</body>
</html>