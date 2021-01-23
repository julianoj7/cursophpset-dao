<?php

require_once("config.php");

//$root = new Usuario();
//$root->loadbyID(3);

//echo $root;



//carrega uma lista de usuarios

//$lista = Usuario::getList();

//echo json_encode($lista);



//carrega uma lista pelo login

//$search = Usuario::search("jo");

//echo json_encode($search);



//carrega o usuario usando login e senha

$usuario = new Usuario();
$usuario->login("user","12345");

echo $usuario;



?>