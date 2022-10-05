function mostrarTopico(frase, frase2){
    var text = frase 
    var text2 = frase2      
    
    if(text === 'Topico 1'){

        var div = document.getElementById("forum");
         
        div.innerHTML = "<h1>" + "<a href='exemplo1.html' id='fraseForum'>" + text + "</a>" + "</h1>" + "<h1>" + "<a href='exemplo2.html' id='fraseForum'>" + text2 + "</a>" + "</h1>" + "<br>"
    } else {
        if(text === 'Topico 2 LR'){
            div.innerHTML = "<h1>" + "<a href='exemplo1.html' id='fraseForum'>" + text + "</a>" + "</h1>" + "<h1>" + "<a href='exemplo2.html' id='fraseForum'>" + text2 + "</a>" + "</h1>" + "<br>"
        } else {
        if(text === 'Topico 3 AR'){
                div.innerHTML = "<h1>" + "<a href='exemplo1.html' id='fraseForum'>" + text + "</a>" + "</h1>" + "<h1>" + "<a href='exemplo2.html' id='fraseForum'>" + text2 + "</a>" + "</h1>" + "<br>"
    } else {
        if(text === 'Topico 4 I'){
                div.innerHTML = "<h1>" + "<a href='exemplo1.html' id='fraseForum'>" + text + "</a>" + "</h1>" + "<h1>" + "<a href='exemplo2.html' id='fraseForum'>" + text2 + "</a>" + "</h1>" + "<br>"
        } else {
            if(text === 'Topico 5 T'){
             div.innerHTML = "<h1>" + "<a href='exemplo1.html' id='fraseForum'>" + text + "</a>" + "</h1>" + "<h1>" + "<a href='exemplo2.html' id='fraseForum'>" + text2 + "</a>" + "</h1>" + "<br>"
            } else {
                if(text === 'Topico 6 M'){
                    div.innerHTML = "<h1>" + "<a href='exemplo1.html' id='fraseForum'>" + text + "</a>" + "</h1>" + "<h1>" + "<a href='exemplo2.html' id='fraseForum'>" + text2 + "</a>" + "</h1>" + "<br>"
                }
            }
        }
    }
  }          
 }
}