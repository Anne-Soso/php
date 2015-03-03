<?php

class C_Categorie extends C_Base{
  private $modele=null;

  public function __construct(){
    $this->modeleCategorie=new Categorie();
  }
  public function index(){
    global $a,$e;

    $data=$this->modeleCategorie->getAll();
    return $data;
  }
  public function create(){
    header('Location: http://localhost:8888/php');
  }
}
