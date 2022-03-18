<?php
    //verificando se a pessoa está logada, caso nao esteja, sera encaminhada pro login
    session_start();
    if (!isset($_SESSION['id_usuario'])){
        header("location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Area Privada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <div id="form">
        <h1>Cadastrar</h1>
    <form  method="POST" class="row g-3" id = "formcadcli">
        <input type="text" name = "nome" placeholder="Nome Completo" class="form-control" id="name" maxlenght = "30" required>
        <input type="text" name = "datanascimento" placeholder="Data de nascimento" class="form-control" id="data" maxlenght = "30" required>
        <input type="text" name = "cpf" placeholder="CPF" class="form-control" id="cpf" maxlenght = "11" required>
        <input type="text" name = "celular" placeholder="Celular" class="form-control" id="telefone" maxlenght = "30" required>
        <input type="email"  name = "email" placeholder="E-Mail" class="form-control" id="email" required>
        <input type="text" name = "endereco" placeholder="Endereço" class="form-control" id="name" maxlenght = "30" required>
        <input type="textarea" name = "observacoes" placeholder="Observação" class="form-control" id="name" maxlenght = "30">
        <input type="submit" value="Cadastrar" form = "formcadcli" class="btn btn-primary">
        <a href="./backend/sair.php" class="btn btn-danger">Sair</a>
    </form>
    </div>


    <div style="margin-top:400px;" id="table">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Endereço</th>
                    <th colspan="2" scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                <button type="button" class="btn btn-primary">Update</button>
                </td>
                <td>
                <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
            <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                <button type="button" class="btn btn-primary">Update</button>
                </td>
                <td>
                <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
            <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                <button type="button" class="btn btn-primary">Update</button>
                </td>
                <td>
                <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark" href="https://github.com/bryanwac">Bryan William</a>
  </div>
  <!-- Copyright -->
</footer>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script src="./js/mascaras.js"></script>
    <script src = "./js/validacoesCliente.js"></script>
</body>
</html>