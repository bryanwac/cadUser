$('#formlogin').submit(function(e){
    e.preventDefault();
    var u_email = $('#email').val();
    var u_senha = $('#password').val();
    $.ajax({
        url: 'http://localhost/cadWeb/backend/login.php',
        method: 'POST',
        data: {email: u_email, senha: u_senha},
        dataType: 'json'
    }).done(function(res){
        switch(res){
            case "200":
                window.location = "http://localhost/cadWeb/AreaPrivada.php";
                break;
            case "400":
                alert("Email e/ou senha incorreta");
                break;
            case "500":
                alert("Erro interno no servidor, volte mais tarde");
                break;
        }
    });
});