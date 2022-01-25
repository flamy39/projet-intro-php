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
    <title>Tableaux en PHP</title>
</head>
<body class="bg-light">

<!-- Barre de navigation -->
<?php
    include_once "header.php"
?>

<main class="container mt-3">
    <h1 class="mb-5"><i class="fas fa-user-graduate me-3"></i>Liste des étudiants en BTS SIO</h1>
    <div class="d-flex justify-content-between align-items-center">
        <p class="fs-4">Nombre d'étudiants <span class="badge bg-success"><?= sizeof($etudiants) ?> </span></p>
        <button class="btn btn-success btn-lg"><i class="fas fa-plus-circle me-2"></i>Ajouter un étudiant</button>
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
                    <a href="#" class="btn btn-primary me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                    </a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#supprimerUtilisateurModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>

                    </button>
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
