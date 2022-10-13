<?php
require_once 'vendor/autoload.php';

use ISL\Manager\EntityManager;
use ISL\Manager\PersonneManager;
use ISL\Manager\EnseignantManager;
use ISL\Entity\Etudiant;
use ISL\Entity\Enseignant;

$connexion = "PDO MySQL";
// ici j'ai conseré le personne manager pour la création de données via Faker
// dans une application réelle il y aurait un formulaire en ligne pour creer ces données
$personManager = new PersonneManager($connexion);
echo $personManager->getConnexion();
$personArray = $personManager->create(3);

// creer un Etudiant
$etudiant = new Etudiant($personArray[0]['prenom'],$personArray[0]['nom'],
		$personArray[0]['adresse'],$personArray[0]['codePostal'],
		"POO", 3,"2021/10/10");
// afficher un etudiant : methode toString
echo $etudiant;

// creer un Enseignant
$enseignant = new Enseignant($personArray[1]['prenom'],$personArray[1]['nom'],
		$personArray[1]['adresse'],$personArray[1]['codePostal'],
		"POO", "2005/07/10",2);
// afficher un Enseignant : methode toString
echo $enseignant;

// verifier l'anciennete des enseignants
$ensManager = new EnseignantManager($connexion);
$ensManager->checkAnciennete($enseignant);
echo $enseignant;

$tabPersEcole = [$etudiant,$enseignant];
foreach ($tabPersEcole as $pers) {
	echo $pers->profil();
}
