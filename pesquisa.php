<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php
    $pesquisa= $_POST['busca']??'';
    include"conexao.php";
    $sql = "SELECT * FROM usuario where nome LIKE '%$pesquisa%'";//selecione toda a tabela usuario onde a coluna nome tenha um LIKE que filtre todas as letras qu e o usuário digita
    $dados = mysqli_query($conexao,$sql);
    
    ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Pesquisar</h1>
                <nav class="navbar navbar-light bg-light">
                    <form class="form-inline" method="post" action="pesquisa.php">
                        <input class="form-control mr-sm-2" type="search" placeholder="Digite a sua busca" aria-label="Search" name="busca">
                        <br>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                </nav>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Ações</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($linha = mysqli_fetch_assoc($dados)) {
                            $id = $linha['id'];
                            $nome = $linha['nome'];
                            $email = $linha['email'];

                            echo "<tr>
        <td>$nome</td>
        <td>$email</td>
        <td width=150px>
        <a href='editcad.php? id=$id' class='btn btn-success btn-sm'>Editar</a>
          <a href='#' class='btn btn-danger btn-sm' >Excluir</a>
          </td>
        </tr>";
                        }
                        ?>
                    </tbody>



                </table>


            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>