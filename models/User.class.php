<?php
  class User extends Model{
    public function getUser($email, $password){
      $sql='SELECT * FROM user WHERE user=:email AND password=:password';
      $pdost=$this->connexion->prepare($sql);
      $pdost->execute([':email'=>$email,':password'=>$password]);
      return $pdost->fetch();
    }
    public function createUser($email,$password){
      $sql='INSERT INTO user(user,password) VALUES(:email,:password)';
      $pdost=$this->connexion->prepare($sql);
      $pdost->execute([':email'=>$email,':password'=>$password]);
    }

}
