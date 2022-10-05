<?php

session_start();
include_once './conexao.php';
//Verificar se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrario acessa o ELSE
$EnviarDocumento = filter_input(INPUT_POST, 'EnviarDocumento', FILTER_SANITIZE_STRING);
if ($EnviarDocumento) {
    //Receber os dados do formulário
    $nome_documento = $_FILES['documento']['name'];
    //Verifica se esse documento já foi enviado
	$query_select = "SELECT nome FROM documento WHERE idUsuario = :id AND nome = :nome";
	$result_select = $conn->prepare($query_select);
	$result_select->bindValue(':id', $_SESSION['idUsuario']);
	$result_select->bindValue(':nome', $nome_documento);
	$result_select->execute();
	$result_select->fetchAll(PDO::FETCH_ASSOC);
	if ($result_select->rowCount() > 0) {
		$_SESSION['msg'] = "<p style='color:red;'>Esse arquivo já foi salvo</p>";
		header("Location: index.php");
	} 
	else {
		//Verificar se foi selecionado algum arquivo
		if(empty($nome_documento)){
			$_SESSION['msg'] = "<p style='color:red;'>Nenhum arquivo foi selecionado</p>";
			header("Location: index.php");
		}
		else {
			//Inserir no BD
			$query_insert = "INSERT INTO documento (nome , idUsuario) VALUES (:nome , :idUsuario)";
			$result_insert = $conn->prepare($query_insert);
			$result_insert->bindParam(':nome', $nome_documento);
			$result_insert->bindParam(':idUsuario', $_SESSION['idUsuario']);

			//Verificar se os dados foram inseridos com sucesso
			if ($result_insert->execute()) {
				//Recuperar último ID inserido no banco de dados
				//$ultimo_id = $conn->lastInsertId();

				//Diretório onde o arquivo vai ser salvo
				$diretorio = 'documentos/' . $_SESSION['idUsuario'].'/';

				//Criar a pasta do documento 
				mkdir($diretorio, 0755);
				
				if(move_uploaded_file($_FILES['documento']['tmp_name'], $diretorio.$nome_documento)){
					$_SESSION['msg'] = "<p style='color:green;'>Dados salvo com sucesso e upload da documento realizado com sucesso</p>";
					header("Location: index.php");
				}else{
					$_SESSION['msg'] = "<p><span style='color:green;'>Dados salvo com sucesso. </span><span style='color:red;'>Erro ao realizar o upload da documento</span></p>";
					header("Location: index.php");
				}        
			} else {
				$_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
				header("Location: index.php");
			}
		}
	}
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
    header("Location: index.php");
}