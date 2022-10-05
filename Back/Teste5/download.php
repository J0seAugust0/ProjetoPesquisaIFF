<?php

include_once './conexao.php';

//Selecionar documentos do usuario através do id
$query_select = "SELECT nome FROM documento WHERE idUsuario = :id";
$result_select = $conn->prepare($query_select);
$result_select->bindValue(':id', $_SESSION['idUsuario']);

if ($result_select->execute()) {
	//Coletar os nomes dos documentos
	$dados = $result_select->fetchAll(PDO::FETCH_ASSOC);
	foreach ($dados as $row => $valor) {
		//Formulário para imprimir os "links" dos documentos e os botões de apagar
		echo '<form action="remover.php"  method=POST>';
		echo '<a href="documentos/1/'.$valor['nome'].'">' . $valor['nome']. '</a>';
		echo '<input value="'.$valor['nome'].'" type="text" hidden="hidden" id="nome" name="nome" />';
		echo '<input type="submit" style="margin-left: 20px;" value="Apagar" name="apagar"> </form>';
	}
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
    header("Location: index.php");
}

