<?php

class C_Article extends C_Base{
  private $modele=null;


  public function __construct(){
    $this->modeleArticle=new Article();
  }


  public function index(){
    global $a,$e;
    if(isset($_GET['category_id'])){
      $category_id=$_GET['category_id'];
      $data=$this->modeleArticle->getCategoryById($category_id);
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
    global $a,$e;
    if($_SERVER['REQUEST_METHOD']=="POST"){
      $requete=$_POST;
      $titre=$requete['titreArticle'];
      $texte=$requete['texteArticle'];
      $categorie=$requete['categorie'];
      $this->modeleArticle->create($titre,$texte,$categorie);
      header('Location:http://localhost:8888/php');
    }else{
      $view=$e.$a.'.php';
      $categories=new C_Categorie();
      $categories=$categories->index();
      return['view'=>$view,'categories'=>$categories];
    }
  }


  public function update(){
    global $a,$e;
    if($_SERVER['REQUEST_METHOD']=="POST"){
      $requete=$_POST;
      $titre=$requete['titreArticle'];
      $texte=$requete['texteArticle'];
      $categorie=$requete['categorie'];
      $id=$requete['id'];
      header('Location:http://google.be');
      $this->modeleArticle->update($id,$titre,$texte,$categorie);
      header('Location:http://localhost:8888/php');
    }else{
      $view=$e.$a.'.php';
      $categories=new C_Categorie();
      $id=$_GET['id'];
      $data=$this->modeleArticle->get($id);
      $categories=$categories->index();
      return['view'=>$view,'data'=>$data,'categories'=>$categories];
    }
  }


}
