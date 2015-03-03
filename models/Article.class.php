<?php

class Article extends Model{
  public function __construct(){
    parent::__construct();

  }
  public function get($id){
    return $pdost->fetch();
  }
  public function getAll(){
    $sql='SELECT title,date,body,name FROM posts JOIN categories WHERE category_id=categories.id ORDER BY date';
    $pdost=$this->connexion->query($sql);
    return $pdost->fetchAll();

  }
}
