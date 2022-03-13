<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Simple Framework</title>
    <link rel="stylesheet" href="/Assets/css/bootstrap.min.css">
  </head>
  <body class="container-md">
    <?php 
        if(isset($data['create']))
            if($data['create']) {
            echo '<div class="alert alert-success" role="alert">
                        Pessoa cadastrada com sucesso.
                </div>';
            } else {
                echo '<div class="alert alert-success" role="alert">
                        Erro ao cadastrar pessoa.
                    </div>';
            }
    ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Pessoa</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/conta/index">Conta</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Movimentação</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <form method="POST" action="/pessoa">

    <?php
        $rand=rand();
        $_SESSION['rand']=$rand;
    ?>
        <input type="hidden" value="<?php echo $rand; ?>" name="randcheck" />
        <div class="mb-3">
            <label for="nameInput" class="form-label">Nome</label>
            <input name="nome" type="text" class="form-control" id="nameInput" required>
        </div>
        <div class="mb-3">
            <label for="cpfInput" class="form-label">CPF</label>
            <input name="cpf" type="text" class="form-control" id="cpfInput" required>
        </div>
        <div class="mb-3">
            <label for="enderecoInput" class="form-label">Endereço</label>
            <input name="endereco"type="text" class="form-control" id="enderecoInput" required>
        </div>
        <input name="submitbtn" value="Enviar" type="submit" class="btn btn-primary" />
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Endereço</th>
                <th scope="col">Editar</th>
                <th scope="col">Remover</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">1</th>
                <?php
                    foreach ($data['pessoas'] as $pessoa ) {
                        echo '<td>'. $pessoa->nome .'</td>';
                    }
                ?>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
  </body>
</html>