<?php
namespace ISL\Entity;

abstract class Personne {
	private $prenom;
	private $nom;
	private $adresse;
	private $codePostal;

	public function __construct($prenom, $nom, $adresse, $codePostal){
		$this->prenom = $prenom;
		$this->nom = $nom;
		$this->adresse = $adresse;
		$this->codePostal = $codePostal;
	}

	public function getPrenom(){
		return $this->prenom;
	}
	public function setPrenom($prenom){
		$this->prenom = $prenom;
	}

	public function getNom(){
		return $this->nom;
	}
	public function setNom($nom){
		$this->nom = $nom;
	}

	public function getAdresse(){
		return $this->adresse;
	}
	public function setAddress($adresse){
		$this->adresse = $adresse;
	}

	public function getCodePostal(){
		return $this->codePostal;
	}
	public function setCodePostal($codePostal){
		$this->codePostal = $codePostal;
	}
}
