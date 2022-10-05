<?php

include_once './conexao.php';

//Deletar documento do bando de dados
$query_delete = "DELETE FROM documento WHERE nome = :nome";
$result_delete = $conn->prepare($query_delete);
$result_delete->bindParam(':nome', $_POST['nome']);

if ($result_delete->execute()) {
	//Deletar arquivo na pasta
	unlink('documentos/'.$_SESSION['idUsuario'].'/'.$_POST['nome']);
	$_SESSION['msg'] = "<p style='color:green;'>Dados salvo com sucesso.</p>";
	header("Location: index.php");
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
    header("Location: index.php");
}


