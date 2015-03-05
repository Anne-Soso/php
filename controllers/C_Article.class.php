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
      $data=$this->modeleArticle->getByCategoryId($category_id);
      if(!$data){
        header('Location:http://localhost:8888/php');
        $titre='Catégorie actuellement vide';
      }
      $titre='Catégorie '.$data[0]->name;
    }
    else{
      $data=$this->modeleArticle->getAll();
      $titre='Blog de la Chavée';
    }
    $view=$e.$a.'.php';
    $categories=new Categorie();
    $categories=$categories->getAll();
    return['view'=>$view,'data'=>$data,'categories'=>$categories,'titre'=>$titre];
  }


  public function create(){
    global $a,$e;
    if($_SERVER['REQUEST_METHOD']=="POST"){
      $requete=$_POST;
      $titre=$requete['titreArticle'];
      $texte=$requete['texteArticle'];
      $categorie=$requete['categorie']?$requete['categorie']:4;
      $adresse=false;
      if(!$_FILES['fichierImage']['error']){
        $nameparts=explode('.',$_FILES['fichierImage']['name']);
        $newname= 'i'.time().'.'.end($nameparts);
        if(!@move_uploaded_file($_FILES['fichierImage']['tmp_name'],'./img/blog/'.$newname)){
          die('Il y a eu un problème');
        }

        $adresse='./img/blog/'.$newname;
      }

      $this->modeleArticle->create($titre,$texte,$categorie,$adresse);
      header('Location:http://localhost:8888/php');

    }else{ /*REQUETE GET*/
      $view=$e.$a.'.php';
      $categories=new Categorie();
      $categories=$categories->getAll();
      return['view'=>$view,'categories'=>$categories,'titre'=>'Ajouter un nouvel article'];
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

      if(!$_FILES['fichierImage']['error']){
        $nameparts=explode('.',$_FILES['fichierImage']['name']);
        $newname= 'i'.time().'.'.end($nameparts);

        if(!@move_uploaded_file($_FILES['fichierImage']['tmp_name'],'./img/blog/'.$newname)){
          die('Il y a eu un problème');
        }

        $adresse='./img/blog/'.$newname;
      }
      $this->modeleArticle->update($id,$titre,$texte,$categorie,$adresse);
      header('Location:http://localhost:8888/php');

    }else{
      $view=$e.$a.'.php';
      $categories=new Categorie();
      $id=$_GET['id'];
      $data=$this->modeleArticle->get($id);
      $categories=$categories->getAll();
      return['view'=>$view,'data'=>$data,'categories'=>$categories,'titre'=>'Modifier l\'article'];
    }
  }


}
