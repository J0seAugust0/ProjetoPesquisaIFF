function mostrarTopico(frase, frase2, numero){
    var text = frase 
    var text2 = frase2
    var verificarN = numero 
    var div = document.getElementById("forum");   
    var logado = document.getElementById("LoginFeito").value

    if(verificarN === 1 && logado === "Sim"){            
        div.innerHTML = "<button style='margin-left: 180px; color: blue; cursor: pointer; border-radius: 8px; position: absolute;'> add" + "</button>" + "<h1>" + "<a href='exemplo1.html' target='_blank' id='fraseForum'>" + text + "</a>" + "</h1>" + "<h1>" + "<a href='exemplo2.html' target='_blank' id='fraseForum'>" + text2 + "</a>" + "</h1>" + "<br>"
    } else {
        if(verificarN === 1){
        div.innerHTML = "<h1>" + "<a href='exemplo1.html' target='_blank' id='fraseForum'>" + text + "</a>" + "</h1>" + "<h1>" + "<a href='exemplo2.html' target='_blank' id='fraseForum'>" + text2 + "</a>" + "</h1>" + "<br>"
        } 
        if(verificarN === 2){            
            div.innerHTML = "<h1>" + "<a href='exemplo1.html' target='_blank' id='fraseForum'>" + text + "</a>" + "</h1>" + "<h1>" + "<a href='exemplo2.html' target='_blank' id='fraseForum'>" + text2 + "</a>" + "</h1>" + "<br>"
        } else {
        if(verificarN === 3){
                div.innerHTML = "<h1>" + "<a href='exemplo1.html' target='_blank' id='fraseForum'>" + text + "</a>" + "</h1>" + "<h1>" + "<a href='exemplo2.html' target='_blank' id='fraseForum'>" + text2 + "</a>" + "</h1>" + "<br>"
    } else {
        if(verificarN === 4){
                div.innerHTML = "<h1>" + "<a href='exemplo1.html' target='_blank' id='fraseForum'>" + text + "</a>" + "</h1>" + "<h1>" + "<a href='exemplo2.html' target='_blank' id='fraseForum'>" + text2 + "</a>" + "</h1>" + "<br>"
        } else {
            if(verificarN === 5){
             div.innerHTML = "<h1>" + "<a href='exemplo1.html' target='_blank' id='fraseForum'>" + text + "</a>" + "</h1>" + "<h1>" + "<a href='exemplo2.html' target='_blank' id='fraseForum'>" + text2 + "</a>" + "</h1>" + "<br>"
            } else {
                if(verificarN === 6){
                    div.innerHTML = "<h1>" + "<a href='exemplo1.html' target='_blank' id='fraseForum'>" + text + "</a>" + "</h1>" + "<h1>" + "<a href='exemplo2.html' target='_blank' id='fraseForum'>" + text2 + "</a>" + "</h1>" + "<br>"
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
  
const loginForm = document.getElementById("login-usuario-form");
const msgAlertErroLogin = document.getElementById("msgAlertErroLogin");


loginForm.addEventListener("submit", async (e) => {
    e.preventDefault();

    if (document.getElementById("email").value === "") {
        msgAlertErroLogin.innerHTML = "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo usuário!</div>";
    } else if (document.getElementById("senha").value === "") {
        msgAlertErroLogin.innerHTML = "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo senha!</div>";
    } else {
        const dadosForm = new FormData(loginForm);

        const dados = await fetch("validar.php", {
            method: "POST",
            body: dadosForm
        });

        const resposta = await dados.json();

        if(resposta['erro']){
            msgAlertErroLogin.innerHTML = resposta['msg']
        }else{
			window.location.reload();
            loginForm.reset();
			document.getElementById("myForm").style.display = "none";
        }
    }
});

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