<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" type="text/css" href="portal1.css">
    <title>VSPLab</title>
   
</head>
<body>
<!--<input value="Sim" type="text" hidden="hidden" id="LoginFeito" />-->
    <?php
        if(isset($_SESSION['id']) and (isset($_SESSION['nome']))){
			echo '<input value="Sim" type="text" hidden="hidden" id="LoginFeito" />';
			echo '<input value="'.$_SESSION['nome'].'" type="text" hidden="hidden" id="nome" />';
        }else{
			echo '<input value="Nao" type="text" hidden="hidden" id="LoginFeito" />';
        }
        ?>
    <div id="cabecalho"> 
        <div id="botao1">
			
        </div>
		
        <div id="botao2">
            
        </div>
        <h1 id="titulo">TITULO</h1>
        <div>
            <a> <img id="logoIff" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/50/Instituto_Federal_Fluminense_-_Marca_Vertical_2015.svg/1200px-Instituto_Federal_Fluminense_-_Marca_Vertical_2015.svg.png" alt=""></a>
        </div>          
    </div>
    <div id="cabecalho2">      
        </div>  
    <div id="anteriorIntro">
        <div id="introducao">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam scelerisque egestas tincidunt. In vulputate, leo eget finibus condimentum, felis arcu tempus lectus, in faucibus libero est sit amet eros. Phasellus ipsum leo, convallis at nisi vitae, hendrerit tempus quam. Fusce quis sollicitudin mi. Suspendisse volutpat velit eget ipsum convallis, sit amet hendrerit neque congue. Aenean tincidunt varius nibh, vel elementum risus vestibulum non. Aenean nec semper dui. Nulla facilisi. Suspendisse potenti.
    
    Maecenas non cursus lectus. Vestibulum pulvinar sem nec leo mattis, non scelerisque magna porta. Morbi vestibulum convallis quam et luctus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus sed interdum est. Pellentesque vel vulputate elit. Phasellus quis lectus justo. Morbi sollicitudin lacinia metus, ut luctus ex. Etiam ac blandit purus, nec accumsan ante. Fusce nulla ex, fermentum sed sagittis vitae, finibus nec nibh. Nunc ultrices urna a tortor rutrum congue. Sed interdum quam a augue dignissim, ac maximus felis convallis. Curabitur fermentum, tellus ac aliquet venenatis, enim tortor aliquet eros, nec dapibus sem sem eu nunc. Vivamus mattis, erat vel elementum euismod, sapien odio faucibus urna, at malesuada mi ante vel nisi. Quisque tincidunt semper lacus, nec mollis sapien varius eget.
    
    Proin id malesuada risus. Proin ornare laoreet quam, ac vestibulum metus malesuada eu. Ut dictum tortor lectus, nec hendrerit urna hendrerit id. Aenean quis urna nec orci tristique congue. Curabitur finibus sapien eu urna pellentesque iaculis. Vivamus semper sem non justo rutrum, at imperdiet leo tempor. Morbi odio ex, tincidunt sit amet dictum eget, fringilla nec urna. Praesent eget rutrum est. Praesent cursus magna ultricies mi semper accumsan. Aenean aliquet, neque id tempus dignissim, purus tellus porttitor elit, sed ullamcorper massa elit at turpis. Praesent varius nisi ut faucibus dictum. Duis enim eros, posuere vitae elit quis, feugiat ullamcorper tortor. Nunc sed lectus sit amet risus venenatis venenatis quis in enim. Donec maximus tellus vel ex ultricies, sit amet posuere metus hendrerit. Vestibulum pulvinar, purus in convallis placerat, augue elit dictum massa, id vehicula quam libero id justo. Mauris dignissim fermentum quam, eu tincidunt nisi auctor in.
    
    Nullam dignissim, velit sed ornare ornare, neque nunc scelerisque leo, vitae sodales tellus nisl eget mauris. Fusce a mauris iaculis, pharetra nunc vitae, mattis ex. Nulla diam nisl, posuere eu tortor sed, rhoncus vulputate augue. Integer mattis dolor a massa interdum volutpat. Nam sollicitudin nibh sit amet velit varius placerat. Ut nec massa magna. Cras tempus arcu nec ante egestas pretium. Fusce fermentum sit amet purus non dictum. Curabitur condimentum fringilla elit, non tristique justo consequat ac. Suspendisse potenti.
    
    Phasellus tempus felis nunc, sed volutpat nisl bibendum quis. Aenean eu fermentum arcu. Fusce finibus finibus mi, ac dapibus urna egestas non. Vestibulum sodales velit vitae nisl luctus, vel eleifend nulla aliquet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce nec rutrum mi, in tincidunt turpis. Praesent consequat faucibus dolor. Aenean mollis risus eu erat blandit, vitae ornare erat porttitor.
            </p>
        </div>
    </div>

    <div>
        <div id="forum">           
        <div> 
           
        </div>

        </div>
    <h2 style="margin-left: 180px; color: white;">Barra de navegacão</h2>
    <ul>
        <li class="li"><button id="botaoForum" type="button" onclick="mostrarTopico('Topico 1 AR', 'Topico 2 AR', 1)">Artigos Relacionados</button></li>
        <li class="li"><button id="botaoForum" type="button" onclick="mostrarTopico('Topico 2 LR', '', 2)" >Levantamento de Requisitos</button></li>
        <li class="li"><button id="botaoForum" type="button" onclick="mostrarTopico('Topico 3 AR', '', 3)">Análise de Requisitos</button></li>
        <li class="li"><button id="botaoForum" type="button" onclick="mostrarTopico('Topico 4 I', '', 4)">Implementação</button></li>
        <li class="li"><button id="botaoForum" type="button" onclick="mostrarTopico('Topico 5 T', '', 5)">Teste</button></li>
        <li class="li"><button id="botaoForum" type="button" onclick="mostrarTopico('Topico 6 M', '', 6)">Manutenção</button></li>
    </ul>  
    </div>
    <br>

    <div class="form-popup" id="myForm">
        <form action="/action_page.php" id="login-usuario-form" class="form-container">
		<span id="msgAlertErroLogin"></span>
          <h1>Login</h1>
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="senha" id="senha" required>
      
          <button type="submit" id="login-usuario-btn" class="btn">Login</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>
      <div><br><br></div>

    <script src="portal1.js"></script>
</body>
    <!--Created by Marcus Vynícius and José Augusto-->
</html>
