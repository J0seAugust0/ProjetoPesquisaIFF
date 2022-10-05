<?php
session_start();
include_once "conexao.php";
//include('conexao.php')

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

/*$dados = [
    "email" => "cesar@celke.com.br",
    "senha" => "123456"
];*/

if(empty($dados['email'])){
    $retorna = ['erro'=> true, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo usuário!</div>"];
}elseif(empty($dados['senha'])){
    $retorna = ['erro'=> true, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo senha!</div>"];
}else{
    $query_usuario = "SELECT id, nome, email, senha
                FROM usuario
                WHERE email=:email
                LIMIT 1";
    $result_usuario = $conn->prepare($query_usuario);
    $result_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
    $result_usuario->execute();

    if(($result_usuario) and ($result_usuario->rowCount() != 0)){
        $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
        if(password_verify($dados['senha'], password_hash($row_usuario['senha'], PASSWORD_DEFAULT))){
            $_SESSION['id'] =  $row_usuario['id'];
            $_SESSION['nome'] =  $row_usuario['nome'];

            $retorna = ['erro'=> false, 'dados' => $row_usuario];
        }else{
            $retorna = ['erro'=> true, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Usuário ou a senha inválida!</div>"];
        }        
    }else{
        $retorna = ['erro'=> true, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Usuário ou a senha inválida!</div>"];
    }    
}

echo json_encode($retorna);
