@extends('cliente')

@section('titulo', 'Exibir transferencias')


@section('conteudo')

  {{-- <script type="text/javascript">

  var base_url="<@php
  echo "base_url()";
@endphp"

$(function(){
$('#clientes').change(function(){
var cliente_id =$('#clientes').val();


$.post(base_url+'index.php/ajax/getTrans',{
cliente_id : cliente_id
}, function(data){
alert(cliente_id);
});
});

});

</script>
--}}





      {{-- <ul class="nav navbar-nav">
      <li class="active"><a href="/RecuperaClienteTrans/{{ $dados[$clientes->id] }}">Transações por cliente:</a></li>
    </ul> --}}
  





@endsection
