<?php

class Categorie extends Model{
  public function __construct(){
    parent::__construct();

  }
  public function get($id){
    return $pdost->fetch();
  }
  public function getAll(){
    $sql='SELECT id,name FROM categories';
    $pdost=$this->connexion->query($sql);
    return $pdost->fetchAll();

  }
}
