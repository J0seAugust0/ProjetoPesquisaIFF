function mostrarTopico(frase, frase2, numero){
    var text = frase 
    var text2 = frase2
    var verificarN = numero  
     var div = document.getElementById("forum");     
    
    if(verificarN === 1){            
        div.innerHTML = "<h1>" + "<a href='exemplo1.html' id='fraseForum'>" + text + "</a>" + "</h1>" + "<h1>" + "<a href='exemplo2.html' id='fraseForum'>" + text2 + "</a>" + "</h1>" + "<br>"
    } else {
        if(verificarN === 2){
            div.innerHTML = "<h1>" + "<a href='exemplo1.html' id='fraseForum'>" + text + "</a>" + "</h1>" + "<h1>" + "<a href='exemplo2.html' id='fraseForum'>" + text2 + "</a>" + "</h1>" + "<br>"
        } else {
        if(verificarN === 3){
                div.innerHTML = "<h1>" + "<a href='exemplo1.html' id='fraseForum'>" + text + "</a>" + "</h1>" + "<h1>" + "<a href='exemplo2.html' id='fraseForum'>" + text2 + "</a>" + "</h1>" + "<br>"
    } else {
        if(verificarN === 4){
                div.innerHTML = "<h1>" + "<a href='exemplo1.html' id='fraseForum'>" + text + "</a>" + "</h1>" + "<h1>" + "<a href='exemplo2.html' id='fraseForum'>" + text2 + "</a>" + "</h1>" + "<br>"
        } else {
            if(verificarN === 5){
             div.innerHTML = "<h1>" + "<a href='exemplo1.html' id='fraseForum'>" + text + "</a>" + "</h1>" + "<h1>" + "<a href='exemplo2.html' id='fraseForum'>" + text2 + "</a>" + "</h1>" + "<br>"
            } else {
                if(verificarN === 6){
                    div.innerHTML = "<h1>" + "<a href='exemplo1.html' id='fraseForum'>" + text + "</a>" + "</h1>" + "<h1>" + "<a href='exemplo2.html' id='fraseForum'>" + text2 + "</a>" + "</h1>" + "<br>"
                }
            }
        }
    }
  }          
 }
}

function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
  
var botao;
function definirBotao(tipo){
	botao = tipo;
}

function escreverBotao(){
	var printBotao = document.getElementById("botao1")
	if(botao === "Sair"){
		printBotao.innerHTML = "Bem vindo " + $_SESSION['nome'] + "<br>" + "<a href='sair.php'>Sair</a><br>"
	}
	if(true){
		printBotao.innerHTML = "<div id='dados-usuario'>" + "<button class='button' onclick='openForm()'>Logar</button>" + "</div>"
	}
}
window.onload = function(){
	var logado = document.getElementById("LoginFeito").value
	if(logado === "Sim"){
		document.getElementById("botao1").innerHTML = "<h3 style='position: absolute; margin-top: 30px; width: 91%; text-align: right;'> Bem vindo " + document.getElementById("nome").value + "</h3>"
		document.getElementById("botao2").innerHTML = "<a href='sair.php'><button class='button2'>Sair</button></a>"
	}
	if(logado === "Nao"){
		document.getElementById("botao1").innerHTML = "<div id='dados-usuario'>" + "<button class='button' onclick='openForm()'>Logar</button>" + "</div>"
		document.getElementById("botao2").innerHTML = "<button class='button2'>Cadastra-se</button>"
	}
}