<?php
    require_once 'config.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tableaux en PHP</title>
</head>
<body class="bg-light">

<!-- Barre de navigation -->
<?php
include_once "header.php"
?>

<main class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h1><i class="fas fa-envelope-open-text me-3"></i>Contacter BestStudents</h1>
            <p class="lead mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto commodi consequuntur corporis deleniti dicta esse excepturi expedita libero omnis, perspiciatis quidem similique? Atque eos optio quidem quod sed vero.</p>
        </div>
        <div class="col-md-4 bg-white">
            <h2 class="border-primary border-bottom">Horaires du secrétariat</h2>
            <ul>
               <?php foreach ($jours as $cle=>$jour) : ?>
                    <li>
                        <?php
                        if (empty($creneaux[$cle])) {
                          echo "<p><strong>$jour</strong> : Fermé</p>";
                        } else {
                            $phrases = [];
                            foreach ($creneaux[$cle] as $creneau) {
                                $phrases[] = "de <strong>$creneau[0]h</strong> à <strong>$creneau[1]h</strong>";
                            }
                            $horaires = implode(" et ", $phrases);
                            echo "<p><strong>$jour</strong> : ouvert $horaires</p>";
                         }
                        ?>
                    </li>

               <?php endforeach; ?>
            </ul>

        </div>
    </div>

</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/2295de6225.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.8.1/cdn.min.js"
        integrity="sha512-R/Jhpa6TNKZy3VmvYNBe7nQviLLpNXU64csnTYd6cy64donZkeqfqpXSoJRiZ8M1MCgejev/j5NoTx0rZEy+hg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer">
</script>
</body>
</html>
