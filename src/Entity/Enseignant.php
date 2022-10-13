<?php
namespace ISL\Entity;

class Enseignant extends Personne implements Presentation{
	private $coursDonnes;
	private $dateEntree;
	private $anciennete;

	public function __construct($prenom, $nom, $adresse, $codePostal,$coursDonnes,$dateEntree,$anciennete){
    parent::__construct($prenom, $nom, $adresse, $codePostal);
    $this->coursDonnes = $coursDonnes;
		$this->dateEntree = $dateEntree;
		$this->anciennete = $anciennete;
	}

	public function profil(){
		return "Enseignant pour les cours : " . $this->coursDonnes;
	}

	public function getCoursDonnes(){
		return $this->coursDonnes;
	}
	public function setCoursDonnes($coursDonnes){
		$this->coursDonnes = $coursDonnes;
	}

	public function getDateEntree(){
		return $this->dateEntree;
	}
	public function setDateEntree($dateEntree){
		$this->dateEntree = $dateEntree;
	}

	public function getAnciennete(){
		return $this->anciennete;
	}
	public function setAnciennete($anciennete){
		$this->anciennete = $anciennete;
	}

	public function __toString(){
		return $this->getPrenom() . ", " . $this->getNom() . " cours: " . $this->coursDonnes . " Ancienneté :" . $this->anciennete . " ans";
	}
}
