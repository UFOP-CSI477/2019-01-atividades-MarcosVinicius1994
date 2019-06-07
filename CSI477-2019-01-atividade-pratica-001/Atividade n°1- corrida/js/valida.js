var titulo = document.querySelector(".titulo");
var tabelaOrde=document.querySelector("#tabela_ordenada");

tabelaOrde.addEventListener("click", function(event){
  event.preventDefault();


});

//valida competidor (tratamento de erros) e adiciona erros no vetor de erros
function validaCompetidor(competidor) {

  var erros = [];

  if (competidor.largada.length == 0) {
    erros.push("A largada não pode ser em branco");
  }


  if (competidor.competidor.length == 0) {
    erros.push("O competidor não pode ser em branco");
  }

  if (competidor.tempo.length == 0) {
    erros.push("O tempo não pode ser em branco");
  }

  if (!validaLargada(competidor.largada)) {
    erros.push("A largada é inválida");
  }

  if (!validaTempo(competidor.tempo)) {
    erros.push("O tempo é inválido");
  }

  return erros;

}
//exibe mensagems de erro
function exibeMensagensDeErro(erros) {
  var ul = document.querySelector("#mensagens-erro");
  ul.innerHTML = "";

  erros.forEach(function(erro) {
    var li = document.createElement("li");
    li.textContent = erro;
    ul.appendChild(li);
  });
}



//função para validar largada
function validaLargada(largada) {

  if (largada >= 0 && largada <= 1000) {
    return true;
  } else {
    return false;
  }
}

//função para validar tempo
function validaTempo(tempo) {

  if (tempo >= 0 && tempo <= 1000) {
    return true;
  } else {
    return false;
  }
}
