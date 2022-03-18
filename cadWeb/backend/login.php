<?php
    header('Content-Type: application/json');
    require_once '../CLASSES/usuarios.php';
    $u = new Usuario;
    $email = $_POST['email'];         
    $senha = $_POST['senha'];   

    //verificar se não está preenchido
    $u->conectar("cad_user", "localhost", "root", ""); //conectando ao bd
    if($u->msgErro ==""){                              // verificando se possui algum erro logado
        if($u->logar($email,$senha)){                  // se logar, com user e senha, encaminha para a a pag privada
            echo json_encode("200");
        }else{
            echo json_encode("400");
        }
    }
    else{
        echo json_encode("500");
    }
?>