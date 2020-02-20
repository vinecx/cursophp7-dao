<?php

require_once("config.php");

////$sql = new Sql();

////$usuarios = $sql->select("SELECT * FROM tb_usuarios");

////echo json_encode($usuarios);

/// CODIGO ABAIXO CARREGA APENAS UM USUARIO.
/////////$root = new Usuario();
/////////$root->loadbyId(3);
/////////echo $root;
//-----------------------------------------/
echo "<br>";
/// CARREGA UMA LISTA DE USUARIOS /

////$lista = Usuario::getList();

////echo json_encode($lista);

//----------------------------------------/

/// CARREGA UMA LISTA DE USUARIOS CARREGANDO PELO LOGIN/
//////////$search = Usuario::search("E");
//////////echo json_encode($search);

//----------------------------------------/

/// CARREGA UM USUARIO USANDO LOGIN E SENHA

$usuario = new Usuario();
$usuario->login("jose", "1.5.6.7");

echo $usuario;

?>