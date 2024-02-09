<?php

$usuario =$_POST['usuario'];
$senha =$_POST['senha'];
$id =$_POST['id'];

function alterarCadastro($usuario, $senha, $id){
    $conexao = new PDO("mysql:host=localhost;dbname=usuarios", "root", "");

    $query =   "UPDATE usuarios SET usuario = {$usuario}, senha = {$senha}, WHERE id = {$id}";
    
    $conexao->exec($query);

}

try{
alterarCadastro($usuario, $senha, $id);
header('Location:esqueci-senha.php');
} catch(PDOException $ex){
    die('Erro ao cadastrar dados: '. $ex->getMessage());
}