<?php
namespace ISL\Manager;


use ISL\Entity\Personne;
use Faker\Factory;

class PersonneManager extends EntityManager{

	public function __construct ($connexion) {
			parent::__construct($connexion);
	}

	public function create($number){
		$faker = Factory::create();
		$personArray = [];

		for($i = 0; $i < $number; $i++){
			$personArray[$i] = [
				'nom' => $faker->firstName,
				'prenom' => $faker->lastName,
				'adresse' => $faker->streetAddress,
				'codePostal' => $faker->postcode
			];
		}

		return $personArray;
	}

	public function read($id){

	}
	public function readAll(){
		// récupérer et les étudiants et les enseignants
	}
	public function update($personne){

	}
	function delete($id){

	}
}
