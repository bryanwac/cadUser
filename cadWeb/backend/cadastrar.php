<?php
    header('Content-Type: application/json');
    require_once '../CLASSES/usuarios.php';
    $u = new Usuario;

        $name = $_POST['nome'];         
        $email = $_POST['email'];         
        $senha = $_POST['senha'];   
        //verificar se não está preenchido
        $u->conectar("cad_user", "localhost", "root", "");
        if($u->msgErro == "")
        {
            if($u->cadastrar($name,$email,$senha)){
                echo json_encode("200");
            }else{
                echo json_encode("400");
            }
        }else{
            echo json_encode("500");
        }
?>