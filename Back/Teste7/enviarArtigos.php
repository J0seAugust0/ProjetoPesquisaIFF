<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="portal2.css">
    <title>Enviar Artigos</title>
</head>
<body class="fundo">
  <header id="cabecalho"> 
    <h1><a id="titulo" href="index.php"> VSPLab </a></h1>     
</header>
<a id="logoIff"> <img id="logoIff" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Instituto_Federal_Fluminense_-_Marca_Vertical_2015.svg/1200px-Instituto_Federal_Fluminense_-_Marca_Vertical_2015.svg.png" alt=""></a> 
    <div id="blocoEnviarArquivo">
        <?php
          echo "<h1>Bem-vindo ".$_SESSION['nome']."</h1>";
        ?>
        <button id="botaoArq" type="button" onclick="MostrarArq()">Mostrar Arquivos</button>
        <?php
        if(isset($_SESSION['msgArquivo'])){
            echo $_SESSION['msgArquivo'];
            unset($_SESSION['msgArquivo']);
        }
        ?>
        <div id="mostrarArq">Arquivos existentes
          <hr>
          <?php
		        include("download.php");
          ?>
        </div>
    <form method="post" action="upload.php" enctype="multipart/form-data">
        <div class="arquivo">
          <label id="nomeArtigo">Titulo Do Artigo</label>
          <input class="nomeArtigo" type="text" name="titulo" placeholder="Nome do Artigo">
        </div>
        <div class="arquivo">
          <label id="descricao">Descrição sobre o Artigo</label>
          <br><br>
          <textarea id="textarea" wrap="hard" name="descricao" minlength="2" rows="5" cols="33" placeholder="Descrição"></textarea>           
        </div>
        <div class="arquivo">
          <label id="arquivo">Selecione o Arquivo</label>
          <input type="file" name="documento" accept="application/pdf" placeholder="Escolher arquivo">
        </div>
        <footer>
          <button name="EnviarDocumento" id="enviar" type="submit" value="Salvar">Enviar Tudo</button>
      </footer>
      </form>  
    </div>
</body>
<script src="portal1.js"></script>
</html>
