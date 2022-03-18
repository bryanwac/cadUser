$('#formCad').submit(function(e){
    e.preventDefault();
    var u_name = $('#name').val();
    var u_email = $('#email').val();
    var u_senha = $('#password').val();
    $.ajax({
        url: 'http://localhost/cadWeb/backend/cadastrar.php',
        method: 'POST',
        data: {nome: u_name, email: u_email,senha: u_senha},
        dataType: 'json'
    }).done(function(res){
        // console.log(res)
        switch(res){
            case "200":
                alert("Cadastro Efetuado! Faça o Login");
                window.location = "http://localhost/cadWeb/index.php"
                break;
            case "400":
                alert("Email já cadastrado!");
                break;
            case "500":
                alert("Erro interno no servidor, volte mais tarde");
                break;
        }
    });
});