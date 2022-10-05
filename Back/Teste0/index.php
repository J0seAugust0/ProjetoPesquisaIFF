<?php include ('db.php')?>

<html>
<meta charset=UTF-8>
<h2> Cadastrar usuário: </h2>
<form method=POST>
Nome: <input type=text name=nome><br>
E-mail: <input type=text name=email><br>
Senha: <input type=text name=senha><br>
Tipo:
<input type=radio name=tipo value=u>Normal
<input type=radio name=tipo value=a>Administrador<br>
<input type=submit value="Cadastrar">
</form>
<hr>
<h2> Apagar usuário: </h2>
<form method=POST>
 Id: <input type=text name=id><br>
 <input type=submit value="Apagar Usuario">
</form>
<hr>
<h2> Exibir Usuários: </h2>
</html>

<?php

if(isset($_POST["nome"])&&isset($_POST["email"])&&isset($_POST["senha"])&&isset($_POST["tipo"])){
 
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
if($_POST["tipo"]=='u'){
 $adm = 0;}
 else{
  $adm = 1;}
 
$stmt = $pdo->prepare('INSERT INTO usuario (nome, email, senha, adm) VALUES(:nome, :email, :senha, :adm)');
$stmt->execute(array(
    ':nome' => $nome,
    ':email' => $email,
    ':senha' => $senha,
    ':adm' => $adm
    ));
}


if(isset($_POST["id"])){
	$id = $_POST["id"];
    $stmt = $pdo->prepare('delete from usuario where id= :id');
    $stmt->execute(array(
    ':id' => $id));
    
 $stmt = $pdo->prepare('update usuario set id = id - 1 where id > '.$id.';');
 $stmt->execute();
 //$stmt = $pdo->prepare('UPDATE usuario SET id=nextval(:seq)');
 //$stmt->execute(array(
   // ':seq' => 'usuario_id_seq'));
}

$sql = 'SELECT id, nome, email, senha, adm FROM usuario';
$stmt = $pdo->prepare($sql);
$stmt->execute();

//$result = $stmt -> fetchAll();

while($result = $stmt -> fetch(PDO::FETCH_ASSOC)) {
    echo "<br>Id:".$result['id'];
    echo " - Nome:".$result['nome'];
    echo " - E-mail:".$result['email'];
    echo " - Senha:".$result['senha'];
    echo " - ADM:";
    if($result['adm']){
        echo "TRUE";
    }
    else{
        echo "FALSE";
    }
}
//$rowCount = $stmt->rowCount();
//$details = $stmt->fetch();
//print_r ($details);

?>
