function validar(campo, alerta, label) {

  console.log("Validar: " + campo);

  //input[name='valorX']
  //#idDoCampo
  var n = parseFloat( $(campo).val() );

  if ( $(campo).val().length == 0 || isNaN(n)) {

    // Erro
    // Exibir alerta
    $(alerta).slideDown();

    // Adiciona erro ao label
    $(label).addClass("text-danger");
    // No inpu
    $(campo).addClass("is-invalid");
    $(campo).val("");
    $(campo).focus();
    return false;

  }

  // Tudo correto

  // Oculta alerta
  $(alerta).hide();
  // Remove classes
  $(campo).removeClass("is-invalid");
  $(label).removeClass("text-danger");
  // Adiciona classe ao input
  $(campo).addClass("is-valid");

  return true;

}

function conferiMagnetude(m) {

var resposta;

if(m<3.5){
  resultado=("Menor que 3,5!");
}else if (m>=3.5 && m<=5.4) {
  resultado=("Entre 3,5 e 5,4!");
}else if(m>=5.5 && m<=6.0){
  resultado=("Entre 5.5 e 6.0!");
}else if(m>=6.1 && m<=6.9){
  resultado=("Entre 6,1 e 6, 9!");
}else if(m>=7.0 && m<=7.9){
  resultado=("Entre 7,0 e 7,9!")
}else if(m>=8){
  resultado=("8 ou mais...!");

}
return resultado;
}

function conferirEfeitos(m){
  if(m<3.5){
    resultado=("Geralmente não sentido mas gravado!");
  }else if (m>=3.5 && m<=5.4) {
    resultado=("As vezes sentido, mas raramente causa danos!");
  }else if(m>=5.5 && m<=6.0){
    resultado=("No maximo causa pequenos danos a predios bem construidos, mas pode danificar seriamente casas  mal construidas em regiões proximas!");
  }else if(m>=6.1 && m<=6.9){
    resultado=("Pode ser destrutivo em areas em torno de até  100km do epicentro!");
  }else if(m>=7.0 && m<=7.9){
    resultado=("Grande terremoto. Pode causar serios danos numa grande faixa!");
  }else if(m>=8){
    resultado=("Enorme terremoto. Pode causar  graves danos  em muitas  areas, mesmo que estejam a centenas de quilometros!");
  }
  return resultado;

}




function montatr(inf){
  var coluna=document.createElement("tr");
  coluna.classList.add("inf");
  coluna.appendChild(montaTd(inf.Magnitude, "info_mag"));
  coluna.appendChild(montaTd(inf.Efeitos, "info_e"));

  return coluna;
}


function montaTd(dado, classe) {
  var td = document.createElement("td");
  td.classList.add(classe);
  td.textContent = dado;

  return td;
}


function adicionaColunaNatabela(inf) {
  var coluna = montatr(inf);
  var tabela = document.querySelector("#inform_result");
  tabela.appendChild(coluna);
}






$(document).ready(function(){

  //$("button[name='calculo']")
  $("#calculo").click(function(){

    if ( validar( "input[name='valor1']", "#alerta1", "#labelv1" )
      && validar( "input[name='valor2']", "#alerta2", "#labelv2" ) ) {

        var ampl = parseFloat( $("input[name='valor1']").val() );
        var inter = parseFloat( $("input[name='valor2']").val() );

        var res =  Math.log10(ampl) + 3*Math.log10(8*inter) - 2.92;

        $("input[name='resultado']").val(res.toFixed(2));


      } else {
        $("input[name='resultado']").val("");
      }
  });



    $("#botInfo").click(function () {

  var form = document.querySelector("#tabelaMag");

  var coluna ={
    Magnitude:conferiMagnetude(resultado),
    Efeitos:conferirEfeitos(resultado)
  }


  adicionaColunaNatabela(coluna);

    $(".ordem_tabela").stop().slideToggle(600);




    });
    });
