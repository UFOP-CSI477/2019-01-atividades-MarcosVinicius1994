var botaoAdicionar = document.querySelector("#adicionar-paciente");
botaoAdicionar.addEventListener("click", function(event) {
  event.preventDefault();

  var form = document.querySelector("#form-adiciona");

//Obtem paciente com os dados de entrada
  var paciente = obtemPacienteDoFormulario(form);

//validação do paciente
  var erros = validaPaciente(paciente);

  if (erros.length > 0) {
    exibeMensagensDeErro(erros);

    return;
  }

//Adiciona paciente na tabela
  adicionaPacienteNaTabela(paciente);

  form.reset();

  var mensagensErro = document.querySelector("#mensagens-erro");
  mensagensErro.innerHTML = "";



});

//Implementação da função de obtenção do paciente do formulario e retorno o objeto paciente
function obtemPacienteDoFormulario(form) {

  var paciente = {
    nome: form.nome.value,
    peso: form.peso.value,
    altura: form.altura.value,
    valorimc: calculaImc(form.peso.value, form.altura.value),
    intervaloimc: obtemIntervaloIMC(form.peso.value, form.altura.value),
    classificacao: obterClassificação(form.peso.value, form.altura.value),
    idealpeso: pesoIdeal(form.peso.value, form.altura.value)
  }

  return paciente;
}


//Implementação da função e montagem das Tr's com os dados do paciente e chamada a montagem das TD's
function montaTr(paciente) {
  var pacienteTr = document.createElement("tr");
  pacienteTr.classList.add("paciente");

  pacienteTr.appendChild(montaTd(paciente.nome, "info-nome"));
  pacienteTr.appendChild(montaTd(paciente.peso, "info-peso"));
  pacienteTr.appendChild(montaTd(paciente.altura, "info-altura"));
  pacienteTr.appendChild(montaTd(paciente.valorimc, "info-valorimc"));
  pacienteTr.appendChild(montaTd(paciente.intervaloimc, "info-intervaloimc"));
  pacienteTr.appendChild(montaTd(paciente.classificacao, "info-classificacao"));
  pacienteTr.appendChild(montaTd(paciente.idealpeso, "info-pesoideal"));

  return pacienteTr;
}


//Implementação da função de montagem das TD's
function montaTd(dado, classe) {
  var td = document.createElement("td");
  td.classList.add(classe);
  td.textContent = dado;

  return td;
}



//Implementação da função de validação do paciente e tramento os erros de input
function validaPaciente(paciente) {

  var erros = [];

  if (paciente.nome.length == 0) {
    erros.push("O nome não pode ser em branco");
  }

  if (paciente.peso.length == 0) {
    erros.push("O peso não pode ser em branco");
  }

  if (paciente.altura.length == 0) {
    erros.push("A altura não pode ser em branco");
  }

  if (!validaPeso(paciente.peso)) {
    erros.push("Peso é inválido");
  }

  if (!validaAltura(paciente.altura)) {
    erros.push("Altura é inválida");
  }

  return erros;
}


//Implementação da função de exibir mensagens de erro
function exibeMensagensDeErro(erros) {
  var ul = document.querySelector("#mensagens-erro");
  ul.innerHTML = "";

  erros.forEach(function(erro) {
    var li = document.createElement("li");
    li.textContent = erro;
    ul.appendChild(li);
  });
}

// Implementação da fução de adicionar paciente na tabela
function adicionaPacienteNaTabela(paciente) {
  var pacienteTr = montaTr(paciente);
  var tabela = document.querySelector("#tabela-pacientes");
  tabela.appendChild(pacienteTr);
}
