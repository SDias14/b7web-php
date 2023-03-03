<?php

require_once 'Usuario.php';

$usuario = new Usuario();

$usuario->setNome('João');

echo $usuario->getNome();


?>