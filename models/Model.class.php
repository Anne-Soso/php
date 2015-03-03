<?php
class Model{

  protected $connexion=null;
  const HOST_NAME='localhost';
  const DB_NAME='blog';
  const USER_NAME='root';
  const PWD='root';
  private $db_options=[
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
  ];

  public function __construct(){

    try{

      $this->connexion=new PDO(sprintf('mysql:host=%s;dbname=%s',self::HOST_NAME, self::DB_NAME),self::USER_NAME,self::PWD,$this->db_options);
      $this->connexion->query('SET CHARACTER SET UTF8');
      $this->connexion->query('SET NAMES UTF8');

    }catch(PDOException $e){

      die($e->getMessage());

    }
  }

}
