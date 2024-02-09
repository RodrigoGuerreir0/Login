<?php
$id_excluir = $_GET["CODIGO"];

function ExcluirUsuario($id)
{
    $conexao = new PDO("mysql:host=localhost;dbname=usuarios", "root", "");

    $query = "DELETE FROM usuario WHERE id = " . $id;
    $conexao->exec($query);
}

try{
ExcluirUsuario($id_excluir);
header('Location:esqueceSenha.php');
}catch(PDOException $ex){
die('Erro ao excluir o usuaro '.$ex->getMessage());
}
