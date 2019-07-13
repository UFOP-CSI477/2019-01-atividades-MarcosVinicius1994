@extends('cliente')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

@section('titulo', 'Exibir transferencias')


{{--
Nesta parte do codigo, eu tentei fazer uma comunicação ajax, para enviar o
Id recuperado pelo envento de clique até a outra view, mas não deu certo. Estava
ocorrendo um erro na rota passada no metodo post
<script type="text/javascript">

var base_url;

$(function(){
$('#cliente_id').change(function(){
var cliente_id = $('#cliente_id').val();
alert(cliente_id);

$.ajax({
type      : 'post',
url       : 'trans',
data      :  {cliente_id: cliente_id},

success: function (response) {
$('#cliente_id').html(response);
},
error: function(){
alert('Falha!');
}
});

});
});
</script>
--}}



{{--
Nesta parte do codigo eu pego incluo codigos do tipo style do css
para tentar filtrar a tabela em questão que foi gerada com todas as
transações e seus clientes afim de mostrar apenas os dados referentes aquele ID
recuperado no select
--}}
 {{-- <style media="screen">

*{
	box-sizing: border-box;
 }

body{
	font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
	font-size: 14px;
}

header{
	background-color: #333;
	height: 3em;
	color: #FFF;
	margin-bottom: 1em;
}

header h1{
	font-size: 2em;
	display:inline-block;
	vertical-align:	middle;
}
header h2{
	font-size: 2em;
	display:inline-block;
	vertical-align:	middle;
}

header .container:before{
	content: '';
	display:inline-block;
	height: 100%;
	vertical-align:	middle;
}

.container{
	width: 60%;
	height: 100%;
	margin: 0 auto;
}

section{
	margin: 2em 0;
	overflow: hidden;
}

section h2{
	font-size: 3em;
	display: block;
	padding-bottom: .5em;
	border-bottom: 1px solid #ccc;
	margin-bottom: .5em;
}

table{
	width: 100%;
	margin-bottom : .5em;
    table-layout: fixed;

}

td, th {
	padding: .7em;
	margin: 0;
	border: 1px solid #ccc;
	text-align: center;
}

th{
	font-weight: bold;
	background-color: #EEE;
}

label{
	color: #555;
	display: block;
	margin-bottom: .2em;
}

.campo{
	margin: 0;
	padding-bottom: 1em;
	width: 100%;
	border: 1px solid #ccc;
	padding: .7em;
	width: 100%;
}

.campo-medio{
	display: inline-block;
	padding-right: .5em;
}

.grupo{
	width: 32%;
	display: inline-block;
	padding: 10px 0px;
}

button{
	padding: .5em 2em;
	border: 0;
	border-bottom: 3px solid;
	font-size: 1.2em;
	cursor: pointer;
	margin: 0;
	margin-top: -3px;
	color: #fff;
	background-color:#0c8cd3;
	border-color: #04324c;
	width: 20%;
    display: block;
    clear: both;
    margin: 10px 0px;

}

button:active{
	margin-top:0px;
	border: 0;
}

button[disabled=disabled], button:disabled {
    background-color: gray;
	border-color: darkgray;

}

.adicionar-paciente{
    margin-top: 30px;
}

.campo-invalido{
	border: 1px solid red;
}
.paciente-invalido{

	background-color: red;

}

#Mensagem-erro{
	color: red;
}


.fadeOut{
	opacity: 0;
	transition: 0.5s;
}



.invisivel{
	display: none;
}


</style> --}}



{{--
Neste trecho de codigo eu utilizo do javascript para pegar a tabela elemento que contem todas as transações e tento filtra la de acordo
com o ID,mas não ta dando certo porque o ID do select já vem selecionado em um valor
e mesmo eu fazendo o ready da pagina não consigo pegar este outro valor de ID
--}}
{{--
 <script type="text/javascript">

  var campoFiltro = document.querySelector("#filtrar-tabela"); --}}
 {{-- //
 //
 // campoFiltro.addEventListener("input", function(){
 // 	console.log(this.value);

//
// $(function(){
//    var elementos = document.querySelectorAll(".elemento");
//   $('#cliente_id').change(function(){
//    var cliente_id = $('#cliente_id').val();
//      alert(cliente_id);
//
//    if( $('#cliente_id').val() >0){
//        for (var i = 0; i<elementos.length; i++) {
//          var elemento = elementos[i];
//          var tdidCliente = $(".infoidcliente").val();
//
//          if( cliente_id == tdidCliente){
//            elemento.classList.add("invisivel");
//          }else{
//            elemento.classList.remove("invisivel");
//          }
//        }
     // }else{
     //   for (var i = 0; i<elementos.length; i++) {
     //     var elemento = elementos[i];
     //     elemento.classList.remove("invisivel");
     //   }
     // }

//    });
//  });
// //
//
//
 // </script>
 --}}

@section('conteudo')



  <div class="container">
    <div class="row">
      <h1 class="text-center">Clientes e suas transações</h1>


      <div class="form-group">
        <label for="clientes">Cliente</label>





        <form action="/trans.index" method="post">
          {{-- Nome:  <input type="text" name="username" /><br />
          Email: <input type="text" name="email" /><br />
          <input type="submit" name="submit" value="Me aperte!" /> --}}


          {{-- Neste trecho de codigo eu faço o select com todos os clientes  --}}
          <select id="cliente_id"class="form-control" name="cliente_id">
            <option value=""
            ></option>
            @foreach($clientes as $c)
              <option value="{{ $c->id }}"
                > {{ $c->nome }}</option>
              @endforeach
            </select>

          </form>




          {{--
          Nesta parte eu crio a tabela com todas as transações --}}
          @foreach($clientes as $c)
            @foreach ($trans as $t)
              @if ($c->id == $t->cliente_id)
                <div class="container">
                  <div class="table-responsive">

                    <table id="tabela"class="table">
                      <thead>
                        <tr>
                          <th>id do cliente:</th>
                          <th>Nome do cliente:</th>
                          <th>Id da transação:</th>
                          <th>Data da transação:</th>
                          <th>Tipo:</th>
                          <th>Valor:</th>
                          <th>Credito:</th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr  class="elemento" >
                          <td class="infoidcliente">{{ $c->id }}</td>
                          <td class="infonome">{{ $c->nome }}</td>
                          <td class="infoid">{{  $t->id}}</td>
                          <td class="infodata">{{  $t->data}}</td>
                          <td class="tipoid">{{  $t->tipo_id}}</td>
                          <td class="valorid">{{  $t->valor}}</td>
                          <td class="tcredito">{{  $t->credito}}</td>

                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              @endif
            @endforeach
          @endforeach
          {{-- <option value="{{ $c->id }}"
          > {{ $c->nome }}</option> --}}
          {{-- @foreach($trans as $t)
          <option value="{{ $t->id }}"
          > {{ $t->id }}</option>
        @endforeach --}}





        {{-- <ul class="nav navbar-nav">
        <li class="active"><a href="/RecuperaClienteTrans/{{ $dados[$clientes->id] }}">Transações por cliente:</a></li>
      </ul> --}}
    </div>
  </div>
</div>




@endsection
