@extends('principal')

@section('titulo', 'Exibir Testes')

@section('conteudo')


  <div class="container">
<div class="table-responsive">

<table class="table">
  <thead>
    <tr>
      <th>Código do teste</th>
      <th>Codigo do paciente</th>
      <th>Codigo do procedumento</th>
      <th>Data</th>
    </tr>
  </thead>
  <tbody>

  <td>ID:{{ $test->id }}</td>
  <td>ID do paciente: {{ $test->user_id }}</td>
  <td>ID do procedimento: {{ $test->procedure_id }}</td>
  <td>Data:{{$test->date}} </td>

</tbody>
</table>
</div>
</div>

<div class="container col-ml-23 ">
<a  class="btn btn-secondary" href="{{ route('tests.index') }}">Voltar</a>
<a class="btn-btn-primary" href="{{ route('tests.edit', $test->id) }}">Editar</a>

   <form method="post" action="{{ route('tests.destroy', $test->id) }}" onsubmit="return confirm('Confirma exclusão do teste?');" >

     @csrf
     @method('DELETE')
     <input type="submit" value="Excluir">
   </form>
 </div>



@endsection
