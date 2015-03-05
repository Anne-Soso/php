<?php
class C_User{
  public function __construct(){
    $this->modelUser=new User();
  }
  public function collect(){
    return['data'=>null,'view'=>'userCollect.php','titre'=>'Identifiez-vous'];
  }

  private function create($email,$password){
    $this->modelUser->createUser($email,$password);
    $user=['email'=>$email];
    $this->connect($user);
  }

  private function connect($user){
    $_SESSION['user']=$user['email'];
    $_SESSION['connected']='1';
    header('Location:http://localhost:8888/php');
  }
  public function disconnect(){
    session_destroy();
    unset($_SESSION['user']);
    unset($_SESSION['connected']);
    header('Location:http://localhost:8888/php');


  }

  public function check(){
    if(empty($_REQUEST['login'])||empty($_REQUEST['password']))
    {
        die('oops');
    }
    $user = $this->modelUser->getUser($_REQUEST['login'], sha1($_REQUEST['password']));
    if ($user) {
        $this->connect($user);
    } else {
        $this->create($_REQUEST['login'], sha1($_REQUEST['password']));
    }
  }
}
