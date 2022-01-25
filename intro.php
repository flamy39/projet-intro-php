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
    <main class="container mt-3">
        <h2 class="text-primary fw-bold border border-primary" >Instructions de base</h2>
        <h3>Chaines de caractères</h3>
        <?php
            echo 'BTS SIO1';
        ?>
        <?= 'BTS SIO1' ?>

        <?php
            echo '<p>BTS SIO1</p>';
        ?>
        <?= '<p>BTS SIO1</p>' ?>

        <h3>Variables</h3>
        <?php
            $nom="Dupond";
            echo "$nom</p>";
        ?>

        <?php
            $nom="Dupond";
            echo '<h1>Nom de la personne</h1>';
            echo "<p class='text-primary'>$nom</p>";
        ?>

        <?php
            $nom="Dupond";
        ?>
        <h1>Nom de la personne</h1>
        <?= "<p class='text-primary'>$nom</p>" ?>

       <!-- if -->
    <h2 class="text-primary fw-bold border border-primary" >Condition if</h2>
    <h3>Exemple 1</h3>
    <?php
        $age = 18;
        if ($age >= 18) {
            echo "<p>La personne est majeure</p>";
        }
    ?>

    <h3>Exemple 2</h3>
    <?php
        $age = 18;
        if ($age >= 18) { ?>
            <p>La personne est majeure</p>
        <?php } ?>

    <h3>Exemple 3 : if syntaxe alternative</h3>
    <?php
          $age = 18;
          if ($age >= 18): ?>
           <p>La personne est majeure</p>
        <?php endif; ?>

    <?php
        $age = 18;
        if ($age >= 18):
          echo "<p>La personne est majeure</p>";
        endif;
    ?>


    <!-- Boucle -->
    <h2 class="text-primary fw-bold border border-primary">Boucle</h2>
    <?php
        for($i=0;$i<4;$i++) {
            echo "<p>Salut</p>";
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
    </main>
</body>
</html>