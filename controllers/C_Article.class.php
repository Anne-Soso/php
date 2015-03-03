<?php

class C_Article extends C_Base{
  private $modele=null;

  public function __construct(){
    $this->modeleArticle=new Article();
  }
  public function index(){
    global $a,$e;

    $data=$this->modeleArticle->getAll();
    $view=$e.$a.'.php';
    return['view'=>$view,'data'=>$data];
  }
  public function create(){
    header('Location: http://localhost:8888/php');
  }
}
