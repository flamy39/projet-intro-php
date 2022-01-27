<?php
    require_once "etudiantDB.php";

 /**
 * @return array
 */
    function findAllEtudiants() : array {
        global $etudiantsDB;
        usort($etudiantsDB,'ascSortByPromo');
        return $etudiantsDB;
    }

 /**
 * @param string $promotion
 * @return array
 */
    function findEtudiantsByPromotion(string $promotion) : array {
     global $etudiantsDB;
     $etudiants = [];
     foreach ($etudiantsDB as $etudiant) {
         if ($etudiant["promo"] == $promotion) {
             $etudiants [] = $etudiant;
         }
     }
     usort($etudiants,'ascSortByNom');
     return $etudiants;
    }

function ascSortByNom($etudiant1,$etudiant2)
{
    if ($etudiant1['nom'] == $etudiant2['nom']) return 0;
    return ($etudiant1['nom'] > $etudiant2['nom']) ? 1 : -1;
}

function ascSortByPromo($etudiant1,$etudiant2)
{
    if ($etudiant1['promo'] == $etudiant2['promo']) return 0;
    return ($etudiant1['promo'] > $etudiant2['promo']) ? 1 : -1;
}

