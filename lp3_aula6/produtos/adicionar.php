<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php include "../includes/head.php"; ?>

</head>
<body>
    
    <div class="container">
        
        <div class="container">
            <h3 class="m-3">Sistema de Armazenamento de Dados</h3>
            <div class="row">

            <?php include "../includes/menu.php"; ?>

            <div class="<?php include "../includes/classdados.php"; ?>">

                <h4 class="mt-2">Lista de Produtos</h4>
                
                    <form action="add.php" method="post">
                        <div class="mb-3">
                            <label for="idnome" class="form-label">Name</label>
                            <input type="text" class="form-control" id="idnome" name="camponomeproduto" placeholder="Arroz" required>
                        </div>
                        <div class="mb-3">
                            <label for="idcpf" class="form-label">Preço</label>
                            <input type="text" class="form-control" id="idcpf" name="campoprecoproduto" placeholder="99.99" required>
                        </div>
                        <div class="mb-3">
                            <label for="idcpf" class="form-label">Categoria</label>
                            <input type="text" class="form-control" id="idcpf" name="campocategoriaproduto" placeholder="alimento" required>
                        </div>
                        

                      <button type="submit" class="btn btn-success mb-3">Gravar</button>
                      <a href="./index.php" class="btn btn-secondary mb-3">Voltar</a>
                    </form>
            </div>
        </div>
</div>

    </div>

    <?php include "../includes/js.php"; ?>
</body>
</html>