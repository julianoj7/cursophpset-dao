<?php

require_once("config.php");

$root = new Usuario();
$root->loadbyID(3);

echo $root;



?>