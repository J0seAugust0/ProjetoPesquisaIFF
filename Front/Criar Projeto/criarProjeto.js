const controls = document.querySelectorAll(".control");
let currentItem = 0;
const items = document.querySelectorAll(".item");
const maxItems = items.length;

controls.forEach((control) => {
  control.addEventListener("click", (e) => {
    isLeft = e.target.classList.contains("arrow-left");

    if (isLeft) {
      currentItem -= 1;
    } else {
      currentItem += 1;
    }

    if (currentItem >= maxItems) {
      currentItem = 0;
    }

    if (currentItem < 0) {
      currentItem = maxItems - 1;
    }

    items.forEach((item) => item.classList.remove("current-item"));

    items[currentItem].scrollIntoView({
      behavior: "smooth",
      inline: "center"
    });

    items[currentItem].classList.add("current-item");
  });
});

function baixarPDF(){

    var texto1 = document.getElementById("um").value;
    var texto2 = document.getElementById("dois").value;
    var texto3 = document.getElementById("tres").value;
    var texto4 = document.getElementById("quatro").value;

    var textoConcatenado = texto1 + '\n' + texto2 + '\n' + texto3 + '\n' + texto4;
    var textoConcatenado2 = texto3 + '\n' + texto4;

   
}

function creaPdf() {
  
  var texto1 = document.getElementById("um").value;
  var texto2 = document.getElementById("dois").value;
  var texto3 = document.getElementById("tres").value;
  var texto4 = document.getElementById("quatro").value;

  var textoConcatenado = texto1 + '\n' + texto2 + '\n' + texto3 + '\n' + texto4;    

  var opt = {
    margin: 1,
    filename: "myfile.pdf",
    html2canvas: { scale: 2 },
    jsPDF: { unit: "in", format: "letter", orientation: "portrait" },
  };

  html2pdf().set(opt).from(texto1, texto2, texto3, texto4).save();
}
