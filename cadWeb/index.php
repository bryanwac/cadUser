<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div id="form">
        <h1>ENTRAR</h1>
    <form  method="POST" class="row g-3" id = "formlogin">
        <input type="email"  name = "email" placeholder="E-Mail" class="form-control" id="email" required>
        <input type="password" name = "senha" placeholder="Senha" class="form-control" id="password" required>
        <input type="submit" value="Acessar" form = "formlogin">
        <a class= "cad-link" id="cad-link" href="cadastro.php">Não possui Login?<strong> Cadastre-se </strong>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/login.js"></script>
</body>
</html>