
// Sequencia de funções executadas pelo documento
$(function() {
  adiciona_competidor();
  Ordena_table();
});


//Função para o botão adicionar, obtem competidor, adiciona e trata erros
function adiciona_competidor(){


  $("#adicionar-competidor").click (function(event) {
    event.preventDefault();

    var form = document.querySelector("#form-adiciona");

    var competidor = obtemCompetidorDoFormulario(form);

    var erros = validaCompetidor(competidor);

    if (erros.length > 0) {
      exibeMensagensDeErro(erros);

      return;
    }

    adicionaCompetidorNaTabela(competidor);

    form.reset();

    var mensagensErro = document.querySelector("#mensagens-erro");
    mensagensErro.innerHTML = "";


  });

}


//Ordena tabela e exibe tabela ordenada
function Ordena_table(){

  $("#tabela_ordenada").click(function(){


mostrar_tabela_ordenada();

    var itens = [];

    $('.competidor').each(function(index, tr){

      var compet = {

        largada: $(this).find(".info-largada").text(),
        competido:  $(this).find(".info-competidor").text(),
        tempo: $(this).find(".info-tempo").text()
      };
      itens.push(compet);

    });


    var es = itens.sort(function(a,b){
      return a.tempo-b.tempo;


    }
  );

  //teste para ver se os dados foram inseridos no vetor de objetos competidor
  console.log(es);


  //Adiciona os dados ordenados na tabela resultado
  var novaLinha="<tr>";
  var coluna="";
  var j = 1;
  for(var i = 0; i < itens.length; i++){
    coluna+=novaLinha;
    if(i==0 || i - 1 >= 0 && itens[0].tempo== itens[i].tempo){
      coluna +='<td id="pos">1</td>';
    }else{
      coluna += '<td id="pos">'+j+'</td>';
    }
    coluna+='<td data-posicaolargada="'+itens[i].largada+'">'+itens[i].largada+'</td>';
    coluna+='<td data-nomecompetidor="'+itens[i].competido+'">'+itens[i].competido+'</td>';
    coluna+='<td data-tempocomp="'+itens[i].tempo+'">'+itens[i].tempo+'</td>';
    if(i==0 || i - 1 >= 0 && itens[0].tempo== itens[i].tempo){
      coluna +='<td>Vencedor!!!</td></tr>';
    }else{
      coluna += '<td>-</td></tr>';
    }
    //coluna += '<td>-</td></tr>';
    $("tbody[name='tabelaOrdenada_competidor']").append(coluna);
    coluna="";
    j++;
  }


});

}



//Obtem novo objeto competidor pelos dados do formulario
function obtemCompetidorDoFormulario(form) {

  var competidor = {
    largada: form.largada.value,
    competidor: form.competidor.value,
    tempo: form.tempo.value
  }

  return competidor;
}

//Monta e retorna nova Tr com o novo competidor
function montaTr(competidor) {
  var competidorTR = document.createElement("tr");
  competidorTR.classList.add("competidor");

  competidorTR.appendChild(montaTd(competidor.largada, "info-largada"));
  competidorTR.appendChild(montaTd(competidor.competidor, "info-competidor"));
  competidorTR.appendChild(montaTd(competidor.tempo, "info-tempo"));



  return competidorTR;
}

//Monta e retorna nova td com os dados do competidor
function montaTd(dado, classe) {
  var td = document.createElement("td");
  td.classList.add(classe);
  td.textContent = dado;

  return td;
}


//funcao para adicionar competidor na tabela
function adicionaCompetidorNaTabela(competidor) {
  var competidorTR = montaTr(competidor);
  var tabela = document.querySelector("#tabela-competidor");
  tabela.appendChild(competidorTR);
}


//Mostrar tabela ordenada somente quando solicitada
function mostrar_tabela_ordenada(){
  $(".ordem_tabela").stop().slideToggle(600);
}
