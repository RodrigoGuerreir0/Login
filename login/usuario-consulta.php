<?php
function ListarUsuarios()
{
    $conexao = new PDO("mysql:host=localhost;dbname=usuarios", "root", "");

    $query =   "SELECT * FROM usuario";

    $resultado = $conexao->query($query);
    $lista = $resultado->fetchAll();

    return $lista;
}

function ListarUmUsuario($id){
    $conexao = new PDO("mysql:host=localhost;dbname=usuarios", "root", "");

    $query =   "SELECT id, usuario, senha FROM usuario WHERE id=". $id ;

    $resultado = $conexao->query($query);
    $lista = $resultado->fetchAll();

    foreach($lista as $linha){
    return $linha;
    }
}
