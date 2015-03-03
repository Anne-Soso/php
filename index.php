<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

include 'configs/routes.php';
set_include_path('controllers'.':'.'models'.':'.get_include_path());

/*ajoute les dossiers à ajouter au dossiers à charger (en vue du spl autoload register)*/

spl_autoload_register(function($class){ /*dés qu'on instancie une classe, cherche la classe dans tous les fichiers des chemins chargés en fonction du nom de la classe instanciée*/
  include $class.'.class.php';
});

$routeParts=explode('/',$routes['default']);
$a=$routeParts[0];
$e=$routeParts[1];

if (isset($_REQUEST['a']) && isset($_REQUEST['e'])) {
  $a=$_REQUEST['a'];
  $e=$_REQUEST['e'];
    $route = $a.'/'.$e;
    if (!in_array($route, $routes)) {
        die('cette action n\'est pas possible');
    }
}
$controllerName='C_'.ucfirst($e);
$controller=new $controllerName;
$data=call_user_func([$controller,$a]); /*appelle la fonction $a du controller */

include('views/layout.php');
