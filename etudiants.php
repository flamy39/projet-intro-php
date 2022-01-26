<?php
// Déclaration d'un tableau de personnes
$etudiants = [
    ["id" => 2, "nom" => "Martin", "prenom" => "Pierre", "email" => "pierremartin@php.fr", "promo" => "BTS SIO1"],
    ["id" => 1, "nom" => "Dupond", "prenom" => "Jean", "email" => "jeandupond@php.fr", "promo" => "BTS SIO1"],
    ["id" => 3, "nom" => "Durand", "prenom" => "Anne", "email" => "annedurand@php.fr", "promo" => "BTS SIO2"],
    ["id" => 4, "nom" => "Doe", "prenom" => "John", "email" => "johndoe@php.fr", "promo" => "BTS SIO2"],
    ["id" => 5, "nom" => "Thomas", "prenom" => "Marie", "email" => "mariethomas@php.fr", "promo" => "BTS SIO1"]
];

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Tableaux en PHP</title>
</head>
<body>

<!-- Barre de navigation -->
<?php
    include_once "header.php"
?>

<main class="container mt-3">
    <h1 class="mb-5"><i class="fas fa-user-graduate me-3 text-warning"></i>Liste des étudiants en BTS SIO</h1>
    <div class="d-flex justify-content-between align-items-center">
        <p class="fs-4">Nombre d'étudiants <span class="badge bg-success"><?= sizeof($etudiants) ?> </span></p>
        <button class="btn btn-success btn-lg"> <i class="bi bi-person-plus me-2"></i>Ajouter un étudiant</button>
    </div>

    <div class="table-responsive bg-white mt-5 ">
    <table class="table table-hover mt-3">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Promo</th>
            <th scope="col" class="text-center">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Parcours du tableau et affichage
        foreach ($etudiants as $etudiant) : ?>
            <tr>
                <?php
                    $couleur = $etudiant["promo"] === "BTS SIO1" ? 'table-primary' : 'table-secondary';
                ?>
                <td><?= $etudiant["id"] ?></td>
                <td class="<?= $couleur ?>"><?= $etudiant["prenom"] ?></td>
                <td <?php if ($etudiant["promo"] === "BTS SIO1") echo "class='table-primary'"; else echo "class='table-secondary'"  ?>><?= $etudiant["nom"] ?></td>
                <td><?= $etudiant["email"] ?></td>
                <td><?= $etudiant["promo"] ?></td>
                <td class="d-flex justify-content-center">
                    <a href="#" class="btn btn-primary me-2"><i class="bi bi-pencil-square"></i></a>
                    <a href="#" class="btn btn-danger me-2"><i class="bi bi-trash"></i></a>

                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>

    </table>
    </div>
    <!-- Déclaration de la fenêtre modale -->
    <div class="modal fade" id="supprimerUtilisateurModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Suppression d'un utilisateur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Etes-vous sûr de vouloir supprimer l'utilisateur ? </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-danger">Supprimer</button>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- footer -->

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

