<?php

class C_Article extends C_Base{
  private $modele=null;

  public function __construct(){
    $this->modeleArticle=new Article();
  }
  public function index(){
    global $a,$e;
    if(isset($__GET['category_id'])){
      $category_id=$__GET['category_id'];
      $data=$this->modeleArticle->getByCategoryId($category_id);
    }
    else{
      $data=$this->modeleArticle->getAll();
    }
    $view=$e.$a.'.php';
    $categories=new C_Categorie();
    $categories=$categories->index();
    return['view'=>$view,'data'=>$data,'categories'=>$categories];
  }
  public function create(){
    header('Location: http://localhost:8888/php');
  }
}
