<?php

    include "../includes/conexao.php";
    $sql = "select * from clientes";

    $resultado = $conexao->query($sql);
    mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <?php include "../includes/head.php"; ?>

</head>
<body>
    
    <div class="container">
        
        <div class="container text-center">
            <h3 class="m-3">Sistema de Armazenamento de Dados</h3>
            <div class="row">
            
                <?php include "../includes/menu.php"; ?>

            <div class="<?php include "../includes/classdados.php"; ?>">

                <h4 class="mt-2">Lista de Clientes</h4>
                <a href="./adicionar.php" class="btn btn-primary btn-sm mb-3 mt-1">Adicionar</a> 

                <table class="table table-light">
                    <thead class>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php while($item = mysqli_fetch_object($resultado)) { ?>
                            <tr>
                                <th scope="row"><?php echo $item->id; ?></th>
                                <td><?php echo $item->nome; ?></td>
                                <td><?php echo $item->email; ?></td>
                            <td>

                                <a href="#" class="btn btn-success btn-sm">Editar</a>
                                <a href="#" class="btn btn-danger btn-sm">Excluir</a>

                            </td>
                            </tr>
                        <?php } ?>



                        </td>
                        </tr>
                        
                    </tbody>
                </table>

            </div>
        </div>
</div>

    </div>

    <?php include "../includes/js.php"; ?>
</body>
</html>