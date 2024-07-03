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

                <h4 class="mt-2">Lista de Clientes</h4>
                
                    <form action="add.php" method="post">
                        <div class="mb-3">
                            <label for="idnome" class="form-label">Name</label>
                            <input type="text" class="form-control" id="idnome" name="camponome" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="idemail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="idemail" name="campoemail" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="idcpf" class="form-label">CPF</label>
                            <input type="text" class="form-control" id="idcpf" name="campocpf" placeholder="CPF" required>
                        </div>
                        <div class="mb-3">
                            <label for="iddata" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="iddata" name="campodata" required>
                        </div>
                        <label class="form-label">Sexo</label>
                        <div class="form-check">
                            <input class="form-check-input justify-content-start" type="radio" name="camposexo" id="idsexom" required>
                            <label class="form-check-label" for="idsexom">Masculino</label>
                        </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="camposexo" id="idsexof" checked>
                            <label class="form-check-label mb-3" for="idsexof">Feminino</label>
                        </div>
                        <div class="mb-3">
                            <label for="idobs" class="form-label">Observações</label>
                            <textarea class="form-control" id="idobs" name="campoobs" rows="3"></textarea>
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