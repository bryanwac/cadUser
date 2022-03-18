<?php


Class Usuario{

    private $pdo;
    public $msgErro = ""; //enquanto estiver vazia, nao há erros



    public function conectar($nome, $host, $email, $senha){//PDO EXIGE AO MENOS 4 PARAMETROS
        global $pdo;
        global $msgErro;
        try{                                                                    // executando pdo dentro do try para capturar qualquer erro
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $email, $senha);//passando os 4 par.
        } catch(PDOException $e){                                               //pegando msg de erro para identicação
            $msgErro = $e->getMessage();
        }
    }
    public function cadastrar($nome_completo,$email,$senha){
        global $pdo;
        //verificando se o email já foi cadastrado
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e"); //select traz do BD o campo especifico para efetuar verificação
        $sql -> bindValue(":e",$email);  //bindValue para trocar o :e pelo email informado no param.
        $sql -> execute();

        if($sql->rowCount() > 0){   // verificando quantas linhas veio do campo especifico do BD, se veio mais de uma, ela ja tem cadastro
            
            return false; //já está cadastrado

        }   else    { //caso nao, cadastrar
            try{
                $sql = $pdo -> prepare("INSERT INTO usuarios (nome,email,senha) VALUES (:n,:e,:s) ");
                $sql -> bindValue(":n",$nome_completo);
                $sql -> bindValue(":e",$email); //substituindo os values que foram preparados pra inserção pelas var usadas no bd
                $sql -> bindValue(":s",md5($senha));

                $sql->execute(); //inseriu
                return true;
            }catch(PDOException $e){                                               //pegando msg de erro para identicação
                $msgErro = $e->getMessage();
                return false;
            }
            
        }

       
    }
    public function logar($email, $senha){
        global $pdo;
        //verificando se o email/senha estao cad. se sim:

            //md5 na senha para criptografar

        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s"); //trazendo do bd
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", md5($senha));
                                                //bindValue faz uma troca de valores, trocando pelo valor que esta cadastrado na tabela do bd
        $sql->execute();

        if($sql->rowCount() >0 ){ //se veio ID está cadastrada
            //pegar o ID da consulta e guardar numa var da sessão pra entrar no sistema
            //usando função fetch pra transformar em array

            $dado = $sql -> fetch();
            session_start();
            $_SESSION['id_usuario'] = $dado['id_usuario']; //usuario está armazenado em uma sessão
            return true; //está logada no sistema com sucesso
        }else{
            return false; //não foi possível logar no sistema
        }
    }
}



?>