<?php
// Déclaration d'un tableau de personnes
$personnes = [
    ["id" => 1, "prenom" => "Dupond", "nom" => "Jean", "email" => "jeandupond@php.fr"],
    ["id" => 2, "prenom" => "Martin", "nom" => "Pierre", "email" => "pierremartin@php.fr"],
    ["id" => 3, "prenom" => "Durand", "nom" => "Anne", "email" => "annedurand@php.fr"],
    ["id" => 4, "prenom" => "Doe", "nom" => "John", "email" => "jondoe@php.fr"]
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
<body>
<div class="container">
    <h1>Liste des personnes</h1>
    <table class="table table-responsive table-striped table-bordered mt-3 w-50 caption-top">
        <caption>Nombre d'utilisateurs <span class="badge bg-success"><?= sizeof($personnes) ?> </span></caption>
        <thead>
        <tr>
            <th scope=" col">ID</th>
            <th scope="col">prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Parcours du tableau et affichage
        foreach ($personnes as $personne) { ?>
            <tr>
                <td><?= $personne["id"] ?></td>
                <td><?= $personne["prenom"] ?></td>
                <td><?= $personne["nom"] ?></td>
                <td><?= $personne["email"] ?></td>
                <td class="d-flex justify-content-center">
                    <a href="#" class="btn btn-primary me-2">Editer</a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#supprimerUtilisateurModal">Supprimer
                    </button>
                </td>
            </tr>
        <?php } ?>
        </tbody>

    </table>

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
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
