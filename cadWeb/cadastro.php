<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div id="form">
    <h1>CADASTRAR</h1>
    <form  method="POST" class="row g-3"id = "formCad">
        <input type="text" name = "nome" placeholder="Nome Completo" class="form-control" id="name" maxlenght = "30" required>
        <input type="email" name = "email" placeholder="E-Mail" class="form-control" id="email" maxlenght = "80" required>
        <input type="password" name = "senha" placeholder="Senha" class="form-control" id="password" maxlenght = "32" required>
        <input type="password" name = "confSenha" placeholder="Confirmar Senha" class="form-control" id="confirmpassword" maxlenght = "32" required>
        <input type="submit" value="Cadastrar" form ="formCad">
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/cadastro.js"></script>
    <script src="./js/validarSenha.js"></script>
</body>
</html>