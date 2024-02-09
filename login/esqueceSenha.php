<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/esquecesenha.css">
    <title>Esqueci Senha</title>
</head>
<?php
require 'usuario-consulta.php';
$usuarios = ListarUsuarios();
?>

<body>
    <div class="borda">

        <h2 class="text-center mb-4">Usuarios</h2>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">Senha</th>
                    <th class="tamanho" scope="col">Editar</th>
                    <th class="tamanho" scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $linha) { ?>
                    <tr>
                        <td><?php echo $linha["usuario"] ?></td>
                        <td><?php echo $linha["senha"] ?></td>
                        <td><a href="cadastro.php" class="btn btn-primary">Editar</a></td>
                        <td><a href="usuario-excluir.php?CODIGO=<?= $linha['id'] ?>" class="btn btn-danger">Excluir</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>