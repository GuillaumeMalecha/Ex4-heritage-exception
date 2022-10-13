<?php
namespace ISL\Manager;

use ISL\Entity\Enseignant;
use Faker\Factory;
use DateTime;

class EnseignantManager extends EntityManager{

	// verifier et mettre a jour l'anciennete de l'enseignant
	public function checkAnciennete($enseignant){
		$firstDate  = new DateTime($enseignant->getDateEntree());
		$secondDate = new DateTime(date("Y/m/d"));
		$intvl = $firstDate->diff($secondDate);

		// mise a jour de l'anciennete
		if($enseignant->getAnciennete() != $intvl->y){
			$enseignant->setAnciennete($intvl->y);
			$this->update($enseignant);
		}
	}

	public function create($enseignant){
		//ici enregistrement en DB de votre objet enseignant
	}

	public function read($id){

  }

	public function readAll(){

  }

	public function update($enseignant){

  }
	
	function delete($id){

  }
}
