<?php
echo '<h2>validar-senha.php</h2>';

$usuario = $_POST['usuario'];
$senha   = $_POST['senha'];
// var_dump($usuario, $senha);
function validarLogin($usuario, $senha){
    $conexao = new PDO("mysql:host=localhost;dbname=usuarios", "root", "");

    $script =   "SELECT * FROM usuario WHERE usuario ='" . $usuario . "' AND senha ='" . $senha . "' ";

    var_dump($script);
    $resultado = $conexao->query($script);
    $lista = $resultado->fetchAll();

    if(empty($lista)){
        header('Location:index.php?mensagem=1');
    } else {
        header('Location:sistema.php');
    }
}

validarLogin($usuario, $senha);