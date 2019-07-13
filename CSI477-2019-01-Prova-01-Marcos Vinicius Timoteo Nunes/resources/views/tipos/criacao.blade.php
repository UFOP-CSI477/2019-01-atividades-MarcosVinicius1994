@extends('admin')

@section('titulo', 'Exibir transferencias por cliente')


@section('conteudo')

  {{--
  Pagina para a criação de um novo tipo de transação --}}
  <form  method="post" action="{{ route('tipos.store') }}"> @csrf
    <div class="form-row">
      <div class="form-group col-md-2">


        <div class="form-group">
          <label for="inputNome">Nome:</label>
          <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome da operação">
        </div>

        <div class="col-md-4">
          <input type="submit" name="btnSalvar" value="Incluir"  href="{{ route('clientes.index') }}">
        </div>
      </div>
    </div>
  </form>





@endsection
