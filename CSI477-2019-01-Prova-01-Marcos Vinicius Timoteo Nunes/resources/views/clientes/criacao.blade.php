@extends('admin')

@section('titulo', 'Incluir clientes')


@section('conteudo')
  {{--
  Pagina para a inclusão de novo cliente --}}
  <form  method="post" action="{{ route('clientes.store') }}"> @csrf
    <div class="form-row">
      <div class="form-group col-md-2">

        <div class="form-group">
          <label for="inputID">ID:</label>
          <input type="number" class="form-control" name="id" id="inputID" placeholder="id do cliente">
        </div>

        <div class="form-group">
          <label for="inputNome">Nome:</label>
          <input type="text" class="form-control" name="nome" id="inputNome" placeholder="Nome do cliente">
        </div>

        <div class="col-md-4">
          <input type="submit" name="btnSalvar" value="Incluir"  href="{{ route('tipos.index') }}">
        </div>
      </div>
    </div>
  </form>





@endsection
