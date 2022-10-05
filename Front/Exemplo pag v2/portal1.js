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