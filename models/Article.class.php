<?php

class Article extends Model{
  public function __construct(){
    parent::__construct();
  }


  public function get($id){
    $sql='SELECT title,date,body,name,posts.id,category_id FROM posts JOIN categories ON category_id=categories.id WHERE posts.id=:id ORDER BY date';
    $pdost=$this->connexion->prepare($sql);
    $pdost->execute([':id'=>$id]);
    return $pdost->fetch();
  }


  public function getAll(){
    $sql='SELECT title,date,body,name,adresseImage FROM posts JOIN categories WHERE category_id=categories.id ORDER BY date';
    $pdost=$this->connexion->query($sql);
    return $pdost->fetchAll();

  }


  public function getByCategoryId($id){
    $sql='SELECT title,date,body,name FROM posts JOIN categories ON category_id=categories.id WHERE category_id=:id ORDER BY date';
    $pdost=$this->connexion->prepare($sql);
    $pdost->execute([':id'=>$id]);
    return $pdost->fetchAll();
  }


  public function create($titre,$texte,$categorie,$adresseImage){
    $sql="INSERT INTO posts (title,body,category_id,adresseImage) VALUES(:titre,:texte,:categorie,:adresseImage)";
    $pdost=$this->connexion->prepare($sql);
    $pdost->execute([':titre'=>$titre,':texte'=>$texte,':categorie'=>$categorie,':adresseImage'=>$adresseImage]);
  }


  public function update($id,$titre,$texte,$categorie,$adresseImage){
    $sql="UPDATE posts SET title= :titre, body= :texte, category_id= :categorie, adresseImage= :adresseImage WHERE id= :id";
    $pdost=$this->connexion->prepare($sql);
    $pdost->execute([':titre'=>$titre,':texte'=>$texte,':categorie'=>$categorie,':id'=>$id,':adresseImage'=>$adresseImage]);
  }
}
