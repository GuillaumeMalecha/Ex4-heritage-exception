<?php
namespace ISL\Entity;

class Etudiant extends Personne implements Presentation{
	private $coursSuivis;
	private $niveau;
	private $dateInscription;

	public function __construct($prenom, $nom, $adresse, $codePostal,$coursSuivis,$niveau,$dateInscription){
    parent::__construct($prenom, $nom, $adresse, $codePostal);
    $this->coursSuivis = $coursSuivis;
		$this->niveau = $niveau;
		$this->dateInscription = $dateInscription;
	}

	public function profil(){
		return "Etudiant inscrit au cours de " . $this->coursSuivis;
	}

	public function getCoursSuivis(){
		return $this->coursSuivis;
	}
	public function setCoursSuivis($coursSuivis){
		$this->coursSuivis = $coursSuivis;
	}

	public function getNiveau(){
		return $this->niveau;
	}
	public function setNiveau($niveau){
		$this->niveau = $niveau;
	}

	public function getDateInscription(){
		return $this->dateInscription;
	}
	public function setDateInscription($dateInscription){
		$this->dateInscription = $dateInscription;
	}

	public function __toString(){
		return $this->getPrenom() . ", " . $this->getNom() . " cours: " . $this->coursSuivis;
	}
}
