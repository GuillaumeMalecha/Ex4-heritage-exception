<?php
namespace ISL\Manager;

abstract class EntityManager {
  // ici sera stockée votre objet PDO mysql permettant la connexion
  private static $connexion;

  public function __construct ($connexion) {
    self::$connexion = $connexion;
  }

  public function setConnexion($connexion) {
    self::$connexion = $connexion;
  }

  public function getConnexion() {
    return self::$connexion;
  }

  // Fonctions de crud : abstraites --> doivent être implémentées dans les enfants
  abstract function create($obj);
  abstract function read($id);
  abstract function readAll();
  abstract function update($obj);
  abstract function delete($id);

}
