

var pacientes = document.querySelectorAll(".paciente");

for (var i = 0; i < pacientes.length; i++) {

  var paciente = pacientes[i];

  var tdPeso = paciente.querySelector(".info-peso");
  var peso = tdPeso.textContent;

  var tdAltura = paciente.querySelector(".info-altura");
  var altura = tdAltura.textContent;
  
  var tdImc = paciente.querySelector(".info-imc");

  var pesoEhValido = validaPeso(peso);
  var alturaEhValida = validaAltura(altura);

  if (!pesoEhValido) {
    console.log("Peso inválido!");
    pesoEhValido = false;
    tdImc.textContent = "Peso inválido";
    paciente.classList.add("paciente-invalido");
  }

  if (!alturaEhValida) {
    console.log("Altura inválida!");
    alturaEhValida = false;
    tdImc.textContent = "Altura inválida";
    paciente.classList.add("paciente-invalido");
  }

  if (pesoEhValido && alturaEhValida) {
    var imc = calculaImc(peso, altura);
    tdImc.textContent = imc;
  }
}

function calculaImc(peso, altura){
  var imc=0;
  imc = peso / (altura * altura);

  return imc.toFixed(2);
}

//Implementação da função para obter o intervalo do IMC do paciente
function obtemIntervaloIMC(peso, altura) {

  var textIMC;


  if(calculaImc(peso,altura) < 18.5){
    textIMC="Abaixo de 18,5";
  }else if (calculaImc(peso,altura) >=18.5 && calculaImc(peso,altura) <=24.9){
    textIMC="Entre 18,5 e 24,9";

  }else if (calculaImc(peso,altura) >=25 && calculaImc(peso,altura) <=29.9){
    textIMC="Entre 25,0 e 29,9";
  }else if ( calculaImc(peso,altura) >=30 && calculaImc(peso,altura) <= 34.9) {
    textIMC="Entre 30,0 e 34,9";
  }else if (calculaImc(peso,altura) >=35 && calculaImc(peso,altura) <=39.9) {
    textIMC="Entre 35,0 e 39,9";

  }else if (calculaImc(peso,altura) >=40) {
    textIMC="Acima de 40";
  }

  return textIMC;
}


//Implementação da fução para obter a classificação do paciente
function obterClassificação(peso, altura){

  var classific;

  if(calculaImc(peso,altura) < 18.5){
    classific="Subnutrição";
  }else if (calculaImc(peso,altura) >=18.5 && calculaImc(peso,altura) <=24.9){
    classific="Peso Saudável";

  }else if (calculaImc(peso,altura) >=25 && calculaImc(peso,altura) <=29.9){
    classific="Sobrepeso";
  }else if ( calculaImc(peso,altura) >=30 && calculaImc(peso,altura) <= 34.9) {
    classific="Obesidade grau 1";
  }else if (calculaImc(peso,altura) >=35 && calculaImc(peso,altura) <=39.9) {
    classific="Obesidade grau 2";

  }else if (calculaImc(peso,altura) >=40) {
    classific="Obesidade grau 3";
  }

  return classific;
}


//Implementação do calculo do peso ideal
function pesoIdeal(peso, altura){

  var IntervaloInicio = 0;
  var IntervaloFinal = 0;

  if(calculaImc(peso,altura) < 18.5 ){
    IntervaloInicio=18.5*(altura * altura);
    IntervaloFinal =24.9*(altura * altura);
    var resposta =("Entre" +" "+ IntervaloInicio.toFixed(2) +" "+ "e" +" "+ IntervaloFinal.toFixed(2));
  }else if (calculaImc(peso,altura) >= 18.5 && calculaImc(peso,altura) <= 24.9) {

    IntervaloInicio=18.5*(altura * altura);
    IntervaloFinal =24.9*(altura * altura);
    var resposta =("Entre" +" "+ IntervaloInicio.toFixed(2) +" "+ "e" +" "+ IntervaloFinal.toFixed(2));
  }else if (calculaImc(peso,altura) >= 25 && calculaImc(peso,altura) <= 29.9) {

    IntervaloInicio=18.5*(altura * altura);
    IntervaloFinal =24.9*(altura * altura);
    var resposta =("Entre" +" "+ IntervaloInicio.toFixed(2) +" "+ "e" +" "+ IntervaloFinal.toFixed(2));

  }else if (calculaImc(peso,altura) >= 30 && calculaImc(peso,altura) <= 34.9) {

    IntervaloInicio=18.5*(altura * altura);
    IntervaloFinal =24.9*(altura * altura);
    var resposta =("Entre" +" "+ IntervaloInicio.toFixed(2) +" "+ "e" +" "+ IntervaloFinal.toFixed(2));
  }else if (calculaImc(peso,altura) >= 35 && calculaImc(peso,altura) <= 39.9) {

    IntervaloInicio=18.5*(altura * altura);
    IntervaloFinal =24.9*(altura * altura);
    var resposta =("Entre" +" "+ IntervaloInicio.toFixed(2) +" "+ "e" +" "+ IntervaloFinal.toFixed(2));
  }else if (calculaImc(peso,altura) >= 40) {

    IntervaloInicio=18.5*(altura * altura);
    IntervaloFinal =24.9*(altura * altura);
    var resposta =("Entre" +" "+ IntervaloInicio.toFixed(2) +" "+ "e" +" "+ IntervaloFinal.toFixed(2));
  }

  return resposta;
}

//Implementação da função de validação do peso
function validaPeso(peso) {

  if (peso >= 0 && peso <= 1000) {
    return true;
  } else {
    return false;
  }
}


//Implementação da função de validação da altura
function validaAltura(altura) {

  if (altura >= 0 && altura <= 3.00) {
    return true;
  } else {
    return false;
  }
}
