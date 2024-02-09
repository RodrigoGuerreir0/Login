<?php

// METODO DE CADASTRO 1

$nome = $_POST['nome'];
$email = $_POST['email'];

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

function cadastrarUsuario($usuario, $senha){
    $conexao = new PDO("mysql:host=localhost;dbname=usuarios", "root", "");

    $scriptInserir = "INSERT INTO usuario (usuario, senha) VALUES (:usuario, :senha)";
    $stmt = $conexao->prepare($scriptInserir);

    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':senha', $senha);


    $stmt->execute();

    $ultimo_id = $conexao->lastInsertId();
    return $ultimo_id;

    if($stmt->rowCount()!=1){
        header('Location:cadastro.php?mensagemErrada=2');
    } else {
        header('Location:index.php?mensagemCadastro=1');
    }
}

cadastrarUsuario($usuario, $senha);

// METODO DE CADASTRO 2

$nome = $_POST['nome'];
$email = $_POST['email'];   

function cadastrarInfosPessoasis($nome, $email, $id_usuario){
    
    $conexao = new PDO("mysql:host=localhost;dbname=usuarios", "root", "");
    $query = "INSERT INTO 
                informacoes_pessoais(nome, email, id_usuario)
              VALUE
                ('".$nome."','".$email."','".$id_usuario."')";
$conexao->exec($query);
}

cadastrarInfosPessoasis($nome, $email, $id_usuario);