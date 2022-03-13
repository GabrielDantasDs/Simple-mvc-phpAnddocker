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
                    <a class="nav-link active" aria-current="page" href="/pessoas/index">Pessoa</a>
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

    <form method="POST" action="/conta">
        <div class="mb-3">
            <label for="nameInput" class="form-label">Nome</label>
            <select name="select">
                <?php 
                foreach($data['pessoas'] as $pessoa) {
                    echo '<option value='.$pessoa['id'].'>'.$pessoa['nomecpf'].'</option>';
                };
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="cpfInput" class="form-label">CPF</label>
            <input name="cpf" type="text" class="form-control" id="cpfInput" required>
        </div>
        <div class="mb-3">
            <label for="enderecoInput" class="form-label">Endereço</label>
            <input name="endereco"type="text" class="form-control" id="enderecoInput" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
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