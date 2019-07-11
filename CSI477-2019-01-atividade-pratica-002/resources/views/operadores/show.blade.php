@extends('principal')

@section('titulo', 'Exibir Procedimentos')

@section('conteudo')


  <div class="container">
<div class="table-responsive">

<table class="table">
  <thead>
    <tr>
      <th>Código</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>Adm responsavel</th>
      <th>Data de criação</th>
      <th>Data de atualização</th>
    </tr>
  </thead>
  <tbody>

  <td>ID:{{ $procedure->id }}</td>
  <td>Nome: {{ $procedure->name }}</td>
  <td>Preço: {{ $procedure->price }}</td>
  <td>Id do adm:{{auth::user()->id}} </td>
  <td>Data decriação:{{$procedure->created_at}} </td>
  <td>Data de atualização:{{$procedure->update_at}} </td>

</tbody>
</table>
</div>
</div>

<div class="container col-ml-23 ">
<a  class="btn btn-secondary" href="{{ route('operadores.index') }}">Voltar</a>
<a class="btn-btn-primary" href="{{ route('operadores.edit', $procedure->id) }}">Editar</a>

 </div>













@endsection
